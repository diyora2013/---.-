<?php
class ControllerExtensionModuleIshiBannerBlock extends Controller {
	private $error = array();

	public function index() {
		$this->load->language('extension/module/ishibannerblock');

		$this->document->setTitle($this->language->get('heading_title1'));

		$this->load->model('setting/module');

		if (($this->request->server['REQUEST_METHOD'] == 'POST') && $this->validate()) {
			if (!isset($this->request->get['module_id'])) {
				$this->model_setting_module->addModule('ishibannerblock', $this->request->post);
			} else {
				$this->model_setting_module->editModule($this->request->get['module_id'], $this->request->post);
			}

			$this->session->data['success'] = $this->language->get('text_success');

			$this->response->redirect($this->url->link('marketplace/extension', 'user_token=' . $this->session->data['user_token'] . '&type=module', true));
		}

		if (isset($this->error['warning'])) {
			$data['error_warning'] = $this->error['warning'];
		} else {
			$data['error_warning'] = '';
		}

		if (isset($this->error['name'])) {
			$data['error_name'] = $this->error['name'];
		} else {
			$data['error_name'] = '';
		}

		if (isset($this->error['width'])) {
			$data['error_width'] = $this->error['width'];
		} else {
			$data['error_width'] = '';
		}

		if (isset($this->error['height'])) {
			$data['error_height'] = $this->error['height'];
		} else {
			$data['error_height'] = '';
		}

		$data['breadcrumbs'] = array();

		$data['breadcrumbs'][] = array(
			'text' => $this->language->get('text_home'),
			'href' => $this->url->link('common/dashboard', 'user_token=' . $this->session->data['user_token'], true)
		);

		$data['breadcrumbs'][] = array(
			'text' => $this->language->get('text_extension'),
			'href' => $this->url->link('marketplace/extension', 'user_token=' . $this->session->data['user_token'] . '&type=module', true)
		);

		if (!isset($this->request->get['module_id'])) {
			$data['breadcrumbs'][] = array(
				'text' => $this->language->get('heading_title1'),
				'href' => $this->url->link('extension/module/ishibannerblock', 'user_token=' . $this->session->data['user_token'], true)
			);
		} else {
			$data['breadcrumbs'][] = array(
				'text' => $this->language->get('heading_title1'),
				'href' => $this->url->link('extension/module/ishibannerblock', 'user_token=' . $this->session->data['user_token'] . '&module_id=' . $this->request->get['module_id'], true)
			);
		}

		if (!isset($this->request->get['module_id'])) {
			$data['action'] = $this->url->link('extension/module/ishibannerblock', 'user_token=' . $this->session->data['user_token'], true);
		} else {
			$data['action'] = $this->url->link('extension/module/ishibannerblock', 'user_token=' . $this->session->data['user_token'] . '&module_id=' . $this->request->get['module_id'], true);
		}

		$data['cancel'] = $this->url->link('marketplace/extension', 'user_token=' . $this->session->data['user_token'] . '&type=module', true);

		if (isset($this->request->get['module_id']) && ($this->request->server['REQUEST_METHOD'] != 'POST')) {
			$module_info = $this->model_setting_module->getModule($this->request->get['module_id']);
		}

		if (isset($this->request->post['name'])) {
			$data['name'] = $this->request->post['name'];
		} elseif (!empty($module_info)) {
			$data['name'] = $module_info['name'];
		} else {
			$data['name'] = '';
		}
		
		if (isset($this->request->post['width'])) {
			$data['width'] = $this->request->post['width'];
		} elseif (!empty($module_info)) {
			$data['width'] = $module_info['width'];
		} else {
			$data['width'] = '';
		}
		
		if (isset($this->request->post['height'])) {
			$data['height'] = $this->request->post['height'];
		} elseif (!empty($module_info)) {
			$data['height'] = $module_info['height'];
		} else {
			$data['height'] = '';
		}
		
		if (isset($this->request->post['column'])) {
			$data['column'] = $this->request->post['column'];
		} elseif (!empty($module_info)) {
			$data['column'] = $module_info['column'];
		} else {
			$data['column'] = '3';
		}
		
		if (isset($this->request->post['style'])) {
			$data['style'] = $this->request->post['style'];
		} elseif (!empty($module_info) && isset($module_info['style'])) {
			$data['style'] = $module_info['style'];
		} else {
			$data['style'] = 'ishi-customhover-fadeinnormal';
		}

		if (isset($this->request->post['status'])) {
			$data['status'] = $this->request->post['status'];
		} elseif (!empty($module_info) && isset($module_info['status'])) {
			$data['status'] = $module_info['status'];
		} else {
			$data['status'] = 0;
		}
		
		if (isset($this->request->post['scale'])) {
			$data['scale'] = $this->request->post['scale'];
		} elseif (!empty($module_info) && isset($module_info['scale'])) {
			$data['scale'] = $module_info['scale'];
		} else {
			$data['scale'] = 0;
		}
		
		$this->load->model('localisation/language');

		$data['languages'] = $this->model_localisation_language->getLanguages();

		$this->load->model('tool/image');

		if (isset($this->request->post['ishibanner'])) {
			$ishi_banners = $this->request->post['ishibanner'];
		} elseif (!empty($module_info) && isset($module_info['ishibanner'])) {
			$ishi_banners = $module_info['ishibanner'];
		} else {
			$ishi_banners = array();
		}

		$data['ishi_banners'] = array();
		$cur_language_id = $this->config->get('config_language_id');
		
		foreach ($ishi_banners as $ishi_banner) {
			// Image
			if (isset($this->request->post['image'])) {
				$image = $this->request->post['image'];
			} elseif (!empty($ishi_banner)) {
				$image = $ishi_banner['image'];
			} else {
				$image = 'no_image.png';
			}

			if (isset($this->request->post['image']) && is_file(DIR_IMAGE . $this->request->post['image'])) {
				$thumb = $this->model_tool_image->resize($this->request->post['image'], 100, 100);
			} elseif (!empty($ishi_banner) && is_file(DIR_IMAGE . $ishi_banner['image'])) {
				$thumb = $this->model_tool_image->resize($ishi_banner['image'], 100, 100);
			} else {
				$thumb = $this->model_tool_image->resize('no_image.png', 100, 100);
			}

			$placeholder = $this->model_tool_image->resize('no_image.png', 100, 100);
						
			$data['entry_banner'] = $this->language->get('entry_banner');
			
			$default_name = (isset($title[$cur_language_id]) && $title[$cur_language_id] != '') ? $title[$cur_language_id] : $data['entry_banner'];
			
			if ($ishi_banners) {
				$data['ishi_banners'][] = array(
					'image'        		  => $image,
					'thumb'        		  => $thumb,
					'placeholder'         => $placeholder,
					'link'                => $ishi_banner['link'],
					'sort_order'          => $ishi_banner['sort_order'],
					'default_name'        => $default_name
				);
			}
		}

		$data['placeholder'] = $this->model_tool_image->resize('no_image.png', 100, 100);
		$data['thumb'] = $this->model_tool_image->resize('no_image.png', 100, 100);

		$data['header'] = $this->load->controller('common/header');
		$data['column_left'] = $this->load->controller('common/column_left');
		$data['footer'] = $this->load->controller('common/footer');

		$this->response->setOutput($this->load->view('extension/module/ishibannerblock', $data));
	}

	protected function validate() {
		if (!$this->user->hasPermission('modify', 'extension/module/ishibannerblock')) {
			$this->error['warning'] = $this->language->get('error_permission');
		}

		if (!$this->request->post['width']) {
			$this->error['width'] = $this->language->get('error_width');
		}

		if (!$this->request->post['height']) {
			$this->error['height'] = $this->language->get('error_height');
		}

		return !$this->error;
	}
}
