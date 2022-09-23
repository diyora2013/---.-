<?php
class ControllerCommonThemeOption extends Controller {
	public function index() {
		$this->load->language('common/themeoption');
		$this->load->model('setting/setting');
		
		$this->document->setTitle($this->language->get('heading_title'));

		$data['user_token'] = $this->session->data['user_token'];
		
		$data['breadcrumbs'] = array();

		$data['breadcrumbs'][] = array(
			'text' => $this->language->get('text_home'),
			'href' => $this->url->link('common/themeoption', 'user_token=' . $this->session->data['user_token'], true)
		);

		$data['breadcrumbs'][] = array(
			'text' => $this->language->get('heading_title'),
			'href' => $this->url->link('common/themeoption', 'user_token=' . $this->session->data['user_token'], true)
		);
		
		$this->model_setting_setting->createThemeOptionTable();
		
		if (isset($this->session->data['success'])) {
			$data['success'] = $this->session->data['success'];
			unset($this->session->data['success']);
		} else {
			$data['success'] = '';
		}

		if (isset($this->error['warning'])) {
			$data['error_warning'] = $this->error['warning'];
		} else {
			$data['error_warning'] = '';

		}
		
		if ($this->request->server['REQUEST_METHOD'] == 'POST' && $this->validateForm()) {		

			$this->model_setting_setting->editThemeOption($this->request->post);

			$this->session->data['success'] = $this->language->get('text_success');

		}	

		$general_info = $this->model_setting_setting->getThemeOption();
		
		$data['action'] = $this->url->link('common/themeoption', 'user_token=' . $this->session->data['user_token'], 'SSL');
		
		if (isset($this->request->post['primarycolor'])) {
			$data['primarycolor'] = $this->request->post['primarycolor'];
		} elseif (isset($general_info)) {
			$data['primarycolor'] = $general_info['primarycolor'];
		} else {
			$data['primarycolor'] = '#000000';
		}
		
		if (isset($this->request->post['secondary_color'])) {
			$data['secondary_color'] = $this->request->post['secondary_color'];
		} elseif (isset($general_info)) {
			$data['secondary_color'] = $general_info['secondary_color'];
		} else {
			$data['secondary_color'] = '#e20048';
		}

		if (isset($this->request->post['tertiary_color'])) {
			$data['tertiary_color'] = $this->request->post['tertiary_color'];
		} elseif (isset($general_info)) {
			$data['tertiary_color'] = $general_info['tertiary_color'];
		} else {
			$data['tertiary_color'] = '#f2ac3d';
		}
		
		if (isset($this->request->post['icon_color'])) {
			$data['icon_color'] = $this->request->post['icon_color'];
		} elseif (isset($general_info)) {
			$data['icon_color'] = $general_info['icon_color'];
		} else {
			$data['icon_color'] = '#e20048';
		}
		
		if (isset($this->request->post['icon_responsivecolor'])) {
			$data['icon_responsivecolor'] = $this->request->post['icon_responsivecolor'];
		} elseif (isset($general_info)) {
			$data['icon_responsivecolor'] = $general_info['icon_responsivecolor'];
		} else {
			$data['icon_responsivecolor'] = '#ffffff';
		}
		
		if (isset($this->request->post['breadcrumb_color'])) {
			$data['breadcrumb_color'] = $this->request->post['breadcrumb_color'];
		} elseif (isset($general_info)) {
			$data['breadcrumb_color'] = $general_info['breadcrumb_color'];
		} else {
			$data['breadcrumb_color'] = '#DCD3CE';
		}
		
		if (isset($this->request->post['loader'])) {
			$data['loader'] = $this->request->post['loader'];
		} elseif (isset($general_info)) {
			$data['loader'] = $general_info['loader'];
		} else {
			$data['loader'] = 'loader_1';
		}
		
		if (isset($this->request->post['subcategory_type'])) {
			$data['subcategory_type'] = $this->request->post['subcategory_type'];
		} elseif (isset($general_info)) {
			$data['subcategory_type'] = $general_info['subcategory_type'];
		} else {
			$data['subcategory_type'] = 'grid';
		}
		/* breadcrumb image*/
		if (isset($this->request->post['breadcrumb_image'])) {
			$data['breadcrumb_image'] = $this->request->post['breadcrumb_image'];
		} elseif (isset($general_info)) {
			$data['breadcrumb_image'] = $general_info['breadcrumb_image'];
		} else {
			$data['breadcrumb_image'] = '#DCD3CE';
		}
		
		$this->load->model('tool/image');

		if (isset($this->request->post['breadcrumb_image']) && is_file(DIR_IMAGE . $this->request->post['breadcrumb_image'])) {
			$data['thumb'] = $this->model_tool_image->resize($this->request->post['breadcrumb_image'], 100, 100);
		} elseif (!empty($general_info) && is_file(DIR_IMAGE . $general_info['breadcrumb_image'])) {
			$data['thumb'] = $this->model_tool_image->resize($general_info['breadcrumb_image'], 100, 100);
		} else {
			$data['thumb'] = $this->model_tool_image->resize('no_image.png', 100, 100);
		}

		/*theme image*/
		if (isset($this->request->post['theme_bg_image'])) {
			$data['theme_bg_image'] = $this->request->post['theme_bg_image'];
		} elseif (isset($general_info)) {
			$data['theme_bg_image'] = $general_info['theme_bg_image'];
		} else {
			$data['theme_bg_image'] = '#DCD3CE';
		}
		
		$this->load->model('tool/image');

		if (isset($this->request->post['theme_bg_image']) && is_file(DIR_IMAGE . $this->request->post['theme_bg_image'])) {
			$data['thumb_bg'] = $this->model_tool_image->resize($this->request->post['theme_bg_image'], 100, 100);
		} elseif (!empty($general_info) && is_file(DIR_IMAGE . $general_info['theme_bg_image'])) {
			$data['thumb_bg'] = $this->model_tool_image->resize($general_info['theme_bg_image'], 100, 100);
		} else {
			$data['thumb_bg'] = $this->model_tool_image->resize('no_image.png', 100, 100);
		}

		$data['placeholder'] = $this->model_tool_image->resize('no_image.png', 100, 100);
		
		if (isset($this->request->post['category_counter'])) {
			$data['category_counter'] = $this->request->post['category_counter'];
		} elseif (!empty($general_info) && $general_info['category_counter'] == 1) {
			$data['category_counter'] = $general_info['category_counter'];
		} else {
			$data['category_counter'] = 0;
		}

		if (isset($this->request->post['product_counter'])) {
			$data['product_counter'] = $this->request->post['product_counter'];
		} elseif (!empty($general_info) && isset($general_info['product_counter'])) {
			$data['product_counter'] = $general_info['product_counter'];
		} else {
			$data['product_counter'] = 0;
		}
		
		if (isset($this->request->post['btn_color'])) {
			$data['btn_color'] = $this->request->post['btn_color'];
		} elseif (isset($general_info)) {
			$data['btn_color'] = $general_info['btn_color'];
		} else {
			$data['btn_color'] = '#000000';
		}
		
		if (isset($this->request->post['btn_txtcolor'])) {
			$data['btn_txtcolor'] = $this->request->post['btn_txtcolor'];
		} elseif (isset($general_info)) {
			$data['btn_txtcolor'] = $general_info['btn_txtcolor'];
		} else {
			$data['btn_txtcolor'] = '#ffffff';
		}
		
		if (isset($this->request->post['btn_hover_color'])) {
			$data['btn_hover_color'] = $this->request->post['btn_hover_color'];
		} elseif (isset($general_info)) {
			$data['btn_hover_color'] = $general_info['btn_hover_color'];
		} else {
			$data['btn_hover_color'] = '#e20048';
		}
		
		if (isset($this->request->post['btn_hover_txtcolor'])) {
			$data['btn_hover_txtcolor'] = $this->request->post['btn_hover_txtcolor'];
		} elseif (isset($general_info)) {
			$data['btn_hover_txtcolor'] = $general_info['btn_hover_txtcolor'];
		} else {
			$data['btn_hover_txtcolor'] = '#ffffff';
		}
		
		if (isset($this->request->post['custom_btn_color'])) {
			$data['custom_btn_color'] = $this->request->post['custom_btn_color'];
		} elseif (isset($general_info)) {
			$data['custom_btn_color'] = $general_info['custom_btn_color'];
		} else {
			$data['custom_btn_color'] = '#e20048';
		}
		
		if (isset($this->request->post['custom_btn_txtcolor'])) {
			$data['custom_btn_txtcolor'] = $this->request->post['custom_btn_txtcolor'];
		} elseif (isset($general_info)) {
			$data['custom_btn_txtcolor'] = $general_info['custom_btn_txtcolor'];
		} else {
			$data['custom_btn_txtcolor'] = '#ffffff';
		}
		
		if (isset($this->request->post['custom_btn_hover_color'])) {
			$data['custom_btn_hover_color'] = $this->request->post['custom_btn_hover_color'];
		} elseif (isset($general_info)) {
			$data['custom_btn_hover_color'] = $general_info['custom_btn_hover_color'];
		} else {
			$data['custom_btn_hover_color'] = '#000000';
		}
		
		if (isset($this->request->post['custom_btn_hover_txtcolor'])) {
			$data['custom_btn_hover_txtcolor'] = $this->request->post['custom_btn_hover_txtcolor'];
		} elseif (isset($general_info)) {
			$data['custom_btn_hover_txtcolor'] = $general_info['custom_btn_hover_txtcolor'];
		} else {
			$data['custom_btn_hover_txtcolor'] = '#ffffff';
		}

		if (isset($this->request->post['header_top_bgcolor'])) {
			$data['header_top_bgcolor'] = $this->request->post['header_top_bgcolor'];
		} elseif (isset($general_info)) {
			$data['header_top_bgcolor'] = $general_info['header_top_bgcolor'];
		} else {
			$data['header_top_bgcolor'] = '#f4f4f7';
		}

		if (isset($this->request->post['header_top_textcolor'])) {
			$data['header_top_textcolor'] = $this->request->post['header_top_textcolor'];
		} elseif (isset($general_info)) {
			$data['header_top_textcolor'] = $general_info['header_top_textcolor'];
		} else {
			$data['header_top_textcolor'] = '#000000';
		}

		if (isset($this->request->post['header_textcolor'])) {
			$data['header_textcolor'] = $this->request->post['header_textcolor'];
		} elseif (isset($general_info)) {
			$data['header_textcolor'] = $general_info['header_textcolor'];
		} else {
			$data['header_textcolor'] = '#000000';
		}

		if (isset($this->request->post['header_text_hovercolor'])) {
			$data['header_text_hovercolor'] = $this->request->post['header_text_hovercolor'];
		} elseif (isset($general_info)) {
			$data['header_text_hovercolor'] = $general_info['header_text_hovercolor'];
		} else {
			$data['header_text_hovercolor'] = '#e20048';
		}
		
		if (isset($this->request->post['product_iconcolor'])) {
			$data['product_iconcolor'] = $this->request->post['product_iconcolor'];
		} elseif (isset($general_info)) {
			$data['product_iconcolor'] = $general_info['product_iconcolor'];
		} else {
			$data['product_iconcolor'] = '#000000';
		}
		
		if (isset($this->request->post['product_icon_hovercolor'])) {
			$data['product_icon_hovercolor'] = $this->request->post['product_icon_hovercolor'];
		} elseif (isset($general_info)) {
			$data['product_icon_hovercolor'] = $general_info['product_icon_hovercolor'];
		} else {
			$data['product_icon_hovercolor'] = '#e20048';
		}

		if (isset($this->request->post['footer_titlecolor'])) {
			$data['footer_titlecolor'] = $this->request->post['footer_titlecolor'];
		} elseif (isset($general_info)) {
			$data['footer_titlecolor'] = $general_info['footer_titlecolor'];
		} else {
			$data['footer_titlecolor'] = '#000000';
		}

		if (isset($this->request->post['footer_textcolor'])) {
			$data['footer_textcolor'] = $this->request->post['footer_textcolor'];
		} elseif (isset($general_info)) {
			$data['footer_textcolor'] = $general_info['footer_textcolor'];
		} else {
			$data['footer_textcolor'] = '#666666';
		}

		if (isset($this->request->post['footer_text_hovercolor'])) {
			$data['footer_text_hovercolor'] = $this->request->post['footer_text_hovercolor'];
		} elseif (isset($general_info)) {
			$data['footer_text_hovercolor'] = $general_info['footer_text_hovercolor'];
		} else {
			$data['footer_text_hovercolor'] = '#e20048';
		}
		
		if (isset($this->request->post['footer_bgcolor'])) {
			$data['footer_bgcolor'] = $this->request->post['footer_bgcolor'];
		} elseif (isset($general_info)) {
			$data['footer_bgcolor'] = $general_info['footer_bgcolor'];
		} else {
			$data['footer_bgcolor'] = '#f7f7f7';
		}
		
		if (isset($this->request->post['footer_bgimage'])) {
			$data['footer_bgimage'] = $this->request->post['footer_bgimage'];
		} elseif (isset($general_info)) {
			$data['footer_bgimage'] = $general_info['footer_bgimage'];
		} else {
			$data['footer_bgimage'] = '';
		}

		if (isset($this->request->post['footer_bgimage']) && is_file(DIR_IMAGE . $this->request->post['footer_bgimage'])) {
			$data['footer_thumb'] = $this->model_tool_image->resize($this->request->post['footer_bgimage'], 100, 100);
		} elseif (!empty($general_info) && is_file(DIR_IMAGE . $general_info['footer_bgimage'])) {
			$data['footer_thumb'] = $this->model_tool_image->resize($general_info['footer_bgimage'], 100, 100);
		} else {
			$data['footer_thumb'] = $this->model_tool_image->resize('no_image.png', 100, 100);
		}
		$placeholder = $this->model_tool_image->resize('no_image.png', 100, 100);
		$data['placeholder'] = $this->model_tool_image->resize('no_image.png', 100, 100);
		$data['header'] = $this->load->controller('common/header');
		$data['column_left'] = $this->load->controller('common/column_left');
		$data['footer'] = $this->load->controller('common/footer');

		$this->response->setOutput($this->load->view('common/themeoption', $data));
	}
	
	private function validateForm() {

		if (!$this->user->hasPermission('modify', 'common/themeoption')) {

			$this->error['warning'] = $this->language->get('error_permission');

		}

		if (!$this->error) {

			return TRUE;

		} else {

			return FALSE;

		}

	}
}
