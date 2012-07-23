<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

require_once APPPATH.'controllers/controller.php';

class Batch extends Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -  
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in 
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see http://codeigniter.com/user_guide/general/urls.html
	 */
	public function index()
	{
	
 	}
	
	public function create(){
		if($this->input->server('REQUEST_METHOD')=='POST'){
		$batch = new Batch_Model();
		
		//COLLECT FORM DATA
		$batch->code = $this->input->post('code', TRUE);
		
		
		$batch->start_date = $this->input->post('start_date', TRUE);
		$batch->end_date = $this->input->post('end_date', TRUE);
		$batch->comments = $this->input->post('comments', TRUE);
		$batch->institute_code = $this->input->post('institute_code', TRUE);
		$batch->institute_id = $this->input->post('institute_id', TRUE);
		$batch->location = $this->input->post('location', TRUE);
		
		
		
 		
	
		/*$batch->code = "asdf";
		$batch->start_date = date("d-m-Y");
		$batch->end_date = date("d-m-Y");
		$batch->comments = "my comments";
		$batch->institute_code = "abc";
		$batch->institute_id = 44;
		$batch->location = "my location";*/
		$batch->save();
		
		}
	 
		$data->view = 'batch/createbatch';
		$this->load->view('batch/template', $data);
	}
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */