<?php

class Login extends CI_Controller{

    public function __construct() 
    {
        parent::__construct();
        $this->load->model('m_login');
    }

    public function index()
    {
        $data['judul'] = "Login Ad Perpus";
        $this->load->view('v_login', $data);
    }

    function aksi_login(){
		$username = $this->input->post('username');
		$password = $this->input->post('password');
		$level = $this->input->post('level');
		$where = array(
			'username' => $username,
			'username' => $username,
			'level' => $level
			);
		$cek = $this->m_login->cek_login("user",$where)->num_rows();
		if($cek > 0){
 
			$data_session = array(
				'nama_lengkap' => $username,
				'level' => $level
				);
 
			$this->session->set_userdata($data_session);
 
			redirect(base_url("index.php/dashboard"));
 
		}else{
			echo "Username, Password  dan Level salah !";
		}
	}
 
	function logout(){
		$this->session->sess_destroy();
		redirect(base_url('index.php/login'));
	}

}