<?php

class Peminjaman extends CI_Controller{

    public function __construct() 
    {
        parent::__construct();
        $this->load->model('m_peminjaman');
    }

    public function index()
    {
        $queryAllpeminjaman = $this->m_peminjaman->getDatapeminjaman();
        $data = array('queryAllpeminjaman' => $queryAllpeminjaman);
        $data['judul'] = "Data peminjaman";
        $this->load->view('temp/header', $data);
        $this->load->view('peminjaman/v_peminjaman', $data);
        $this->load->view('temp/footer');
    }

    
    public function tambahData() 
    {
        $data['judul'] = "Tambah peminjaman";
        $data['user'] = $this->db->get('user')->result();
        $data['buku'] = $this->db->get('buku')->result();
        $this->load->view('temp/header', $data);
        $this->load->view('peminjaman/t_peminjaman', $data);
        $this->load->view('temp/footer');

    }

    public function fungsiTambah()
    {
        $user_id = $this->input->post('user_id');
        $user_insert = $this->input->post('user_insert');
        $buku_id = $this->input->post('buku_id');
        $tgl_peminjaman = $this->input->post('tgl_peminjaman');
        $tgl_pengembalian = $this->input->post('tgl_pengembalian');
        $ArrInsert = array(
            'user_id' => $user_id,
            'user_insert' => $user_insert,
            'buku_id' => $buku_id,
            'tgl_peminjaman' => $tgl_peminjaman,
            'tgl_pengembalian' => $tgl_pengembalian
        );
        $this->m_peminjaman->insertDatapeminjaman($ArrInsert);
        redirect(base_url('index.php/peminjaman'));
    }

    public function kembalikan($id)
    {
        $data = $this->m_peminjaman->getdata($id);
        $kembalikan = array(
            'id_peminjaman' => $data['id_peminjaman'],
            'user_id' => $data['user_id'],
            'user_insert' => $data['user_insert'],
            'buku_id' =>  $data['buku_id'],
            'tgl_peminjaman' => $data['tgl_peminjaman'],
            'tgl_pengembalian' => date('Y-m-d')
        );
        $query = $this->db->insert('pengembalian', $kembalikan);
        if ($query = true) {
            $delete = $this->m_peminjaman->delete($id);
        } if ($delete = true) {
            redirect('index.php/peminjaman');
        }
    }

}