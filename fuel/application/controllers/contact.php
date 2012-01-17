<?php
class Contact extends CI_Controller {

	function __construct()
	{
		parent::__construct();
	}
	
	function index()
	{
		$this->load->library('session');
		$this->load->library('form_builder');
		$this->load->library('recaptcha');
		$this->load->library('form_validation');
		$this->load->helper('form');
		$this->lang->load('recaptcha');

		$vars['recaptcha'] = $this->recaptcha->get_html();

		if( $this->input->post('submitContact') )
		{
			$contactName = $vars['contactName'] = $this->input->post('contactName');
			$contactEmail = $vars['contactEmail'] = $this->input->post('contactEmail');
			$contactComments = $vars['contactComments'] = $this->input->post('contactComments');

			if( $this->check_captcha( $this->input->post('recaptcha_response_field') )) {

				$this->load->library('email');

				$this->email->from('noreply@spokanervresort.com', 'Spokane RV Resort');
				$this->email->to('info@vspokanervresort.com');
				//$this->email->bcc('them@their-example.com');

				$this->email->subject('Contact from Spokanervresrot.com website contact form');

				$message = $contactName . "\n";
				$message .= $contactEmail . "\n";
				$message .= $contactComments . "\n";

				$this->email->message($message);
				$this->email->send();

				$vars['success_message'] = 'Thank you for contacting Spokane RV Resort! We will be in touch very soon!';
			}
			else {
				$vars['error_message'] = "Please re-enter the captcha.";
			}
		}



		$vars['form'] = $this->form_builder->render();
		
		// use Fuel_page to render so it will grab all opt-in variables and do any necessary parsing
		$page_init = array('location' => 'contact');
		$this->load->module_library(FUEL_FOLDER, 'fuel_page', $page_init);
		$this->fuel_page->add_variables($vars);
		$this->fuel_page->render();
	}

	function check_captcha($val) {
		if ($this->recaptcha->check_answer($this->input->ip_address(),$this->input->post('recaptcha_challenge_field'),$val)) {
			return TRUE;
		} else {
			return FALSE;
		}
	}
	
}
