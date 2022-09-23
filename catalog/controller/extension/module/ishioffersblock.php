<?php
class ControllerExtensionModuleIshiOffersBlock extends Controller {
	public function index($setting) {
		$this->load->language('extension/module/ishioffersblock');
		$this->load->model('ishithemes/ishioffersblock');
	
		
		$data['heading_title'] = $this->language->get('heading_title');
		

		$data['offers'] = array();		
		foreach ($this->model_ishithemes_ishioffersblock->getOffers() as $result) {			
						
			 		$data['offers'][] = array(
				'offer_id'  => $result['offer_id'],
				'title'       => html_entity_decode($result['title'], ENT_QUOTES, 'UTF-8'),
			); 
		}	
				
		return $this->load->view('extension/module/ishioffersblock', $data);
	}
}