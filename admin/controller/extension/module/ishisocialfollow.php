<?php
class ControllerExtensionModuleIshiSocialFollow extends Controller {
	private $error = array();

	public function index() {
		$this->load->language('extension/module/ishisocialfollow');

		$this->document->setTitle($this->language->get('heading_title1'));

		$this->load->model('setting/module');

		if (($this->request->server['REQUEST_METHOD'] == 'POST') && $this->validate()) {
			if (!isset($this->request->get['module_id'])) {
				$this->model_setting_module->addModule('ishisocialfollow', $this->request->post);
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
				'href' => $this->url->link('extension/module/ishisocialfollow', 'user_token=' . $this->session->data['user_token'], true)
			);
		} else {
			$data['breadcrumbs'][] = array(
				'text' => $this->language->get('heading_title1'),
				'href' => $this->url->link('extension/module/ishisocialfollow', 'user_token=' . $this->session->data['user_token'] . '&module_id=' . $this->request->get['module_id'], true)
			);
		}

		if (!isset($this->request->get['module_id'])) {
			$data['action'] = $this->url->link('extension/module/ishisocialfollow', 'user_token=' . $this->session->data['user_token'], true);
		} else {
			$data['action'] = $this->url->link('extension/module/ishisocialfollow', 'user_token=' . $this->session->data['user_token'] . '&module_id=' . $this->request->get['module_id'], true);
		}

		$data['cancel'] = $this->url->link('marketplace/extension', 'user_token=' . $this->session->data['user_token'] . '&type=module', true);

		if (isset($this->request->get['module_id']) && ($this->request->server['REQUEST_METHOD'] != 'POST')) {
			$module_info = $this->model_setting_module->getModule($this->request->get['module_id']);
		}

		$data['user_token'] = $this->session->data['user_token'];

		if (isset($this->request->post['name'])) {
			$data['name'] = $this->request->post['name'];
		} elseif (!empty($module_info)) {
			$data['name'] = $module_info['name'];
		} else {
			$data['name'] = '';
		}

		$this->load->model('localisation/language');

		$data['languages'] = $this->model_localisation_language->getLanguages();
		
		if (isset($this->request->post['facebook'])) {
			$data['facebook'] = $this->request->post['facebook'];
		} elseif (!empty($module_info)) {
			$data['facebook'] = $module_info['facebook'];
		} else {
			$data['facebook'] = '';
		}

		if (isset($this->request->post['twitter'])) {
			$data['twitter'] = $this->request->post['twitter'];
		} elseif (!empty($module_info)) {
			$data['twitter'] = $module_info['twitter'];
		} else {
			$data['twitter'] = '';
		}

		if (isset($this->request->post['youtube'])) {
			$data['youtube'] = $this->request->post['youtube'];
		} elseif (!empty($module_info)) {
			$data['youtube'] = $module_info['youtube'];
		} else {
			$data['youtube'] = '';
		}

		if (isset($this->request->post['gplus'])) {
			$data['gplus'] = $this->request->post['gplus'];
		} elseif (!empty($module_info)) {
			$data['gplus'] = $module_info['gplus'];
		} else {
			$data['gplus'] = '';
		}

		if (isset($this->request->post['rss'])) {
			$data['rss'] = $this->request->post['rss'];
		} elseif (!empty($module_info)) {
			$data['rss'] = $module_info['rss'];
		} else {
			$data['rss'] = '';
		}

		if (isset($this->request->post['pinterest'])) {
			$data['pinterest'] = $this->request->post['pinterest'];
		} elseif (!empty($module_info)) {
			$data['pinterest'] = $module_info['pinterest'];
		} else {
			$data['pinterest'] = '';
		}

		if (isset($this->request->post['vimeo'])) {
			$data['vimeo'] = $this->request->post['vimeo'];
		} elseif (!empty($module_info)) {
			$data['vimeo'] = $module_info['vimeo'];
		} else {
			$data['vimeo'] = '';
		}

		if (isset($this->request->post['instagram'])) {
			$data['instagram'] = $this->request->post['instagram'];
		} elseif (!empty($module_info)) {
			$data['instagram'] = $module_info['instagram'];
		} else {
			$data['instagram'] = '';
		}

		if (isset($this->request->post['status'])) {
			$data['status'] = $this->request->post['status'];
		} elseif (!empty($module_info)) {
			$data['status'] = $module_info['status'];
		} else {
			$data['status'] = '';
		}

		$data['header'] = $this->load->controller('common/header');
		$data['column_left'] = $this->load->controller('common/column_left');
		$data['footer'] = $this->load->controller('common/footer');

		$this->response->setOutput($this->load->view('extension/module/ishisocialfollow', $data));
	}

	protected function validate() {
		if (!$this->user->hasPermission('modify', 'extension/module/ishisocialfollow')) {
			$this->error['warning'] = $this->language->get('error_permission');
		}

		if ((utf8_strlen($this->request->post['name']) < 3) || (utf8_strlen($this->request->post['name']) > 64)) {
			$this->error['name'] = $this->language->get('error_name');
		}

		return !$this->error;
	}
}
