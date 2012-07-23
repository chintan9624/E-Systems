<?php

require_once APPPATH . 'models/MockModel.php';

class Batch_Model extends MockModel {
	
	static $table_name = 'mock_batches';
	
	public function __construct($params) {
		parent::__construct ( $params );
	}	
	
	public function insert_entry() {
		
		$this->db->insert ( 'entries', $this );
	
	}
	
	public function update_entry() {
	
	}

}

?>