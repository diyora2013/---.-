<?php  
class ControllerExtensionModuleNewslettersubscribe extends Controller {
  	private $error = array();
	
	public function index($setting) {
	
		$this->language->load('extension/module/newslettersubscribe');
		
      	$data['option_unsubscribe'] = $this->config->get('option_unsubscribe');
		$language_id = $this->config->get('config_language_id');
		$data['title'] = (isset($setting['title'][$language_id])) ? $setting['title'][$language_id] : '' ;
      	
		$this->id = 'newslettersubscribe';
		return $this->load->view('extension/module/newslettersubscribe', $data);
		
	 
	   	$this->load->model('account/newslettersubscribe');
	   	//check db
	   	$this->model_account_newslettersubscribe->check_db();
	}
	
	public function subscribe() {
	
		$prefix_eval = "";
	  
		$this->language->load('extension/module/newslettersubscribe');
	 
		$this->load->model('account/newslettersubscribe');
	  
		if (isset($this->request->post['subscribe_email']) and filter_var($this->request->post['subscribe_email'],FILTER_VALIDATE_EMAIL)) {
			   
			   if ($this->config->get('newslettersubscribe_registered') and $this->model_account_newslettersubscribe->checkRegisteredUser($this->request->post)) {
				   
					$this->model_account_newslettersubscribe->UpdateRegisterUsers($this->request->post,1);
					
					echo('$("'.$prefix_eval.' #notification-normal").html("<div class=\"alert alert-success\"> '.$this->language->get('subscribe').'</div>")$("'.$prefix_eval.' #subscribe-normal")[0].reset();');
				   
				
			   } else if (!$this->model_account_newslettersubscribe->checkmailid($this->request->post)) {
				 
					$this->model_account_newslettersubscribe->subscribe($this->request->post);
					
					echo('$("'.$prefix_eval.' #notification-normal").html("<div class=\"alert alert-success\"> '.$this->language->get('subscribe').'</div>");$("'.$prefix_eval.' #subscribe-normal")[0].reset();');
				 
				} else {
					  echo('$("'.$prefix_eval.' #notification-normal").html("<div class=\"alert alert-danger\"> '.$this->language->get('alreadyexist').'</div>");$("'.$prefix_eval.' #subscribe-normal")[0].reset();');
				}
			   
			} else {
				
				echo('$("'.$prefix_eval.' #notification-normal").html("<div class=\"alert alert-danger\"> '.$this->language->get('error_invalid').'</div>")');
				
			}
	  
	}

	public function unsubscribe(){
	  
		if ($this->config->get('newslettersubscribe_thickbox')) {
			  $prefix_eval = "";
		} else {
			  $prefix_eval = "";
		}
	  
		$this->language->load('extension/module/newslettersubscribe');
	 
		$this->load->model('account/newslettersubscribe');
	  
		if (isset($this->request->post['subscribe_email']) and filter_var($this->request->post['subscribe_email'],FILTER_VALIDATE_EMAIL)) {
				
			if ($this->config->get('newslettersubscribe_registered') and $this->model_account_newslettersubscribe->checkRegisteredUser($this->request->post)) {
				   
					$this->model_account_newslettersubscribe->UpdateRegisterUsers($this->request->post,0);
					
					echo('$("'.$prefix_eval.' #notification").html("<div class=\"alert alert-success\"> '.$this->language->get('unsubscribe').'</div>");$("'.$prefix_eval.' #subscribe")[0].reset();');
				   
				
			} else if (!$this->model_account_newslettersubscribe->checkmailid($this->request->post)) {
				 
					echo('$("'.$prefix_eval.' #notification").html("<div class=\"alert alert-danger\"> '.$this->language->get('notexist').'</div>");$("'.$prefix_eval.' #subscribe")[0].reset();');
				 
			} else {
				   
					if ($this->config->get('option_unsubscribe')) {
						
					 $this->model_account_newslettersubscribe->unsubscribe($this->request->post);
					 
					 echo('$("'.$prefix_eval.' #notification").html("<div class=\"alert alert-success\"> '.$this->language->get('unsubscribe').'</div>");$("'.$prefix_eval.' #subscribe")[0].reset();');
					 
					}
			}
			   
		} else {
			
				echo('$("'.$prefix_eval.' #notification").html("<div class=\"alert alert-danger\"> '.$this->language->get('error_invalid').'</div>")');
				
		}
	  
	}

	protected function loadmodule() {
		
		$this->language->load('extension/module/newslettersubscribe');

      	$data['heading_title'] = $this->language->get('heading_title');	
		
      	$data['entry_name'] = $this->language->get('entry_name');	
      	$data['entry_email'] = $this->language->get('entry_email');	
		$data['entry_button'] = $this->language->get('entry_button');	
		$data['entry_unbutton'] = $this->language->get('entry_unbutton');	
		$data['option_unsubscribe'] = $this->config->get('option_unsubscribe');	
		
		$data['text_subscribe'] = $this->language->get('text_subscribe');	
		
		$this->id = 'newslettersubscribe';

		
		return $this->load->view('extension/module/newslettersubscribe', $data);
	}
}
?>