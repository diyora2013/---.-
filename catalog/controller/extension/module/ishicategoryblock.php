<?php
class ControllerExtensionModuleIshiCategoryBlock extends Controller {
	public function index($setting) {
		$this->load->language('extension/module/ishicategoryblock');
		static $module = 0;		
		$this->load->model('tool/image');
		$language_id = $this->config->get('config_language_id');
		
		$data['banners'] = array();
		$data['ishi_randomnumer'] = "ishicategory-" . rand();

		$banners = $setting['ishibanner'][$language_id];
		if(!empty($banners)){
			foreach ($banners as $banner) {
				if (is_file(DIR_IMAGE . $banner['image'])) {
					$data['banners'][] = array(
						'title' => $banner['title'],
						'link'  => $banner['link'],
						'image' => $this->model_tool_image->resize($banner['image'], $setting['width'], $setting['height'])
					);
				}
			}
		}
		$data['module'] = $module++;
		return $this->load->view('extension/module/ishicategoryblock', $data);
	}
}