<?php
class ControllerExtensionModuleIshiServicesBlock extends Controller {
	public function index($setting) {
		
		$this->load->model('tool/image');
		$language_id = $this->config->get('config_language_id');
		$ishiservices = array();
		$data['bg_color'] = $setting['bg_color'];
		
		if(isset($setting['service'][$language_id])){
			$ishiservices = $setting['service'][$language_id];
		}
		
		$column = $setting['column'];
		
		if($column == 1){
			$data['class'] = 'col-xs-12';
		}elseif($column == 2){
			$data['class'] = 'col-sm-6 col-xs-12';
		}elseif($column == 3){
			$data['class'] = 'col-lg-4 col-md-4 col-sm-4 col-xs-12';
		}else{
			$data['class'] = 'col-lg-3 col-md-3 col-sm-6 col-xs-12';
		}
		
		$data['showtitle'] = (isset($setting['showtitle'])&& $setting['showtitle'] == 1) ? 1 : 0;
		
		if(isset($setting['title'][$language_id])){
			$data['title'] = $setting['title'][$language_id];
		}
		
		foreach ($ishiservices as $ishiservice) {
			if(isset($ishiservice['image'])){
			$serviceiimage = $this->model_tool_image->resize($ishiservice['image'], $setting['width'], $setting['height']);
			}else{
				$serviceiimage = '';
			}
			$data['ishiservices'][] = array(
				'image' => $serviceiimage,
				'title' => $ishiservice['title'],
				'description'  => $ishiservice['description']
			);
		}
		
		return $this->load->view('extension/module/ishiservicesblock', $data);
	}
}