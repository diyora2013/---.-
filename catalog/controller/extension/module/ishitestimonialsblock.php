<?php
class ControllerExtensionModuleIshiTestimonialsBlock extends Controller {
	public function index($setting) {

		$this->load->model('tool/image');
		$language_id = $this->config->get('config_language_id');
		
		if(isset($setting['title'][$language_id])){
			$data['title'] = $setting['title'][$language_id];
		}
		
		$data['autoplay'] = (isset($setting['autoplay']) && $setting['autoplay'] == '1') ? 1 : 0;
		$data['bgcolor'] = $setting['bgcolor'];
		$ishitestimonials = array();
		
		if(isset($setting['ishitestimonial'][$language_id])){
			$ishitestimonials = $setting['ishitestimonial'][$language_id];
		}
		$data['random_id'] = 'ishitesimonial-' . rand();
		
		foreach ($ishitestimonials as $ishitestimonial) {
			if ($this->request->server['HTTPS']) {
				$tstiimage = $this->config->get('config_ssl') . 'image/' . $ishitestimonial['image'];
			} else {
				$tstiimage = $this->config->get('config_url') . 'image/' . $ishitestimonial['image'];
			}
			$data['ishitestimonials'][] = array(
				'description' => html_entity_decode($ishitestimonial['description'], ENT_QUOTES, 'UTF-8'),
				'username'  => $ishitestimonial['username'],
				'designation'  => $ishitestimonial['designation'],
				'image' => $tstiimage
			);
		}

		return $this->load->view('extension/module/ishitestimonialsblock', $data);
	}

}