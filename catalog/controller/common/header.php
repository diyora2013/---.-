<?php
class ControllerCommonHeader extends Controller {
	public function index() {
		// Analytics
		$this->load->model('setting/extension');

		$data['analytics'] = array();

		$analytics = $this->model_setting_extension->getExtensions('analytics');

		foreach ($analytics as $analytic) {
			if ($this->config->get('analytics_' . $analytic['code'] . '_status')) {
				$data['analytics'][] = $this->load->controller('extension/analytics/' . $analytic['code'], $this->config->get('analytics_' . $analytic['code'] . '_status'));
			}
		}

		if ($this->request->server['HTTPS']) {
			$server = $this->config->get('config_ssl');
		} else {
			$server = $this->config->get('config_url');
		}

		if (is_file(DIR_IMAGE . $this->config->get('config_icon'))) {
			$this->document->addLink($server . 'image/' . $this->config->get('config_icon'), 'icon');
		}

		$themeoption_info = $this->model_setting_extension->getThemeOption();
		$data['loader'] = $themeoption_info['loader'];
		
		$data['title'] = $this->document->getTitle();

		$data['base'] = $server;
		$data['description'] = $this->document->getDescription();
		$data['keywords'] = $this->document->getKeywords();
		$data['links'] = $this->document->getLinks();
		$data['styles'] = $this->document->getStyles();
		$data['scripts'] = $this->document->getScripts('header');
		$data['lang'] = $this->language->get('code');
		$data['direction'] = $this->language->get('direction');

		$data['name'] = $this->config->get('config_name');

		if (is_file(DIR_IMAGE . $this->config->get('config_logo'))) {
			$data['logo'] = $server . 'image/' . $this->config->get('config_logo');
		} else {
			$data['logo'] = '';
		}

		$this->load->language('common/header');

		if(!isset($this->request->get['route']) || ($this->request->get['route'] == 'common/home')) {
			$data['ishome'] = 'home';
		} else {
			$data['ishome'] = 'other';
		}	

		if(!isset($this->request->get['route']) || ($this->request->get['route'] == 'common/home')) {
			$data['ishihomepage'] = 'home-page';
		} else {
			$data['ishihomepage'] = 'other-page';
		}

		// Wishlist
		if ($this->customer->isLogged()) {
			$this->load->model('account/wishlist');

			$data['text_wishlist'] = sprintf($this->language->get('text_wishlist'), $this->model_account_wishlist->getTotalWishlist());
		} else {
			$data['text_wishlist'] = sprintf($this->language->get('text_wishlist'), (isset($this->session->data['wishlist']) ? count($this->session->data['wishlist']) : 0));
		}

		$data['text_logged'] = sprintf($this->language->get('text_logged'), $this->url->link('account/account', '', true), $this->customer->getFirstName(), $this->url->link('account/logout', '', true));
		
		$data['home'] = $this->url->link('common/home');
		$data['wishlist'] = $this->url->link('account/wishlist', '', true);
		$data['logged'] = $this->customer->isLogged();
		$data['account'] = $this->url->link('account/account', '', true);
		$data['register'] = $this->url->link('account/register', '', true);
		$data['login'] = $this->url->link('account/login', '', true);
		$data['order'] = $this->url->link('account/order', '', true);
		$data['transaction'] = $this->url->link('account/transaction', '', true);
		$data['download'] = $this->url->link('account/download', '', true);
		$data['logout'] = $this->url->link('account/logout', '', true);
		$data['shopping_cart'] = $this->url->link('checkout/cart');
		$data['checkout'] = $this->url->link('checkout/checkout', '', true);
		$data['contact'] = $this->url->link('information/contact');
		$data['telephone'] = $this->config->get('config_telephone');
		$data['email'] = $this->config->get('config_email');
		$data['activetemplate'] = $this->config->get('theme_default_directory');
		
		$data['language'] = $this->load->controller('common/language');
		$data['currency'] = $this->load->controller('common/currency');
		$data['search'] = $this->load->controller('common/search');
		$data['cart'] = $this->load->controller('common/cart');
		$data['menu'] = $this->load->controller('common/menu');
		$data['headerbefore'] = $this->load->controller('common/headerbefore');
		$data['headerafter'] = $this->load->controller('common/headerafter');

		$themeoption_info = $this->model_setting_extension->getThemeOption();
		
		if($themeoption_info['dev_mode'] == 1){
			$this->regenerate();
		}
		
		return $this->load->view('common/header', $data);
	}
	public function regenerate(){
		
		$this->load->model('setting/extension');
		$themeoption_info = $this->model_setting_extension->getThemeOption();
		$rtl = false;
		$activetemplate = $this->config->get('theme_default_directory');
	
		require 'scss.inc.php';
		$scss = new scssc();
		$sourceDirectory = DIR_TEMPLATE . $activetemplate .'/scss/';
		$targetDirectory = DIR_TEMPLATE . $activetemplate .'/stylesheet/';
		$targetRTLFile = $targetDirectory .'rtl.css';
		$targetCSSFile = $targetDirectory .'stylesheet.css';
		$scss->setImportPaths($sourceDirectory);
		
		$variableFile = $sourceDirectory .'temporaryvariables.scss';
		$vFile = fopen($variableFile, "w") or die("Unable to open file!");
		fwrite($vFile, $this->generateVariablesForCSS($themeoption_info));
		fclose($vFile);
		
		if($rtl){
			$all_css = $scss->compile('@import "rtl.scss"');
			$stylefile = fopen($targetRTLFile, "w") or die("Unable to open file!");	
			fwrite($stylefile, $all_css);
			fclose($stylefile);		
		}else{
			$all_css = $scss->compile('@import "theme.scss"');
			$stylefile = fopen($targetCSSFile, "w") or die("Unable to open file!");	
			fwrite($stylefile, $all_css);
			fclose($stylefile);
		}		
		
		$this->model_setting_extension->changeDevMode();
	}


	public function generateVariablesForCSS($themeoption_info) {

		list($r, $g, $b) = sscanf($themeoption_info['secondary_color'], "#%02x%02x%02x");
		$rgb_color = $r .', ' . $g .', ' .$b .', .6';

		list($r, $g, $b) = sscanf($themeoption_info['tertiary_color'], "#%02x%02x%02x");
		$rgb_titlecolor = $r .', ' . $g .', ' .$b .', .9';

		$breadcrumb_image = '';
		if(!empty($themeoption_info['breadcrumb_image'])) {
			if ($this->request->server['HTTPS']) {
				$breadcrumb_image = $this->config->get('config_ssl') . 'image/' . $themeoption_info['breadcrumb_image'];
			} else {
				$breadcrumb_image = $this->config->get('config_url') . 'image/' . $themeoption_info['breadcrumb_image'];
			}
		}

		$theme_bg_image = '';
		if(!empty($themeoption_info['theme_bg_image'])) {
			if ($this->request->server['HTTPS']) {
				$theme_bg_image = $this->config->get('config_ssl') . 'image/' . $themeoption_info['theme_bg_image'];
			} else {
				$theme_bg_image = $this->config->get('config_url') . 'image/' . $themeoption_info['theme_bg_image'];
			}
		}

		$footer_bgimage ='';
		if(!empty($themeoption_info['footer_bgimage'])) {
			if ($this->request->server['HTTPS']) {
				$footer_bgimage = $this->config->get('config_ssl') . 'image/' . $themeoption_info['footer_bgimage'];
			} else {
				$footer_bgimage = $this->config->get('config_url') . 'image/' . $themeoption_info['footer_bgimage'];
			}
		}

		$vars = '';
		$vars .= '$brand-primary: '. $themeoption_info['primarycolor'] .';'.PHP_EOL;
		$vars .= '$brand-secondary: '. $themeoption_info['secondary_color'] .';'.PHP_EOL;
		$vars .= '$brand-third: '. $themeoption_info['tertiary_color'] .';'.PHP_EOL;
		$vars .= '$icon-color: '. $themeoption_info['icon_color'] .';'.PHP_EOL;
		$vars .= '$icon-responsivecolor: '. $themeoption_info['icon_responsivecolor'] .';'.PHP_EOL;
		$vars .= '$background_image:"'. $theme_bg_image .'";'.PHP_EOL;
		$vars .= '$breadcrumb_color:'. $themeoption_info['breadcrumb_color'] .';'.PHP_EOL;
		$vars .= '$breadcrumb_image:"'. $breadcrumb_image .'";'.PHP_EOL;
		$vars .= '$rgba-bgcolor:rgba('. $rgb_color .');'.PHP_EOL;
		$vars .= '$rgba-titlecolor:rgba('. $rgb_titlecolor .');'.PHP_EOL;
		$vars .= '$btn-primary-bg-color:'. $themeoption_info['btn_color'] .';'.PHP_EOL;
		$vars .= '$btn-hover-primary-bg-color:'. $themeoption_info['btn_hover_color'] .';'.PHP_EOL;
		$vars .= '$btn-primary-text-color:'. $themeoption_info['btn_txtcolor'] .';'.PHP_EOL;
		$vars .= '$btn-hover-primary-text-color:'. $themeoption_info['btn_hover_txtcolor'] .';'.PHP_EOL;
		$vars .= '$btn-secondary-bg-color:'. $themeoption_info['custom_btn_color'] .';'.PHP_EOL;
		$vars .= '$btn-hover-secondary-bg-color:'. $themeoption_info['custom_btn_hover_color'] .';'.PHP_EOL;
		$vars .= '$btn-secondary-text-color:'. $themeoption_info['custom_btn_txtcolor'] .';'.PHP_EOL;
		$vars .= '$btn-hover-secondary-text-color:'. $themeoption_info['custom_btn_hover_txtcolor'] .';'.PHP_EOL;
		$vars .= '$header-top-bg-color:'. $themeoption_info['header_top_bgcolor'] .';'.PHP_EOL;
		$vars .= '$header-top-text-color:'. $themeoption_info['header_top_textcolor'] .';'.PHP_EOL;
		$vars .= '$header-text-color:'. $themeoption_info['header_textcolor'] .';'.PHP_EOL;
		$vars .= '$header-hover-text-color:'. $themeoption_info['header_text_hovercolor'] .';'.PHP_EOL;
		$vars .= '$product-icon-color:'. $themeoption_info['product_iconcolor'] .';'.PHP_EOL;
		$vars .= '$product-hover-icon-color:'. $themeoption_info['product_icon_hovercolor'] .';'.PHP_EOL;
		$vars .= '$footer-bg-color:'. $themeoption_info['footer_bgcolor'] .';'.PHP_EOL;
		$vars .= '$footer-bg-image:"'. $footer_bgimage .'";'.PHP_EOL;
		$vars .= '$footer-title-color:'. $themeoption_info['footer_titlecolor'] .';'.PHP_EOL;
		$vars .= '$footer-text-color:'. $themeoption_info['footer_textcolor'] .';'.PHP_EOL;
		$vars .= '$footer-hover-text-color:'. $themeoption_info['footer_text_hovercolor'] .';'.PHP_EOL;

		return $vars;
	}
}
