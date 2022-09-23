<?php
class ControllerExtensionModuleIshiSlider extends Controller {
	private $error = array();

	public function index() {
		$this->load->language('extension/module/ishislider');

		$this->document->setTitle($this->language->get('heading_title1'));
	
		$this->load->model('setting/module');

		if (($this->request->server['REQUEST_METHOD'] == 'POST') && $this->validate()) {
			if (!isset($this->request->get['module_id'])) {
				$this->model_setting_module->addModule('ishislider', $this->request->post);
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
		
		if (isset($this->error['ishi_image'])) {
			$data['error_ishi_image'] = $this->error['ishi_image'];
		} else {
			$data['error_ishi_image'] = array();
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
				'href' => $this->url->link('extension/module/ishislider', 'user_token=' . $this->session->data['user_token'], true)
			);
		} else {
			$data['breadcrumbs'][] = array(
				'text' => $this->language->get('heading_title1'),
				'href' => $this->url->link('extension/module/ishislider', 'user_token=' . $this->session->data['user_token'] . '&module_id=' . $this->request->get['module_id'], true)
			);
		}

		if (!isset($this->request->get['module_id'])) {
			$data['action'] = $this->url->link('extension/module/ishislider', 'user_token=' . $this->session->data['user_token'], true);
		} else {
			$data['action'] = $this->url->link('extension/module/ishislider', 'user_token=' . $this->session->data['user_token'] . '&module_id=' . $this->request->get['module_id'], true);
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
		
		if (isset($this->request->post['status'])) {
			$data['status'] = $this->request->post['status'];
		} elseif (!empty($module_info)) {
			$data['status'] = $module_info['status'];
		} else {
			$data['status'] = true;
		}
		
		$this->load->model('localisation/language');

		$data['languages'] = $this->model_localisation_language->getLanguages();

		$this->load->model('tool/image');

		if (isset($this->request->post['ishi_image'])) {
			$ishi_images = $this->request->post['ishi_image'];
		} elseif (!empty($module_info)) {
			$ishi_images = $module_info['ishi_image'];
		} else {
			$ishi_images = array();
		}

		$data['ishi_images'] = array();

		foreach ($ishi_images as $key => $value) {
			foreach ($value as $ishi_image) {
				if (is_file(DIR_IMAGE . $ishi_image['image'])) {
					$image = $ishi_image['image'];
					$thumb = $ishi_image['image'];
				} else {
					$image = '';
					$thumb = 'no_image.png';
				}
				
				$data['ishi_images'][$key][] = array(
					'title'      => $ishi_image['title'],
					'titlecolor'      => $ishi_image['titlecolor'],
					'subtitle'      => $ishi_image['subtitle'],
					'subtitlecolor'      => $ishi_image['subtitlecolor'],
					'description'      => $ishi_image['description'],
					'descriptioncolor'      => $ishi_image['descriptioncolor'],
					'btntext'      => $ishi_image['btntext'],
					'textalignment'       => $ishi_image['textalignment'],
					'textposition'       => $ishi_image['textposition'],
					'link'       => $ishi_image['link'],
					'image'      => $image,
					'thumb'      => $this->model_tool_image->resize($thumb, 100, 100),
					'sort_order' => $ishi_image['sort_order']
				);
			}
		}

		$data['placeholder'] = $this->model_tool_image->resize('no_image.png', 100, 100);

		if (isset($this->request->post['width'])) {
			$data['width'] = $this->request->post['width'];
		} elseif (!empty($module_info)) {
			$data['width'] = $module_info['width'];
		} else {
			$data['width'] = '1903';
		}

		if (isset($this->request->post['height'])) {
			$data['height'] = $this->request->post['height'];
		} elseif (!empty($module_info)) {
			$data['height'] = $module_info['height'];
		} else {
			$data['height'] = '793';
		}
		
		if (isset($this->request->post['autoplay'])) {
			$data['autoplay'] = $this->request->post['autoplay'];
		} elseif (!empty($module_info) && isset($module_info['autoplay'])) {
			$data['autoplay'] = $module_info['autoplay'];
		} else {
			$data['autoplay'] = '0';
		}
		
		if (isset($this->request->post['navigation'])) {
			$data['navigation'] = $this->request->post['navigation'];
		} elseif (!empty($module_info) && isset($module_info['navigation'])) {
			$data['navigation'] = $module_info['navigation'];
		} else {
			$data['navigation'] = '0';
		}
		
		if (isset($this->request->post['navigation_style'])) {
			$data['navigation_style'] = $this->request->post['navigation_style'];
		} elseif (!empty($module_info)) {
			$data['navigation_style'] = $module_info['navigation_style'];
		} else {
			$data['navigation_style'] = 'ishi-style-nav1';
		}
		
		if (isset($this->request->post['dot'])) {
			$data['dot'] = $this->request->post['dot'];
		} elseif (!empty($module_info) && isset($module_info['dot'])) {
			$data['dot'] = $module_info['dot'];
		} else {
			$data['dot'] = '0';
		}
		
		if (isset($this->request->post['dot_style'])) {
			$data['dot_style'] = $this->request->post['dot_style'];
		} elseif (!empty($module_info)) {
			$data['dot_style'] = $module_info['dot_style'];
		} else {
			$data['dot_style'] = 'ishi-style-dot1';
		}

		$data['header'] = $this->load->controller('common/header');
		$data['column_left'] = $this->load->controller('common/column_left');
		$data['footer'] = $this->load->controller('common/footer');

		$this->response->setOutput($this->load->view('extension/module/ishislider', $data));
	}

	protected function validate() {
		if (!$this->user->hasPermission('modify', 'extension/module/ishislider')) {
			$this->error['warning'] = $this->language->get('error_permission');
		}

		if ((utf8_strlen($this->request->post['name']) < 3) || (utf8_strlen($this->request->post['name']) > 64)) {
			$this->error['name'] = $this->language->get('error_name');
		}

		if (!$this->request->post['width']) {
			$this->error['width'] = $this->language->get('error_width');
		}

		if (!$this->request->post['height']) {
			$this->error['height'] = $this->language->get('error_height');
		}

		if (isset($this->request->post['ishi_image'])) {
			foreach ($this->request->post['ishi_image'] as $language_id => $value) {
				foreach ($value as $ishi_image_id => $ishi_image) {
					if ((utf8_strlen($ishi_image['title']) < 2) || (utf8_strlen($ishi_image['title']) > 64)) {
						$this->error['ishi_image'][$language_id][$ishi_image_id] = $this->language->get('error_imgtitle');
					}
				}
			}
		}
		
		return !$this->error;
	}
}