<?php
ob_start(); #issue 14
defined('BASEPATH') OR exit('No direct script access allowed');

class Umum extends CI_Controller{

  public function __construct()
  {
    parent::__construct();
    //Do your magic here
    if(!isset($_SESSION)){
            $this->session;
        }
        if (!$this->session->has_userdata('user_id')) {
          redirect(base_url());
        }
  }
  //--> function logout
  function logout()
  {
      //-> system log
        $tabel = 'sys_log';
        $data = array(
                'user_id' => $this->session->user_id,
                'log_jenis' => 0 //-> 1 untuk login dan 0 untuk logout
            );
        $this->Main_model->tambah_data($tabel,$data);
        $this->session->sess_destroy();
        $this->session->set_flashdata('info', 'Berhasil keluar dari Sistem');
        redirect(base_url());
  }

  //--> function ganti password
  public function gantiPassword(){
    $data['title']		= "Ganti Password";
		$data['custom_css']	= null;
		$data['custom_js']	= null;
		$data['custom_script']	= null;
    $data['content']	= "content/gantiPassword";

		$this->load->view('Main', $data);
  }

  //-> check ganti password !
  public function checkPassword($id){
      //cek dulu inputan pertama
      $passO = sha1($this->input->post("password_old"));
      $passN = sha1($this->input->post("password_new"));
      //cek didatabase
      $query = $this->db->query("SELECT user_id, user_password FROM `users` WHERE user_password = '$passO' AND user_id = '$id'");
      //jika password cocok maka..
      if ($query->num_rows() > 0) {
          //lakukan perubahan..
          $update = $this->Main_model->updatePassword($id, $passN);
          if ($update == 0) {
            echo "Something Eror...";
          }
          else{
            //perlu dikasih tau soal info suksesnya..
            //perlu direcord ke database kalau melakukan pergantian password
            redirect('umum/logout','refresh');
          }
      }
      else{
         // jika tidak cocok dengan sebelumnya maka..
         $this->session->set_flashdata('info', 'Kamu masukin password lama kamu salah, coba inget - inget lagi deh..');
         redirect('umum/gantiPassword','refresh');
      }
    }

    //fungsi feedback -> migrasi dari Controller comm | karena marketing juga bisa melihat feedback jika itu sponsor
    //function for feedback pengguna
  	function feedback(){
  		$data['title']		= "Feedback Pengguna";
  		$data['custom_css']	= "data_tables_css";
  		$data['custom_js']	= "data_tables_js";
  		$data['custom_script']	= "script_feedback";
      $data['content']	= "content/feedback";

  		$this->load->view('Main', $data);
  	}

  	function detFeedback(){
  		$data['title']		= "Detail Feedback Pengguna";
  		$data['custom_css']	= NULL;
  		$data['custom_js']	= NULL;
  		$data['custom_script']	= "script_feedback";
      $data['content']	= "detail/d_feedback";

  		$this->load->view('Main', $data);
  	}

  	//funngsi untuk udpate feedback
  	function updateFeedback($id,$user){
  		$this->Main_model->updateFeedback($id,$user);
  		redirect('umum/feedback');
  	}

}
