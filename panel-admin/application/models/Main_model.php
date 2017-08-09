<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Main_model extends CI_Model {


	public function __construct()
	{
		parent::__construct();
		//Do your magic here
	}

	//fungsi untuk update password
	function updatePassword($id, $pass){
		$this->db->query("
			UPDATE users
			SET user_password = '$pass'
			WHERE user_id = $id
		");
		//cek apakah berhasil diubah atau tidak
		 $update = $this->db->affected_rows();
		 return $update;
	}

	//fungsi aktifitas user
	function getAktifitasUser(){

		$this->db->select('user_nama,user_email,user_role, log_jenis, log_waktu');
		$this->db->from('fls_user');
		$this->db->join('fls_log', 'fls_user.user_id = fls_log.user_id');
		$this->db->order_by('log_waktu', 'desc');
		$this->db->limit(100);
		return $this->db->get()->result_array();
	}

	//=====================================================================================\\
					// GLOBAL FUNCTION
	//=====================================================================================\\

	public function tambah_data($tabel,$data){
		$this->db->insert($tabel,$data);
	}

	function updateData($table, $data, $where)
	{
		$this->db->where($where);
		$this->db->update($table, $data);
	}

	function getListData($table, $where, $limit, $offset)
	{
		$query = $this->db->get_where($table, $where, $limit, $offset);
		return $query->result_array();
	}

	function getJoinListData($table, $join, $select, $where)
	{
		$this->db->select($select);
		$this->db->from($table);
		$this->db->join($join, $where);

		return $this->db->get()->result_array();
	}

	function getRowDataWhere($table, $select, $where)
	{
		$this->db->select($select);
		$this->db->from($table);
		$this->db->where($where);

		return $this->db->get()->row_array();
	}

	function getRowData($table, $select)
	{
		$this->db->select($select);
		$this->db->from($table);

		return $this->db->get()->row_array();
	}
}

/* End of file Main_model.php */
/* Location: ./application/models/Main_model.php */
