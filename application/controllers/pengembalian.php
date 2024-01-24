<?php

class Pengembalian extends CI_Controller{

    public function __construct() 
    {
        parent::__construct();
        $this->load->model('m_pengembalian');
    }

    public function index()
    {
        $queryAllpengembalian = $this->m_pengembalian->getDatapengembalian();
        $data = array('queryAllpengembalian' => $queryAllpengembalian);
        $data['judul'] = "Data Pengembalian";
        $this->load->view('temp/header', $data);
        $this->load->view('pengembalian/v_pengembalian', $data);
        $this->load->view('temp/footer');
    }
}