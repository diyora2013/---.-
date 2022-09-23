<?php
class ControllerExtensionModuleIshiSocialFollow extends Controller {
	public function index($setting) {
		$this->load->language('extension/module/ishisocialfollow');
		$this->language->load('extension/module/ishisocialfollow');

		if ($setting['facebook']) {
			$data['facebook'] = $setting['facebook'];
		}
		if ($setting['twitter']) {
			$data['twitter'] = $setting['twitter'];
		}
		if ($setting['youtube']) {
			$data['youtube'] = $setting['youtube'];
		}
		if ($setting['gplus']) {
			$data['gplus'] = $setting['gplus'];
		}
		if ($setting['rss']) {
			$data['rss'] = $setting['rss'];
		}
		if ($setting['pinterest']) {
			$data['pinterest'] = $setting['pinterest'];
		}
		if ($setting['vimeo']) {
			$data['vimeo'] = $setting['vimeo'];
		}
		if ($setting['instagram']) {
			$data['instagram'] = $setting['instagram'];
		}

		return $this->load->view('extension/module/ishisocialfollow', $data);
	}
}