<?php
class ControllerExtensionModuleIshiOffersBlock extends Controller {
	private $error = array();

	public function index() {
		$this->load->language('extension/module/ishioffersblock');
		$this->load->model('ishithemes/ishioffersblock');

		$this->document->setTitle($this->language->get('heading_title1'));

		$this->load->model('setting/module');

		if (($this->request->server['REQUEST_METHOD'] == 'POST') && $this->validate()) {
			if (!isset($this->request->get['module_id'])) {
				$module_id = $this->model_ishithemes_ishioffersblock->addModule('ishioffersblock', $this->request->post);

				$this->session->data['success'] = $this->language->get('text_success');

				$this->response->redirect($this->url->link('extension/module/ishioffersblock', 'user_token=' . $this->session->data['user_token'] . '&module_id=' . $module_id, true));
			} else {
				$this->model_setting_module->editModule($this->request->get['module_id'], $this->request->post);

				$this->session->data['success'] = $this->language->get('text_success');

				$this->response->redirect($this->url->link('marketplace/extension', 'user_token=' . $this->session->data['user_token']. '&type=module', true));
			}
		}

		$data['heading_title'] = $this->language->get('heading_title');

		$data['text_edit'] = $this->language->get('text_edit');
		$data['text_enabled'] = $this->language->get('text_enabled');
		$data['text_disabled'] = $this->language->get('text_disabled');
		$data['text_yes'] = $this->language->get('text_yes');
		$data['text_no'] = $this->language->get('text_no');
		$data['text_save_module'] = $this->language->get('text_save_module');
		$data['text_no_results'] = $this->language->get('text_no_results');
		$data['text_confirm'] = $this->language->get('text_confirm');

		if (!isset($this->request->get['module_id'])) {
			$data['text_view_list'] = sprintf($this->language->get('text_view_list'), $this->url->link('extension/module/ishioffersblock/view_list', 'user_token=' . $this->session->data['user_token'], true));
		} else {
			$data['text_view_list'] = sprintf($this->language->get('text_view_list'), $this->url->link('extension/module/ishioffersblock/view_list', 'user_token=' . $this->session->data['user_token'] . '&module_id=' . $this->request->get['module_id'], true));
		}

		$data['entry_name'] = $this->language->get('entry_name');
		$data['entry_status'] = $this->language->get('entry_status');

		$data['help_limit'] = $this->language->get('help_limit');
		$data['help_char_limit'] = $this->language->get('help_char_limit');

		$data['column_title'] = $this->language->get('column_title');
		$data['column_status'] = $this->language->get('column_status');
		$data['column_comments'] = $this->language->get('column_comments');
		$data['column_date_added'] = $this->language->get('column_date_added');
		$data['column_action'] = $this->language->get('column_action');

		$data['button_save'] = $this->language->get('button_save');
		$data['button_cancel'] = $this->language->get('button_cancel');
		$data['button_edit'] = $this->language->get('button_edit');
		$data['button_delete'] = $this->language->get('button_delete');

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

		if (isset($this->session->data['success'])) {
			$data['success'] = $this->session->data['success'];

			unset($this->session->data['success']);
		} else {
			$data['success'] = '';
		}

		$data['breadcrumbs'] = array();

		$data['breadcrumbs'][] = array(
			'text' => $this->language->get('text_home'),
			'href' => $this->url->link('common/dashboard', 'user_token=' . $this->session->data['user_token'], true)
		);

		$data['breadcrumbs'][] = array(
			'text' => $this->language->get('text_extension'),
			'href' => $this->url->link('marketplace/extension', 'user_token=' . $this->session->data['user_token']. '&type=module', true)
		);

		if (!isset($this->request->get['module_id'])) {
			$data['breadcrumbs'][] = array(
				'text' => $this->language->get('heading_title1'),
				'href' => $this->url->link('extension/module/ishioffersblock', 'user_token=' . $this->session->data['user_token'], true)
			);
		} else {
			$data['breadcrumbs'][] = array(
				'text' => $this->language->get('heading_title1'),
				'href' => $this->url->link('extension/module/ishioffersblock', 'user_token=' . $this->session->data['user_token'] . '&module_id=' . $this->request->get['module_id'], true)
			);
		}

		if (!isset($this->request->get['module_id'])) {
			$data['action'] = $this->url->link('extension/module/ishioffersblock', 'user_token=' . $this->session->data['user_token'], true);
		} else {
			$data['action'] = $this->url->link('extension/module/ishioffersblock', 'user_token=' . $this->session->data['user_token'] . '&module_id=' . $this->request->get['module_id'], true);
		}

		$data['cancel'] = $this->url->link('marketplace/extension', 'user_token=' . $this->session->data['user_token']. '&type=module', true);

		if (!isset($this->request->get['module_id'])) {
			$data['add_offer'] = '';
		} elseif (!$this->request->get['module_id']) {
			$data['add_offer'] = '';
		} else {
			$data['add_offer'] = $this->url->link('extension/module/ishioffersblock/add', 'user_token=' . $this->session->data['user_token'] . '&module_id=' . $this->request->get['module_id'], true);
		}

		if (isset($this->request->get['module_id']) && ($this->request->server['REQUEST_METHOD'] != 'POST')) {
			$module_info = $this->model_setting_module->getModule($this->request->get['module_id']);
		}

		if (isset($this->request->post['module_id'])) {
			$data['module_id'] = $this->request->post['module_id'];
		} elseif (isset($this->request->get['module_id'])) {
			$data['module_id'] = $this->request->get['module_id'];
		} elseif (!empty($module_info)) {
			$data['module_id'] = $module_info['module_id'];
		} else {
			$data['module_id'] = '';
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
			$data['status'] = '';
		}

		$data['offer_entries'] = array();

		if (!isset($this->request->get['module_id'])) {
			$results = array();
		} else {
			$results = $this->model_ishithemes_ishioffersblock->getOffers();
		}

		if ($results) {
			foreach ($results as $result) {

				$data['offer_entries'][] = array(
					'offer_id'     => $result['offer_id'],
					'title'          => $result['title'],
					'date_added'     => date($this->language->get('date_format_short'), strtotime($result['date_added'])),
					'edit'           => $this->url->link('extension/module/ishioffersblock/edit', 'user_token=' . $this->session->data['user_token'] . '&offer_id=' . $result['offer_id'] . '&module_id=' . $this->request->get['module_id'], true),
					'delete'         => $this->url->link('extension/module/ishioffersblock/delete', 'user_token=' . $this->session->data['user_token'] . '&offer_id=' . $result['offer_id'] . '&module_id=' . $this->request->get['module_id'], true)
				);
			}
		}

		$data['header'] = $this->load->controller('common/header');
		$data['column_left'] = $this->load->controller('common/column_left');
		$data['footer'] = $this->load->controller('common/footer');
		$this->response->setOutput($this->load->view('extension/module/ishioffersblock', $data));
	}

	protected function validate() {
		if (!$this->user->hasPermission('modify', 'extension/module/ishioffersblock')) {
			$this->error['warning'] = $this->language->get('error_permission');
		}

		if ((utf8_strlen($this->request->post['name']) < 3) || (utf8_strlen($this->request->post['name']) > 64)) {
			$this->error['name'] = $this->language->get('error_name');
		}

		return !$this->error;
	}

	public function install() {
		$this->load->model('ishithemes/ishioffersblock');

		$this->model_ishithemes_ishioffersblock->createOffers();
	}

	public function uninstall() {
		$this->load->model('ishithemes/ishioffersblock');

		$this->model_ishithemes_ishioffersblock->dropOffers();
	}

	public function add() {
		$this->load->language('extension/module/ishioffersblock');

		$this->document->setTitle($this->language->get('heading_title1'));

		$this->load->model('ishithemes/ishioffersblock');

		if (($this->request->server['REQUEST_METHOD'] == 'POST') && $this->validateForm()) {
			$this->model_ishithemes_ishioffersblock->addOffer($this->request->post);

			$this->session->data['success'] = $this->language->get('text_success');

			$this->response->redirect($this->url->link('extension/module/ishioffersblock', 'user_token=' . $this->session->data['user_token'] . '&module_id=' . $this->request->post['module_id'], true));
		}

		$this->getForm();
	}

	public function edit() {
		$this->load->language('extension/module/ishioffersblock');

		$this->document->setTitle($this->language->get('heading_title1'));

		$this->load->model('ishithemes/ishioffersblock');

		if (($this->request->server['REQUEST_METHOD'] == 'POST') && $this->validateForm()) {
			$this->model_ishithemes_ishioffersblock->editOffer($this->request->get['offer_id'], $this->request->post);

			$this->session->data['success'] = $this->language->get('text_success');

			$this->response->redirect($this->url->link('extension/module/ishioffersblock', 'user_token=' . $this->session->data['user_token'] . '&module_id=' . $this->request->post['module_id'], true));
		}

		$this->getForm();
	}

	public function delete() {
		$this->load->language('extension/module/ishioffersblock');

		$this->document->setTitle($this->language->get('heading_title1'));

		$this->load->model('ishithemes/ishioffersblock');

		if (isset($this->request->post['selected']) && $this->validateDelete()) {
			foreach ($this->request->post['selected'] as $offer_id) {
				$this->model_ishithemes_ishioffersblock->deleteOffer($offer_id);
			}

			$this->session->data['success'] = $this->language->get('text_success');

			$url = '';

			if (isset($this->request->get['sort'])) {
				$url .= '&sort=' . $this->request->get['sort'];
			}

			if (isset($this->request->get['order'])) {
				$url .= '&order=' . $this->request->get['order'];
			}

			if (isset($this->request->get['page'])) {
				$url .= '&page=' . $this->request->get['page'];
			}

			$this->response->redirect($this->url->link('extension/module/ishioffersblock/view_list', 'user_token=' . $this->session->data['user_token'] . $url, true));
		} elseif ((isset($this->request->get['offer_id']) && isset($this->request->get['delete'])) && $this->validateDelete()) {
			$this->model_ishithemes_ishioffersblock->deleteOffer($this->request->get['offer_id']);

			$this->session->data['success'] = $this->language->get('text_success');

		$this->response->redirect($this->url->link('extension/module/ishioffersblock', 'user_token=' . $this->session->data['user_token'] . '&module_id=' . $this->request->get['module_id'], true));
		}else{
		$this->model_ishithemes_ishioffersblock->deleteOffer($this->request->get['offer_id']);
		$this->session->data['success'] = $this->language->get('text_success');
		}

		if (!isset($this->request->get['module_id'])) {
			$this->response->redirect($this->url->link('extension/module/ishioffersblock/view_list', 'user_token=' . $this->session->data['user_token'], true));
		} else {
			$this->response->redirect($this->url->link('extension/module/ishioffersblock', 'user_token=' . $this->session->data['user_token'] . '&module_id=' . $this->request->get['module_id'], true));
		}
	}

	protected function getForm() {
		$data['heading_title1'] = $this->language->get('heading_title1');
		
		$data['text_form'] = !isset($this->request->get['offer_id']) ? $this->language->get('text_add') : $this->language->get('text_form');
		$data['text_default'] = $this->language->get('text_default');
		$data['text_enabled'] = $this->language->get('text_enabled');
		$data['text_disabled'] = $this->language->get('text_disabled');
		$data['text_unallocated'] = $this->language->get('text_unallocated');

		$data['entry_title'] = $this->language->get('entry_title');

		$data['button_save'] = $this->language->get('button_save');
		$data['button_cancel'] = $this->language->get('button_cancel');

		$data['tab_general'] = $this->language->get('tab_general');
		$data['tab_data'] = $this->language->get('tab_data');

		if (isset($this->error['warning'])) {
			$data['error_warning'] = $this->error['warning'];
		} else {
			$data['error_warning'] = '';
		}

		if (isset($this->error['title'])) {
			$data['error_title'] = $this->error['title'];
		} else {
			$data['error_title'] = array();
		}

		if (isset($this->error['module'])) {
			$data['error_module'] = $this->error['module'];
		} else {
			$data['error_module'] = '';
		}

		$data['breadcrumbs'] = array();

		$data['breadcrumbs'][] = array(
			'text' => $this->language->get('text_home'),
			'href' => $this->url->link('common/dashboard', 'user_token=' . $this->session->data['user_token'], true)
		);

		$data['breadcrumbs'][] = array(
			'text' => $this->language->get('text_extension'),
			'href' => $this->url->link('marketplace/extension', 'user_token=' . $this->session->data['user_token']. '&type=module', true)
		);

		if (!isset($this->request->get['module_id'])) {
			$data['breadcrumbs'][] = array(
				'text' => $this->language->get('heading_title1'),
				'href' => $this->url->link('extension/module/ishioffersblock/view_list', 'user_token=' . $this->session->data['user_token'], true)
			);
		} else {
			$data['breadcrumbs'][] = array(
				'text' => $this->language->get('heading_title1'),
				'href' => $this->url->link('extension/module/ishioffersblock', 'user_token=' . $this->session->data['user_token'] . '&module_id=' . $this->request->get['module_id'], true)
			);
		}
		
		if (!isset($this->request->get['offer_id'])) {
			$data['action'] = $this->url->link('extension/module/ishioffersblock/add', 'user_token=' . $this->session->data['user_token'] . '&module_id=' . $this->request->get['module_id'], true);
		} else {
			$data['action'] = $this->url->link('extension/module/ishioffersblock/edit', 'user_token=' . $this->session->data['user_token'] . '&offer_id=' . $this->request->get['offer_id'], true);
		}

		if (isset($this->request->get['offer_id']) && ($this->request->server['REQUEST_METHOD'] != 'POST')) {
			$offer_info = $this->model_ishithemes_ishioffersblock->getOffer($this->request->get['offer_id']);
		}

		if (isset($this->request->post['module_id'])) {
			$data['cancel'] = $this->url->link('extension/module/ishioffersblock', 'user_token=' . $this->session->data['user_token'] . '&module_id=' . $this->request->post['module_id'], true);
		} elseif (isset($this->request->get['module_id'])) {
			$data['cancel'] = $this->url->link('extension/module/ishioffersblock', 'user_token=' . $this->session->data['user_token'] . '&module_id=' . $this->request->get['module_id'], true);
		} elseif (!empty($offer_info)) {
			$data['cancel'] = $this->url->link('extension/module/ishioffersblock', 'user_token=' . $this->session->data['user_token'] . '&module_id=' . $this->request->post['module_id'], true);
		} else {
			$data['cancel'] = $this->url->link('extension/module/ishioffersblock/view_list', 'user_token=' . $this->session->data['user_token']. '&type=module', true);
		}

		$data['user_token'] = $this->session->data['user_token'];

		$this->load->model('localisation/language');

		$data['languages'] = $this->model_localisation_language->getLanguages();

		if (isset($this->request->post['offer_description'])) {
			$data['offer_description'] = $this->request->post['offer_description'];
		} elseif (isset($this->request->get['offer_id'])) {
			$data['offer_description'] = $this->model_ishithemes_ishioffersblock->getOfferDescriptions($this->request->get['offer_id']);
		} else {
			$data['offer_description'] = array();
		}

		$data['module_id'] = $this->request->get['module_id'];
		$data['header'] = $this->load->controller('common/header');
		$data['column_left'] = $this->load->controller('common/column_left');
		$data['footer'] = $this->load->controller('common/footer');
		
		$this->response->setOutput($this->load->view('extension/module/ishioffersblock/form', $data));
	}

	protected function validateForm() {
		if (!$this->user->hasPermission('modify', 'extension/module/ishioffersblock')) {
			$this->error['warning'] = $this->language->get('error_permission');
		}

		foreach ($this->request->post['offer_description'] as $language_id => $value) {
			if (utf8_strlen($value['title']) < 3) {
				$this->error['title'][$language_id] = $this->language->get('error_title');
			}
		}

		if ($this->error && !isset($this->error['warning'])) {
			$this->error['warning'] = $this->language->get('error_warning');
		}

		return !$this->error;
	}

	protected function validateDelete() {
		if (!$this->user->hasPermission('modify', 'extension/module/ishioffersblock')) {
			$this->error['warning'] = $this->language->get('error_permission');
		}

		return !$this->error;
	}

	public function view_list() {
		$this->load->language('extension/module/ishioffersblock');

		$this->document->setTitle($this->language->get('heading_title1'));

		$this->load->model('ishithemes/ishioffersblock');

		$this->getlist();
	}

	protected function getList() {
		if (isset($this->request->get['sort'])) {
			$sort = $this->request->get['sort'];
		} else {
			$sort = 'b.module_id, b.date_added';
		}

		if (isset($this->request->get['order'])) {
			$order = $this->request->get['order'];
		} else {
			$order = 'ASC';
		}

		if (isset($this->request->get['page'])) {
			$page = $this->request->get['page'];
		} else {
			$page = 1;
		}

		$url = '';

		if (isset($this->request->get['sort'])) {
			$url .= '&sort=' . $this->request->get['sort'];
		}

		if (isset($this->request->get['order'])) {
			$url .= '&order=' . $this->request->get['order'];
		}

		if (isset($this->request->get['page'])) {
			$url .= '&page=' . $this->request->get['page'];
		}

		$data['breadcrumbs'] = array();

		$data['breadcrumbs'][] = array(
			'text' => $this->language->get('text_home'),
			'href' => $this->url->link('common/dashboard', 'user_token=' . $this->session->data['user_token'], true)
		);

		$data['breadcrumbs'][] = array(
			'text' => $this->language->get('text_extension'),
			'href' => $this->url->link('marketplace/extension', 'user_token=' . $this->session->data['user_token']. '&type=module', true)
		);

		if (!isset($this->request->get['module_id'])) {
			$data['breadcrumbs'][] = array(
				'text' => $this->language->get('heading_title1'),
				'href' => $this->url->link('extension/module/ishioffersblock/view_list', 'user_token=' . $this->session->data['user_token'], true)
			);
		} else {
			$data['breadcrumbs'][] = array(
				'text' => $this->language->get('heading_title1'),
				'href' => $this->url->link('extension/module/ishioffersblock/view_list', 'user_token=' . $this->session->data['user_token'] . '&module_id=' . $this->request->get['module_id'], true)
			);
		}

		if (!isset($this->request->get['module_id'])) {
			$data['return'] = $this->url->link('extension/module/ishioffersblock', 'user_token=' . $this->session->data['user_token'], true);
			$data['add'] = $this->url->link('extension/module/ishioffersblock/add', 'user_token=' . $this->session->data['user_token'], true);
			$data['delete'] = $this->url->link('extension/module/ishioffersblock/delete', 'user_token=' . $this->session->data['user_token'] . $url, true);
		} else {
			$data['return'] = $this->url->link('extension/module/ishioffersblock', 'user_token=' . $this->session->data['user_token'] . '&module_id=' . $this->request->get['module_id'], true);
			$data['add'] = $this->url->link('extension/module/ishioffersblock/add', 'user_token=' . $this->session->data['user_token'] . '&module_id=' . $this->request->get['module_id'], true);
			$data['delete'] = $this->url->link('extension/module/ishioffersblock/delete', 'user_token=' . $this->session->data['user_token'] . '&module_id=' . $this->request->get['module_id'] . $url, true);
		}

		$data['offers'] = array();

		$filter_data = array(
			'sort'  => $sort,
			'order' => $order,
			'start' => ($page - 1) * $this->config->get('config_limit_admin'),
			'limit' => $this->config->get('config_limit_admin')
		);

		$offer_total = $this->model_ishithemes_ishioffersblock->getTotalOffers();

		$results = $this->model_ishithemes_ishioffersblock->getOffers($filter_data);

		if (isset($this->request->get['module_id'])) {
			$url .= '&module_id=' . $this->request->get['module_id'];
		}

		foreach ($results as $result) {
			

			$data['offers'][] = array(
				'offer_id'     => $result['offer_id'],
				'title'          => $result['title'],
				'date_added'     => date($this->language->get('date_format_short'), strtotime($result['date_added'])),
				'edit'           => $this->url->link('extension/module/ishioffersblock/edit', 'user_token=' . $this->session->data['user_token'] . '&offer_id=' . $result['offer_id'] . '&module_id=' . $this->request->get['module_id'], true)
			);
		}

		$data['heading_title'] = $this->language->get('heading_title1');

		$data['text_list'] = $this->language->get('text_list');
		$data['text_no_results'] = $this->language->get('text_no_results');
		$data['text_confirm'] = $this->language->get('text_confirm');

		$data['column_title'] = $this->language->get('column_title');
		$data['column_module'] = $this->language->get('column_module');
		$data['column_status'] = $this->language->get('column_status');
		$data['column_comments'] = $this->language->get('column_comments');
		$data['column_date_added'] = $this->language->get('column_date_added');
		$data['column_action'] = $this->language->get('column_action');

		$data['button_add'] = $this->language->get('button_add');
		$data['button_edit'] = $this->language->get('button_edit');
		$data['button_delete'] = $this->language->get('button_delete');
		$data['button_return'] = $this->language->get('button_return');
		$data['button_comments'] = $this->language->get('button_comments');

		if (isset($this->error['warning'])) {
			$data['error_warning'] = $this->error['warning'];
		} else {
			$data['error_warning'] = '';
		}

		if (isset($this->session->data['success'])) {
			$data['success'] = $this->session->data['success'];

			unset($this->session->data['success']);
		} else {
			$data['success'] = '';
		}

		if (isset($this->request->post['selected'])) {
			$data['selected'] = (array)$this->request->post['selected'];
		} else {
			$data['selected'] = array();
		}

		$url = '';

		if ($order == 'ASC') {
			$url .= '&order=DESC';
		} else {
			$url .= '&order=ASC';
		}

		if (isset($this->request->get['page'])) {
			$url .= '&page=' . $this->request->get['page'];
		}

		if (!isset($this->request->get['module_id'])) {
			$data['sort_title'] = $this->url->link('extension/module/ishioffersblock/view_list', 'user_token=' . $this->session->data['user_token'] . '&sort=bd.title' . $url, true);
			$data['sort_module'] = $this->url->link('extension/module/ishioffersblock/view_list', 'user_token=' . $this->session->data['user_token'] . '&sort=b.module_id' . $url, true);
			$data['sort_date_added'] = $this->url->link('extension/module/ishioffersblock/view_list', 'user_token=' . $this->session->data['user_token'] . '&sort=b.date_added' . $url, true);
		} else {
			$data['sort_title'] = $this->url->link('extension/module/ishioffersblock/view_list', 'user_token=' . $this->session->data['user_token'] . '&sort=bd.title' . '&module_id=' . $this->request->get['module_id'] . $url, true);
			$data['sort_module'] = $this->url->link('extension/module/ishioffersblock/view_list', 'user_token=' . $this->session->data['user_token'] . '&sort=b.module_id' . '&module_id=' . $this->request->get['module_id'] . $url, true);
			$data['sort_date_added'] = $this->url->link('extension/module/ishioffersblock/view_list', 'user_token=' . $this->session->data['user_token'] . '&sort=b.date_added' . '&module_id=' . $this->request->get['module_id'] . $url, true);
		}

		$url = '';

		if (isset($this->request->get['sort'])) {
			$url .= '&sort=' . $this->request->get['sort'];
		}

		if (isset($this->request->get['order'])) {
			$url .= '&order=' . $this->request->get['order'];
		}

		$pagination = new Pagination();
		$pagination->total = $offer_total;
		$pagination->page = $page;
		$pagination->limit = $this->config->get('config_limit_admin');

		if (!isset($this->request->get['module_id'])) {
			$pagination->url = $this->url->link('extension/module/ishioffersblock/view_list', 'user_token=' . $this->session->data['user_token'] . $url . '&page={page}', true);
		} else {
			$pagination->url = $this->url->link('extension/module/ishioffersblock/view_list', 'user_token=' . $this->session->data['user_token'] . '&module_id=' . $this->request->get['module_id'] . $url . '&page={page}', true);
		}

		$data['pagination'] = $pagination->render();

		$data['results'] = sprintf($this->language->get('text_pagination'), ($offer_total) ? (($page - 1) * $this->config->get('config_limit_admin')) + 1 : 0, ((($page - 1) * $this->config->get('config_limit_admin')) > ($offer_total - $this->config->get('config_limit_admin'))) ? $offer_total : ((($page - 1) * $this->config->get('config_limit_admin')) + $this->config->get('config_limit_admin')), $offer_total, ceil($offer_total / $this->config->get('config_limit_admin')));

		$data['sort'] = $sort;
		$data['order'] = $order;

		$data['header'] = $this->load->controller('common/header');
		$data['column_left'] = $this->load->controller('common/column_left');
		$data['footer'] = $this->load->controller('common/footer');
		$this->response->setOutput($this->load->view('extension/module/ishioffersblock/list', $data));
	}
}