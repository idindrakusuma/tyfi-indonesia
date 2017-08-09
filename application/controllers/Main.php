<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Main extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		//Do your magic here
		$this->load->library('session');
		$this->load->helper('form');
	}

	public function index()
	{
		$data['judul']		= "Welcome";
		$data['keywords']	= "inconference, inconference 2017, Inspiration Comference";
		$data['description']= "Dengan sebuah vision statement 'Inspiration For Everyone' maka komunitas pemuda remaja di gereja ini memiliki sebuah kerinduan untuk dapat menginpirasi generasi ini dengan pesan kebenaran.";

		$this->load->view('main', $data);
	}

	function daftar()
	{
		$data['judul']		= "Daftar";
		$data['keywords']	= "inconference, inconference 2017, Inspiration Comference";
		$data['description']= "Dengan sebuah vision statement 'Inspiration For Everyone' maka komunitas pemuda remaja di gereja ini memiliki sebuah kerinduan untuk dapat menginpirasi generasi ini dengan pesan kebenaran.";

		$this->load->view('registrasi/main_reg', $data);
	}

	function eror404()
	{
		$data['judul']		= "Eror 404";
		$data['keywords']	= "404";
		$data['description']= "Oops, Halaman yang Anda cari tidak tersedia..";

		$this->load->view('errors/eror404', $data);
	}

	function addFeedback()
	{
		$nama 	= $this->input->post('nama');
		$email 	= $this->input->post('email');
		$pesan 	= $this->input->post('isi_pesan');

		$data = array(
				'nama_pengirim' => $nama,
				'email_pengirim' => $email,
				'pesan_pengirim' => $pesan
			);

		$this->Main_model->tambahData('feedback',$data);

		if ($this->db->affected_rows()) {
			 $this->session->set_flashdata('info', 'Terima kasih atas feedback yang kamu berikan. Segera mungkin kami memprosesnya :)');
			 redirect('#contact','refresh');
		}
		else {
			$this->session->set_flashdata('info', 'Sepertinya ada kesalahan :( mohon dicoba lain kali..');
			redirect(base_url());
		}
	}


	function testBayar()
	{
		$data = array(
				'nama' => 'Indra Kusuma',
				'id' => '001',
				'tipe' => 2,
				'email' => 'indrakusuma.udinus@gmail.com',
				'jumlah' => 4,
				'bayar' => '200000'
			);
			
		$this->load->view('email/bayar', $data);
	}

	function testWaitingList()
	{
		$data = array(
				'nama' => 'Indra Kusuma',
				'id' => '001',
				'tipe' => 2,
				'email' => 'indrakusuma.udinus@gmail.com',
				'jumlah' => 4,
				'bayar' => '200000'
			);
			
		$this->load->view('email/waiting_list', $data);
	}

	function testTiket()
	{
		$data = array(
				'nama' => 'Indra Kusuma',
				'id' => '001',
				'tipe' => 2,
				'email' => 'indrakusuma.udinus@gmail.com',
				'jumlah' => 3,
				'bayar' => '200000'
			);
			$this->load->view('email/tiket', $data);
	}	

}

/* End of file Main.php */
/* Location: ./application/controllers/Main.php */