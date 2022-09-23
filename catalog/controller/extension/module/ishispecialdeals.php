<?php
class ControllerExtensionModuleIshiSpecialDeals extends Controller {
	public function index($setting) {
		
		$this->load->language('extension/module/ishispecialdeals');
		$this->load->language('product/quickview');
		
		$language_id = $this->config->get('config_language_id');

		$this->load->model('catalog/product');

		$this->load->model('tool/image');

		$data['products'] = array();

		if(isset($setting['title'][$language_id])){
			$data['heading'] = $setting['title'][$language_id];
		}
		
		$data['ishi_randomnumer'] = "ishispecialdeal-" . rand();
		$limit = $setting['limit'];
		$data['product_row'] = $setting['product_row'];
		
			$filter_data = array(
			'sort'  => 'pd.name',
			'order' => 'ASC',
			'start' => 0,
			'limit' => $limit
		);
	
		$data['review'] = (isset($setting['review']) && $setting['review'] == 1) ? 1 : 0;
		$data['description'] = (isset($setting['description']) && $setting['description'] == 1) ? 1 : 0;
		$data['displaycounter'] = (isset($setting['counter']) && $setting['counter'] == 1) ? 1 : 0;
		
		$results = $this->model_catalog_product->getProductSpecials($filter_data);

		if ($results) {
			foreach ($results as $result) {
				$extraimage = '';

				if ($result['image']) {
					$image = $this->model_tool_image->resize($result['image'], $setting['width'], $setting['height']);
				} else {
					$image = $this->model_tool_image->resize('placeholder.png', $setting['width'], $setting['height']);
				}

				$images = $this->model_catalog_product->getProductImages($result['product_id']);

				if(!empty($images) && isset($images[0]['image'])){
				 $extraimage = $this->model_tool_image->resize($images[0]['image'], $setting['width'], $setting['height']);
				}

				if(!empty($images) && isset($images[1]['image'])){
				 $extraimage1 = $this->model_tool_image->resize($images[1]['image'], $setting['width'], $setting['height']);
				}

				if(!empty($images) && isset($images[2]['image'])){
				 $extraimage2 = $this->model_tool_image->resize($images[2]['image'], $setting['width'], $setting['height']);
				}

				if ($this->customer->isLogged() || !$this->config->get('config_customer_price')) {
					$price = $this->currency->format($this->tax->calculate($result['price'], $result['tax_class_id'], $this->config->get('config_tax')), $this->session->data['currency']);
				} else {
					$price = false;
				}

				if ((float)$result['special']) {
					$special = $this->currency->format($this->tax->calculate($result['special'], $result['tax_class_id'], $this->config->get('config_tax')), $this->session->data['currency']);
				} else {
					$special = false;
				}

				if ($this->config->get('config_tax')) {
					$tax = $this->currency->format((float)$result['special'] ? $result['special'] : $result['price'], $this->session->data['currency']);
				} else {
					$tax = false;
				}

				if ($this->config->get('config_review_status')) {
					$rating = $result['rating'];
				} else {
					$rating = false;
				}

				$specialDates = $this->model_catalog_product->getProductSpecialsDate($result['product_id']);
				if($specialDates['date_end'] == '0000-00-00')
					continue;

				
				$data['special'][] = array(
					'product_id'  => $result['product_id'],
					'thumb'       => $image,
					'extra'       => $extraimage,
					'extra1'       => $extraimage1,
					'extra2'       => $extraimage2,
					'name'        => $result['name'],
					'description' => utf8_substr(trim(strip_tags(html_entity_decode($result['description'], ENT_QUOTES, 'UTF-8'))), 0, $this->config->get('theme_' . $this->config->get('config_theme') . '_product_description_length')) . '..',
					'price'       => $price,
					'special'     => $special,
					'date_start'     => $specialDates['date_start'],
					'date_end'     => $specialDates['date_end'],
					'tax'         => $tax,
					'rating'      => $rating,
					'quick'        => $this->url->link('product/quick_view','&product_id=' . $result['product_id']),
					'href'        => $this->url->link('product/product', 'product_id=' . $result['product_id'])
				);
			}
		}
		return $this->load->view('extension/module/ishispecialdeals', $data);
	}
}
