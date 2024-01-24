<?php

class Dashboard extends CI_Controller{

    public function __construct()
    {
        parent::__construct();
        $this->load->model('m_dashboard');
    }

    public function index()
    {
        $data['judul'] = "Dashboard";
        $data['buku']  = $this->m_dashboard->countBuku();
        $data['user']  = $this->m_dashboard->countUser();
        $data['peminjaman']  = $this->m_dashboard->countPeminjaman();
        $data['pengembalian']  = $this->m_dashboard->countPengembalian();
        $this->load->view('temp/header', $data);
        $this->load->view('v_dashboard', $data);
        $this->load->view('temp/footer');
    }
}