<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

require_once APPPATH.'controllers/controller.php';

class Institute extends Controller {
	
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