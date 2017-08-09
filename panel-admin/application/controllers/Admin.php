<?php
ob_start(); #issue 14
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		//Do your magic here
		if(!isset($_SESSION)){
            $this->session;
        }
        if ($this->session->user_role != 'admin') {
        	redirect(base_url());
        }

		//load library GRUCERY CRUD
        $this->load->library('grocery_CRUD');
        $this->crud = new grocery_CRUD();
	}
	public function index()
	{
		//get row data
		$where = 'is_bayar = 0 OR is_bayar = 1';

		$data['tot_peserta'] = $this->Main_model->getRowDataWhere('peserta','COUNT(peserta_id) as jumlah',$where);
		$data['jum_peserta'] = $this->Main_model->getRowDataWhere('peserta','SUM(jumlah_peserta) as jumlah',$where);
		$data['tot_feed'] 	 = $this->Main_model->getRowData('feedback','COUNT(id_feed) as jumlah');
		$data['tot_bayar'] 	 = $this->Main_model->getRowDataWhere('peserta','COUNT(peserta_id) as jumlah',array('is_bayar'=>1));
		$data['peserta_bayar'] 	= $this->Main_model->getRowDataWhere('peserta','SUM(jumlah_peserta) as jumlah',array('is_bayar'=>1));
		$data['peserta_blm_bayar'] 	= $this->Main_model->getRowDataWhere('peserta','SUM(jumlah_peserta) as jumlah',array('is_bayar'=>0));
		$data['tot_belum'] 	 = $this->Main_model->getRowDataWhere('peserta','COUNT(peserta_id) as jumlah',array('is_bayar'=>0));
		$data['title']		= "Dashboard";
		$data['custom_css']	= null;
		$data['custom_js']	= null;
		$data['custom_script']	= null;
    $data['content']	= "content/dashboard_admin";

		$this->load->view('Main', $data);
	}


    //================================================================================\\
    		//ADMIN
    //================================================================================\\
    function peserta()
    {
        $where = "is_bayar = 0 OR is_bayar = 1";
    		$data['peserta']		= $this->Main_model->getListData('peserta',$where,null,null);
    		$data['title']			= "Total Perserta";
				$data['custom_css']		= "data_tables_css";
				$data['custom_js']		= "data_tables_js";
				$data['custom_script']	= "script_data_tables";
				$data['content']		= "content/peserta";

				$this->load->view('Main', $data);
    }

    function peserta_lunas()
    {
    	$data['peserta']		= $this->Main_model->getListData('peserta',array('is_bayar'=>1),null,null);
    	$data['title']			= "Peserta Lunas";
			$data['custom_css']		= "data_tables_css";
			$data['custom_js']		= "data_tables_js";
			$data['custom_script']	= "script_data_tables";
			$data['content']		= "content/peserta";

			$this->load->view('Main', $data);
    }

     function peserta_belum_lunas()
    {
    	$data['peserta']		= $this->Main_model->getListData('peserta',array('is_bayar'=>0),null,null);
    	$data['title']			= "Peserta Lunas";
			$data['custom_css']		= "data_tables_css";
			$data['custom_js']		= "data_tables_js";
			$data['custom_script']	= "script_data_tables";
			$data['content']		= "content/peserta";

			$this->load->view('Main', $data);
    }

     function peserta_grup()
    {
        $where = "tipe = 2 AND is_bayar = 0 OR is_bayar = 1";
	    	$data['peserta']		= $this->Main_model->getListData('peserta',$where,null,null);
	    	$data['title']			= "Peserta Grup";
				$data['custom_css']		= "data_tables_css";
				$data['custom_js']		= "data_tables_js";
				$data['custom_script']	= "script_data_tables";
				$data['content']		= "content/peserta";

				$this->load->view('Main', $data);
    }

    function peserta_individu()
    {
        $where = "tipe = 2 AND is_bayar = 0 OR is_bayar = 1";
	    	$data['peserta']		= $this->Main_model->getListData('peserta',$where,null,null);
	    	$data['title']			= "Peserta Individu";
				$data['custom_css']		= "data_tables_css";
				$data['custom_js']		= "data_tables_js";
				$data['custom_script']	= "script_data_tables";
				$data['content']		= "content/peserta";

				$this->load->view('Main', $data);
    }

    function detPeserta($id)
    {
    	$data['peserta']		= $this->Main_model->getRowDataWhere('peserta','*',array('peserta_id'=>$id));
    	$data['umur']			= $this->Main_model->getRowDataWhere('peserta','TIMESTAMPDIFF(YEAR, tgl_lahir, CURDATE()) AS umur',array('peserta_id'=>$id));
      $data['konfirmasi']     = $this->Main_model->getRowDataWhere('konfirmasi','*',array('peserta_id'=>$id));
    	$data['title']			= "Detail Peserta";
			$data['custom_css']		= null;
			$data['custom_js']		= null;
			$data['custom_script']	= null;
			$data['content']		= "detail/d_peserta";

			$this->load->view('Main', $data);
    }

    function hapusPeserta($key)
    {
        $data = array(
            'is_bayar' => 2,
            'user_id' => $this->session->user_id
            );

        $this->Main_model->updateData('peserta',$data,array('peserta_id'=>$key));
        if ($this->db->affected_rows()) {
            $this->session->set_flashdata('info', 'Peserta dengan kode pendaftaran #'.$key.' berhasil dihapus');
            redirect('admin/peserta','refresh');
        }
    }

    function verifikasi()
    {
    	$table 			= 'konfirmasi';
    	$id_peserta 	= $this->input->post('id_peserta');
    	$user 			= $this->input->post('user');
    	$nama_pengirim 	= $this->input->post('nama_pengirim');
    	$bank_pengirim 	= $this->input->post('bank_pengirim');
    	$ket_tambahan 	= $this->input->post('ket_tambahan');

    	//update sudah bayar
    	$p_data = array(
    			'is_bayar' 	=> 1,
    			'user_id' 	=> $user
    		);
    	$p_where = array(
    			'peserta_id' => $id_peserta
    		);
    	//insert data ke konfirmasi
    	$k_data = array(
    		'nama_pengirim' => $nama_pengirim,
    		'bank_pengirim' => $bank_pengirim,
    		'catatan'		=> $ket_tambahan,
    		'peserta_id'	=> $id_peserta,
    		'user_id'		=> $user
    		);
    	//update data peserta
    	$this->Main_model->updateData('peserta', $p_data, $p_where);
    	if ($this->db->affected_rows()) {
    		//masukan data ke table konfirmasi
    		$this->Main_model->tambah_data($table, $k_data);
            $this->Main_model->tambah_data('absen',array('peserta_id'=>$id_peserta));
    		if ($this->db->affected_rows()) {
                //jika berhasil diverifikas --> selanjutnya generate tiket peserta
    			redirect('pdf/tiket/'.$id_peserta,'refresh');
    		}
    	}

    }

    function feedback()
    {
    	$data['feedback']		= $this->Main_model->getListData('feedback',null,null,null);
    	$data['title']			= "Feedback Pengunjung";
		$data['custom_css']		= "data_tables_css";
		$data['custom_js']		= "data_tables_js";
		$data['custom_script']	= "script_data_tables";
		$data['content']		= "content/feedback";

		$this->load->view('Main', $data);
    }

    function detFeedback($id)
    {
    	$data['detail']			= $this->Main_model->getRowDataWhere('feedback','*',array('id_feed'=> $id));
    	$data['title']			= "Detail Feedback";
		$data['custom_css']		= null;
		$data['custom_js']		= null;
		$data['custom_script']	= null;
		$data['content']		= "detail/d_feedback";

		$this->load->view('Main', $data);
    }

    function updateFeedback($key, $user)
    {
    	$table = 'feedback';
    	$data = array(
    			'is_periksa' => 1,
    			'user_id' => $user
    		);
    	$where = array(
    			'id_feed' => $key
    		);

    	$this->Main_model->updateData($table, $data, $where);

    	if ($this->db->affected_rows()) {
    		$this->session->set_flashdata('info', 'Feedback sudah diperiksa');
         	redirect('admin/feedback','refresh');
    	}
    }

    function registrasi_1()
    {
        $data['peserta']        = $this->Main_model->getJoinListData('peserta','absen','*','peserta.peserta_id = absen.peserta_id');
        $data['hari']           = "hari_1";
        $data['key']            = 1;
        $data['title']          = "Registrasi Ulang Hari Pertama";
        $data['custom_css']     = "data_tables_css";
        $data['custom_js']      = "data_tables_js";
        $data['custom_script']  = "script_data_tables";
        $data['content']        = "content/registrasi_ulang";

        $this->load->view('Main', $data);
    }

    function registrasi_2()
    {
        $data['peserta']        = $this->Main_model->getJoinListData('peserta','absen','*','peserta.peserta_id = absen.peserta_id');
        $data['hari']           = "hari_2";
        $data['key']            = 2;
        $data['title']          = "Registrasi Ulang Hari Kedua";
        $data['custom_css']     = "data_tables_css";
        $data['custom_js']      = "data_tables_js";
        $data['custom_script']  = "script_data_tables";
        $data['content']        = "content/registrasi_ulang";

        $this->load->view('Main', $data);
    }

    function pesertaHadir1($peserta_id, $user_id)
    {

        $this->Main_model->updateData('absen',array('hari_1'=>1, 'user_id'=>$user_id), array('peserta_id'=>$peserta_id));
        if ($this->db->affected_rows()) {
            $this->session->set_flashdata('info', 'Kode peserta #'.$peserta_id.' berhasil registrasi ulang.');
            redirect('admin/registrasi_1','refresh');
        }
    }

    function pesertaHadir2($peserta_id, $user_id)
    {

        $this->Main_model->updateData('absen',array('hari_2'=>1, 'user_id'=>$user_id), array('peserta_id'=>$peserta_id));
        if ($this->db->affected_rows()) {
            $this->session->set_flashdata('info', 'Kode peserta #'.$peserta_id.' berhasil registrasi ulang.');
            redirect('admin/registrasi_2','refresh');
        }
    }


	//================================================================================\\
    		//GRUCERY
    //================================================================================\\
	function user(){
		//grucery untuk ambil table
		$this->crud->set_table('fls_user');
		$this->crud->set_subject('Pengguna Sistem');

		//ambil data colum dari table fls_usr
		$this->crud->columns('user_nama','user_email','user_foto','user_role','user_gabung','user_status');
		//rubah nama kolom menjadi sesukanya
		$this->crud->display_as('user_nama','Nama');
		$this->crud->display_as('user_email','Email');
		$this->crud->display_as('user_foto','Foto');
		$this->crud->display_as('user_role','Jabatan');
		$this->crud->display_as('user_gabung','Terdaftar Sejak');
		$this->crud->display_as('user_status','Status User');

		$this->crud->add_fields('user_nama','user_email','user_foto','user_password','user_role','user_status');
		$this->crud->edit_fields('user_nama','user_email','user_foto','user_password','user_role','user_status');
		$this->crud->required_fields('user_nama','user_email','user_password','user_role','user_status');

		//validasi gambar
		$this->crud->set_field_upload('user_foto', 'uploads');
		$this->crud->callback_before_upload(array($this, '_valid_images'));
		//This Callback Encryption
		$this->crud->callback_before_insert(array($this,'encrypt_password_callback'));
		$this->crud->callback_before_update(array($this,'encrypt_password_callback'));
		$this->crud->callback_edit_field('user_password',array($this,'set_userpassword_input_to_empty'));


		//API grucery untuk beberapa fungsi
		$this->crud->unset_read();
        $this->crud->unset_export();
        $this->crud->unset_print();

        $output = $this->crud->render();
        $output->gcrud = 1;
        $output->title = "Pengguna FLS";
        $output->breadcumb = "Pengguna FLS";
        $output->content = "content/blank";

		$this->load->view('grucery', $output);
	}

	//fungsi untuk melacak aktifitas user
	function aktifitasUser(){
		$data['title']			= "Aktifitas Pengguna";
		$data['custom_css']	= "data_tables_css";
		$data['custom_js']	= "data_tables_js";
		$data['custom_script']	= "script_data_tables";
		$data['content']		= "content/user_act";

		$this->load->view('Main', $data);
	}

	//fungsi untuk upload gambar
  public function _valid_images($files_to_upload, $field_info)
  {
    if ($files_to_upload[$field_info->encrypted_field_name]['type'] != ('image/png' || 'image/jpg' || 'image/jpeg'))
    {
      return 'Maaf ! Gambar yang diperbolehkan hanya bertipe PNG / JPG / JPEG';
    }
    return true;
  }

	//callback untuk password
  function encrypt_password_callback($post_array) {
        $post_array['user_password'] = sha1($post_array['user_password']);
        return $post_array;
    }

    function set_userpassword_input_to_empty() {
        return "<input type='password' class='form-control' name='user_password' value='' />";
    }
}

/* End of file Admin.php */
/* Location: ./application/controllers/Admin.php */
