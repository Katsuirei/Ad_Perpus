<?php

class User extends CI_Controller{

    public function __construct() 
    {
        parent::__construct();
        $this->load->model('m_user');
    }

    public function index()
    {
        $query = $this->m_user->getDataUser();
        $data = array('query' => $query);
        $data['judul'] = "Data User";
        $this->load->view('temp/header', $data);
        $this->load->view('user/v_user', $data);
        $this->load->view('temp/footer');
    }

    public function tambahData() 
    {
        $data['judul'] = "Tambah User";
        $this->load->view('temp/header', $data);
        $this->load->view('user/t_user');
        $this->load->view('temp/footer');

    }

    public function fungsiTambah()
    {
        $nama_lengkap = $this->input->post('nama_lengkap');
        $username = $this->input->post('username');
        $password = $this->input->post('password');
        $no_telp = $this->input->post('no_telp');
        $level = $this->input->post('level');
        $ArrInsert = array(
            'nama_lengkap' => $nama_lengkap,
            'username' => $username,
            'password' => $password,
            'no_telp' => $no_telp,
            'level' => $level
        );
        $this->m_user->insertDataUser($ArrInsert);
        redirect(base_url('index.php/user'));
    }

    public function fungsiDelete($id_user)
    {
        $this->m_user->deleteUser($id_user);
        redirect(base_url('index.php/user'));
    }

    public function edit($id_user)
    {
        $where = array('id_user' => $id_user);
		$data['user'] = $this->m_user->edit_data($where,'user')->result();
        $dt['judul'] = "Edit User";
        $this->load->view('temp/header', $dt);
        $this->load->view('user/e_user', $data);
        $this->load->view('temp/footer');
    }

    public function update()
    {
        $id = $this->input->post('id_user');
        $data = array(
            'id_user' => $this->input->post('id_user'),
            'nama_lengkap' => $this->input->post('nama_lengkap'),
            'username' => $this->input->post('username'),
            'password' => $this->input->post('password'),
            'no_telp' => $this->input->post('no_telp'),
            'level' => $this->input->post('level')
        );
        $query = $this->m_user->update($id, $data);
        if ($query = true) {
            redirect('index.php/user');
        }
    }
}