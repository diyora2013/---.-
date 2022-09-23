<?php
class ControllerExtensionModuleIshiHeaderLinkBlock extends Controller {
	public function index($setting) {

		static $module = 0;
		
		$data['random_id'] = rand(0,1000);
		
		$lang = $this->config->get('config_language_id');

		$data['extra_pages'] = isset($setting['extra_page'][$lang]) ? $setting['extra_page'][$lang]:array();
		
		$data['module'] = $module++;
		
		return $this->load->view('extension/module/ishiheaderlinkblock', $data);
	}
}