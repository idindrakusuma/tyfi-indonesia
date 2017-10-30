<?php
ob_start(); #issue 14

defined('BASEPATH') OR exit('No direct script access allowed');

class Email extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		//cek session
		if(!isset($_SESSION)){
            $this->session;
        }
        if ($this->session->user_role != 'admin') {
        	redirect(base_url());
        }

        $this->load->helper('form','session');
		//load email
		$config = array(
		'protocol' 	=> 'smtp',
		'smtp_host' => 'ssl://smtp.googlemail.com',
		'smtp_port' => 465,
		'smtp_user' => 'noreply.tyfindonesia@gmail.com',
		'smtp_pass' => 'haloduniamaya',
		'mailtype'  => 'html',
		'charset'   => 'iso-8859-1',
		'wordwrap' 	=> TRUE,
		'newline' 	=> "\r\n"
);
		//load konfigurasi email
		$this->load->library('email', $config);
	}

	public function kirim_tiket($id){

		echo "Proses mengirim email.. Please wait..";
		//data yang akan dimasukan ke isi pesan
		$data = $this->Main_model->getRowDataWhere('peserta','*',array('peserta_id'=>$id));

		//=============================================================================
		$this->email->to($data['email']);
		//=============================================================================

		//=============================================================================
		$this->email->from('noreply.tyfindonesia@gmail.com', 'TYF Indonesia');
		//=============================================================================

		$isi_pesan = $this->load->view('email/tiket',$data,true);

		$this->email->subject('Terima Kasih, '.$data['nama'].'!');
		$this->email->message($isi_pesan);

		//attach tiket
		$this->email->attach(APPPATH.'third_party/tiket/tiket_tyfindonesia.pdf');
			if($this->email->send())
	     	{
	         	//jika pengiriman email berhasil --> tampilkan info sukses verifikasi dan pengiriman E-Tiket peserta
	         	$this->session->set_flashdata('info', 'Pembayaran peserta berhasil diverifikasi dan E-tiket berhasil dikirim ke Email Peserta');
	         	redirect('Admin/detPeserta/'.$data['peserta_id'],'refresh');
	     	}
	     	else
	     	{
	     		 //ulangi lagi
	         	show_error($this->email->print_debugger());
	     	}
		//echo $this->email->print_debugger();', $config);
	}

}

/* End of file Email.php */
/* Location: ./application/controllers/Email.php */
