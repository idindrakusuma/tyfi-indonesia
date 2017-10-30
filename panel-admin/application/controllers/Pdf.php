<?php
ob_start(); #issue 14
defined('BASEPATH') OR exit('No direct script access allowed');

class Pdf extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		//check your session
		if(!isset($_SESSION)){
            $this->session;
        }
        if ($this->session->user_role != 'admin') {
        	redirect(base_url());
        }
		//$this->load->helper('date');
		define('FPDF_FONTPATH',APPPATH .'third_party/fpdf/font/');
      	require(APPPATH .'third_party/fpdf/fpdf.php');
      	//require(APPPATH .'third_party/fpdf/rotation.php');

	}

	public function tiket($id)
	{
		//NANTI AMBIL DARI DATABASE || Lokasi di Admin ya..
		$data = $this->Main_model->getRowDataWhere('peserta','*',array('peserta_id'=>$id));
		$this->cetak($data);
	}

	public function cetak($data)
	{

		//FPDF see doc --> http://www.fpdf.org/en/doc/index.php
		echo "generate E-ticket TYFI Indonesia..Please Wait...";
		$tgl = date('Y-m-d');
      	$pdf = new FPDF('L','mm','A4');
		$pdf->AddPage();
		$pdf->SetFont('Courier','B',18);
		//load image tiket
		$pdf->Image(APPPATH .'third_party/tiket.png');
		//cetak string
		$pdf->Text(72,93,$data['nama']); //float x, float y
		$pdf->Text(72,105,$data['asal_organisasi']);
		//load qr code ()
		$pdf->Text(256,78,$data['peserta_id']);
		//ambil dari goqr.me see doc --> http://goqr.me/api/
		$pdf->Image('https://api.qrserver.com/v1/create-qr-code/?size=100x100&data='.$data['peserta_id'],248,80,32,0,'PNG'); //float x, float y, tinggi, format_file

		//$pdf->Image(APPPATH .'third_party/qr_sample.png',248,80,32,0,'PNG');

		//generated
		$pdf->SetFont('Courier','I',10);
		$pdf->Text(10,180,'Generated by System TYF Indonesia 2017 at '.$tgl);

		//$sukses = $pdf->Output('I');
		$sukses = $pdf->Output('F',APPPATH.'third_party/tiket/tiket_tyfindonesia.pdf');
		if ($sukses) {
			//jika gagal
			echo "email gagal";
		} else{
			//jika generate berhasil --> selanjutnya kirim email ke peserta
			redirect('email/kirim_tiket/'.$data['peserta_id'],'refresh');
		}
	}

		### SEMENTARA PAKAI INI DULU UNTUK DOWNLOAD E-TICKET MANUAL
		public function download($id)
		{
			//NANTI AMBIL DARI DATABASE || Lokasi di Admin ya..
			$data = $this->Main_model->getRowDataWhere('peserta','*',array('peserta_id'=>$id));
			$this->downloadPDF($data);
		}

		public function downloadPDF($data)
		{

			//FPDF see doc --> http://www.fpdf.org/en/doc/index.php
			$tgl = date('Y-m-d');
					$pdf = new FPDF('L','mm','A4');
			$pdf->AddPage();
			$pdf->SetFont('Courier','B',18);
			//load image tiket
			$pdf->Image(APPPATH .'third_party/tiket.png');
			//cetak string
			$pdf->Text(72,93,$data['nama']); //float x, float y
			$pdf->Text(72,105,$data['asal_organisasi']);
			//load qr code ()
			$pdf->Text(256,78,$data['peserta_id']);
			//ambil dari goqr.me see doc --> http://goqr.me/api/
			$pdf->Image('https://api.qrserver.com/v1/create-qr-code/?size=100x100&data='.$data['peserta_id'],248,80,32,0,'PNG'); //float x, float y, tinggi, format_file

			//$pdf->Image(APPPATH .'third_party/qr_sample.png',248,80,32,0,'PNG');

			//generated
			$pdf->SetFont('Courier','I',10);
			$pdf->Text(10,180,'Generated by System TYF Indonesia 2017 at '.$tgl);

			//$sukses = $pdf->Output('I');
			$pdf->Output();
		}

}

/* End of file Pdf.php */
/* Location: ./application/controllers/Pdf.php */
