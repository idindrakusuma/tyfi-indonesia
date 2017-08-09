<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Main_model extends CI_Model {

	public function __construct()
	{
		parent::__construct();
		//Do your magic here
	}

	function tambahData($tabel, $data)
	{	
		//insert data
		$this->db->insert($tabel, $data);
	}

	function register($tabel, $data)
	{
		$this->db->insert($tabel, $data);

		//get value <-- bio_id
		$insert_id = $this->db->insert_id();
		return $insert_id;
	}

}

/* End of file Main_model.php */
/* Location: ./application/models/Main_model.php */