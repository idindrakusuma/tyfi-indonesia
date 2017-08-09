<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Daftar_controller extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		//Do your magic here
		$this->load->helper('form','session');
		//load email
        $config = array(
		    'protocol' 	=> 'smtp',
		    'smtp_host' => 'ssl://smtp.googlemail.com',
		    'smtp_port' => 465,
		    'smtp_user' => 'inconference2017@gmail.com',
		    'smtp_pass' => 'Helloworld',
		    'mailtype'  => 'html', 
		    'charset'   => 'iso-8859-1',
		    'wordwrap' 	=> TRUE,
		    'newline' 	=> "\r\n"
		);
		//load konfigurasi email
		$this->load->library('email', $config);
	}

	function register()
	{
		
		//validasi jumlag grups
		$acak = rand(750,999);
		$jumlah =$this->input->post('jumlah');

		if (($jumlah>1) && ($jumlah<11)) {
			$jp 		= $jumlah;
			$j_bayar 	= ($jumlah * 25000) + $acak;
			$jenis_peserta = '2';
		} else {
			$jp 		= 1;
			$j_bayar 	= 40000 + $acak;
			$jenis_peserta = '1';
		}


		//data dari form
		//$jenis_peserta 	= $this->input->post('jenis_peserta');
		$nama 			= $this->input->post('nama');
		$jenis_kelamin 	= $this->input->post('jenis_kelamin');
		$tanggal_lahir 	= $this->input->post('tanggal_lahir');
		$alamat 		= $this->input->post('alamat');
		$email 			= $this->input->post('email');
		$hp 			= $this->input->post('hp');
		$asal_organisasi 	= $this->input->post('asal_organisasi');
		$alamat_organisasi 	= $this->input->post('alamat_organisasi');
		$pelayanan 			= $this->input->post('pelayanan');

		//prepare for submit
		$tabel = 'peserta';
		$data = array(
			'tipe' 				=> $jenis_peserta,
			'jumlah_peserta' 	=> $jp,
			'nama' 				=> $nama,
			'j_kelamin' 		=> $jenis_kelamin,
			'tgl_lahir' 		=> $tanggal_lahir,
			'alamat' 			=> $alamat,
			'email' 			=> $email,
			'wa_line' 			=> $hp,
			'asal_organisasi' 	=> $asal_organisasi,
			'alamat_organisasi' => $alamat_organisasi,
			'pelayanan' 		=> $pelayanan,
			'total_tagihan'		=> $j_bayar
			);

		//submit to database
		$no_pendaftaran = $this->Main_model->register($tabel, $data);
		if ($this->db->affected_rows()) {
			//jika berhasil
			$d_register = array (
					'email' => $email,
					'id' 	=> $no_pendaftaran,
					'nama' 	=> $nama,
					'tipe' 	=> $jenis_peserta,
					'jumlah'=> $jp,
					'bayar' => $j_bayar
				);
			//echo "berhasil";
			$this->send_confirm($d_register);
		}else{
			echo "gagal";
		}
	}

	//========================================================================\\
			 			// FOR EMAIL CONFIRMATION
	//========================================================================\\

	function send_confirm($data)
	{

		//Dikirim ke alamat
		$this->email->to($data['email']);

		//=============================================================================
		//dikirim dari
		$this->email->from('inconference2017@gmail.com','INConference 2017');
		//=============================================================================

		//isi pesan (bisa teks atau HTML)
		$isi_pesan = $this->load->view('email/waiting_list',$data,true);
		//$this->email->subject('Satu langkah lagi, '.$data['nama'].'!');
		#waiting_list
		$this->email->subject('[Waiting List], '.$data['nama'].'!');
		$this->email->message($isi_pesan);
		
		if($this->email->send())
	     {
	         $this->thankyou($data);
	     }
	     else 
	     {
	         show_error($this->email->print_debugger());
	     }
	}

	function thankyou()
	{
		$data['judul']		= "Terima Kasih!";
		$data['keywords']	= "inconference, inconference 2017, Inspiration Comference";
		$data['description']= "Dengan sebuah vision statement 'Inspiration For Everyone' maka komunitas pemuda remaja di gereja ini memiliki sebuah kerinduan untuk dapat menginpirasi generasi ini dengan pesan kebenaran.";

		$this->load->view('registrasi/thankyou', $data);
	}
}

/* End of file Daftar.php */
/* Location: ./application/controllers/Daftar.php */