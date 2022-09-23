<?php
class ControllerExtensionModuleIshiPaymentBlock extends Controller {
	public function index($setting) {

		static $module = 0;		

		$this->load->model('design/banner');
		$this->load->model('tool/image');
		
		$language_id = $this->config->get('config_language_id');
		
		$data['ishi_sliderimages'] = array();
		$data['ishi_randomnumer'] = "ishipayment-" . rand();
		
		$imgs = $setting['ishi_image'];
		$results = array();
		if(isset($imgs[$language_id])){
			$results = $imgs[$language_id];
		}
			
			foreach ($results as $result) {
				if (is_file(DIR_IMAGE . $result['image'])) {
					$data['ishi_sliderimages'][] = array(
						'title'=> $result['title'],
						'link'  => $result['link'],
						'sort_order'=> $result['sort_order'],
						'image' => $this->model_tool_image->resize($result['image'], $setting['width'], $setting['height'])
					);
				}
			}
		$data['module'] = $module++;
	
		return $this->load->view('extension/module/ishipaymentblock', $data);
	}
}