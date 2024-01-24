<?php

class L_peminjaman extends CI_Controller{

    public function __construct() 
    {
        parent::__construct();
        $this->load->model('m_l_peminjaman');
    }

    public function index()
    {
        $queryAlllpeminjaman = $this->m_l_peminjaman->getDatapeminjaman();
        $data = array('queryAlllpeminjaman' => $queryAlllpeminjaman);
        $data['judul'] = "Laporan Peminjaman";
        $this->load->view('temp/header', $data);
        $this->load->view('l_peminjaman/v_l_peminjaman', $data);
        $this->load->view('temp/footer');
    }
}