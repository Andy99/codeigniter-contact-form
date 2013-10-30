<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Contact extends CI_Controller {

	
	

	public function index()
	{

		$this->load->helper(array('form', 'url'));
		
		$this->load->library("form_validation");

		$this->form_validation->set_rules("name", "Name", "required|alpha|xss_clean");
		$this->form_validation->set_rules("email", "Email", "required|valid_email|xss_clean");
		$this->form_validation->set_rules("subject", "Subject", "required|xss_clean");
		$this->form_validation->set_rules("message", "Message", "required|xss_clean");

		if($this->form_validation->run() == FALSE){

			// show the form
			$this->load->view('contact');
		}
		else
		{
			// redirect to success view.
			$this->load->library("email");

			$this->email->from(set_value("email"), set_value("name"));
			$this->email->to("setyour@email.com");
			$this->email->subject(set_value("subject"));
			$this->email->message(set_value("message"));

			$this->email->send();
			$this->load->view('mailsent');
			

		}


	}

}