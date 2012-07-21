<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Institute extends CI_Controller {
	
	public $templateView = 'institute/template';
 	 
	public function index()
	{
		$data->title = 'Admin';
		$data->view = 'institute/dashboard';
		
		$this->load->model('Institute_Model');
		
		//	$this->institute->print_data();
		
		$this->load->view($this->templateView, $data);
	}
	
}