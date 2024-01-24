<?php

class Ulasan extends CI_Controller{

    public function __construct() 
    {
        parent::__construct();
        $this->load->model('m_ulasan');
    }

    public function index()
    {
        $queryAllulasan = $this->m_ulasan->getDataulasan();
        $data = array('queryAllulasan' => $queryAllulasan);
        $data['judul'] = "Data Ulasan";
        $this->load->view('temp/header', $data);
        $this->load->view('ulasan/v_ulasan', $data);
        $this->load->view('temp/footer');
    }

    
    public function tambahData() 
    {
        $data['judul'] = "Tambah ulasan";
        $data['user'] = $this->db->get('user')->result();
        $data['buku'] = $this->db->get('buku')->result();
        $this->load->view('temp/header', $data);
        $this->load->view('ulasan/t_ulasan', $data);
        $this->load->view('temp/footer');

    }

    public function fungsiTambah()
    {
        $user_id = $this->input->post('user_id');
        $buku_id = $this->input->post('buku_id');
        $ulasan = $this->input->post('ulasan');
        $rating = $this->input->post('rating');
        $ArrInsert = array(
            'user_id' => $user_id,
            'buku_id' => $buku_id,
            'ulasan' => $ulasan,
            'rating' => $rating
        );
        $this->m_ulasan->insertDataulasan($ArrInsert);
        redirect(base_url('index.php/ulasan'));
    }

    // public function fungsiDelete($id_ulasan)
    // {
    //     $this->m_ulasan->deleteulasan($id_ulasan);
    //     redirect(base_url('index.php/ulasan'));
    // }

}