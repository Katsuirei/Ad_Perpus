<?php

class Kategori extends CI_Controller{

    public function __construct() 
    {
        parent::__construct();
        $this->load->model('m_kategori');
    }

    public function index()
    {
        $queryAllkategori = $this->m_kategori->getDatakategori();
        $data = array('queryAllkategori' => $queryAllkategori);
        $data['judul'] = "Data Kategori";
        $this->load->view('temp/header', $data);
        $this->load->view('kategori/v_kategori', $data);
        $this->load->view('temp/footer');
    }

    
    public function tambahData() 
    {
        $data['judul'] = "Tambah kategori";
        $data['buku'] = $this->db->get('buku')->result();
        $this->load->view('temp/header', $data);
        $this->load->view('kategori/t_kategori', $data);
        $this->load->view('temp/footer');

    }

    public function fungsiTambah()
    {
        $buku_id = $this->input->post('buku_id');
        $nama_kategori = $this->input->post('nama_kategori');
        $ArrInsert = array(
            'buku_id' => $buku_id,
            'nama_kategori' => $nama_kategori
        );
        $this->m_kategori->insertDatakategori($ArrInsert);
        redirect(base_url('index.php/kategori'));
    }

    public function fungsiDelete($id_kategori)
    {
        $this->m_kategori->deletekategori($id_kategori);
        redirect(base_url('index.php/kategori'));
    }

}