<?php

class Koleksi extends CI_Controller{

    public function __construct() 
    {
        parent::__construct();
        $this->load->model('m_koleksi');
    }

    public function index()
    {
        $queryAllkoleksi = $this->m_koleksi->getDatakoleksi();
        $data = array('queryAllkoleksi' => $queryAllkoleksi);
        $data['judul'] = "Data Koleksi";
        $this->load->view('temp/header', $data);
        $this->load->view('koleksi/v_koleksi', $data);
        $this->load->view('temp/footer');
    }

    
    public function tambahData() 
    {
        $data['judul'] = "Tambah koleksi";
        $data['user'] = $this->db->get('user')->result();
        $data['buku'] = $this->db->get('buku')->result();
        $this->load->view('temp/header', $data);
        $this->load->view('koleksi/t_koleksi', $data);
        $this->load->view('temp/footer');

    }

    public function fungsiTambah()
    {
        $user_id = $this->input->post('user_id');
        $buku_id = $this->input->post('buku_id');
        $ArrInsert = array(
            'user_id' => $user_id,
            'buku_id' => $buku_id
        );
        $this->m_koleksi->insertDatakoleksi($ArrInsert);
        redirect(base_url('index.php/koleksi'));
    }

    public function fungsiDelete($id_koleksi)
    {
        $this->m_koleksi->deletekoleksi($id_koleksi);
        redirect(base_url('index.php/koleksi'));
    }

}