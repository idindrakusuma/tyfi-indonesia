<?php
ob_start(); #issue 14
defined('BASEPATH') OR exit('No direct script access allowed');

class Main extends CI_Controller {

	public function index()
	{
        if(!isset($_SESSION)){
            $this->session;
        }
        //-> cek login
        if(isset($_POST["login"])){
            $email = $this->input->post("email");
            $password = sha1($this->input->post("password"));

            $this->db->select('*');
            $this->db->from('users');
            $this->db->where('user_email', $email);
            $this->db->where('user_password', $password);
            $this->db->where('user_status', '1');
            $query = $this->db->get();

            if($query->num_rows() > 0){
                $tmp = $query->result_array();
								$session = array (
                        'user_id'   => $tmp[0]['user_id'],
                        'user_foto' => $tmp[0]['user_foto'],
                        'user_nama' => $tmp[0]['user_nama'],
                        'user_role' => $tmp[0]['user_role']
                    );
                //set user data session
                $this->session->set_userdata($session);
            }else{
                //-> Informasi password & username tidak cocok
                $this->session->set_flashdata('info', 'Email & Password tidak cocok!');
            }
        }

        //-> membuat perbedaan tingkat login
        if(isset($_SESSION['user_id'])){

            //-> system log
            $tabel = 'sys_log';
            $user = $this->session->user_id;
            $data = array(
                    'user_id' => $user,
                    'log_jenis' => 1 //-> 1 untuk login dan 0 untuk logout
                );
            $this->Main_model->tambah_data($tabel,$data);
						//jika berhasil -> cek role user
						if($_SESSION['user_role'] == "admin"){
							redirect('Admin','refresh');
						}
						else{
							echo "opps ada kesalah! Anda tidak terdaftar sebagai user kami!";;
						}
        }
        else{
            $this->load->view('login');
        }
	}

    public function eror404()
    {
        $data['title']      = "Halaman Tidak Ditemukan";
        $data['custom_css'] = null;
        $data['custom_js']  = null;
        $data['custom_script']  = null;
        $data['content']    = "content/404";

        $this->load->view('404', $data);
    }

}

/* End of file Main.php */
/* Location: ./application/controllers/Main.php */
