<?php

class Buku extends CI_Controller{

    public function __construct() 
    {
        parent::__construct();
        $this->load->model('m_buku');
    }

    public function index()
    {
        $queryAllBuku = $this->m_buku->getDataBuku();
        $data = array('queryAllBuku' => $queryAllBuku);
        $data['judul'] = "Data Buku";
        $this->load->view('temp/header', $data);
        $this->load->view('buku/v_buku', $data);
        $this->load->view('temp/footer');
    }

    
    public function tambahData() 
    {
        $data['judul'] = "Tambah Buku";
        $this->load->view('temp/header', $data);
        $this->load->view('buku/t_buku');
        $this->load->view('temp/footer');

    }

    public function fungsiTambah()
    {
        $judul = $this->input->post('judul');
        $penulis = $this->input->post('penulis');
        $penerbit = $this->input->post('penerbit');
        $tahun_terbit = $this->input->post('tahun_terbit');
        $ArrInsert = array(
            'judul' => $judul,
            'penulis' => $penulis,
            'penerbit' => $penerbit,
            'tahun_terbit' => $tahun_terbit
        );
        $this->m_buku->insertDataBuku($ArrInsert);
        redirect(base_url('index.php/buku'));
    }

    public function edit($id_buku)
    {
        $where = array('id_buku' => $id_buku);
		$data['buku'] = $this->m_buku->edit_data($where,'buku')->result();
        // $queryBukuDetail = $this->m_buku->getBukuDetail($id_buku);
        // $data = array('queryBukuDetail' => $queryBukuDetail);
        $dt['judul'] = "Edit Buku";
        $this->load->view('temp/header', $dt);
        $this->load->view('buku/e_buku', $data);
        $this->load->view('temp/footer');
    }

    public function update()
    {
        $id = $this->input->post('id_buku');
        $data = array(
            'id_buku' => $this->input->post('id_buku'),
            'judul' => $this->input->post('judul'),
            'penulis' => $this->input->post('penulis'),
            'penerbit' => $this->input->post('penerbit'),
            'tahun_terbit' => $this->input->post('tahun_terbit')
        );
        $query = $this->m_buku->update($id, $data);
        if ($query = true) {
            redirect('index.php/buku');
        }
    }

    

    // public function edit($id_buku)
    // {
    //     $queryBukuDetail = $this->m_buku->getBukuDetail($id_buku);
    //     $dt['judul'] = "Edit Buku";
    //     $data = array('queryBukuDetail' => $queryBukuDetail);
    //     $this->load->view('temp/header', $dt);
    //     $this->load->view('buku/e_buku', $data);
    //     $this->load->view('temp/footer');
    // }

    // public function fungsiEdit()
    // {
    //     $id_buku = $this->input->post('id_buku');
    //     $judul = $this->input->post('judul');
    //     $penulis = $this->input->post('penulis');
    //     $penerbit = $this->input->post('penerbit');
    //     $tahun_terbit = $this->input->post('tahun_terbit');

    //     $ArrUpdate = array(
    //         'judul' => $judul,
    //         'penulis' => $penulis,
    //         'penerbit' => $penerbit,
    //         'tahun_terbit' => $tahun_terbit
    //     );
    //     $this->m_buku->updateBuku($id_buku, $ArrUpdate);
    //     redirect(base_url('index.php/buku'));
    // }

    // function editBuku($id_buku){
        //     $dt['judul'] = "Edit Buku";
	// 	$where = array('id_buku' => $id_buku);
	// 	$data['buku'] = $this->m_buku->edit_data($where,'buku')->result();
    //     $this->load->view('temp/header', $dt);
    //     $this->load->view('buku/e_buku', $data);
    //     $this->load->view('temp/footer');
	// }

    public function fungsiDelete($id_buku)
    {
        $this->m_buku->deleteBuku($id_buku);
        redirect(base_url('index.php/buku'));
    }

    // function update(){
    //         $id_buku = $this->input->post('id_buku');
    //         $judul = $this->input->post('judul');
    //         $penulis = $this->input->post('penulis');
    //         $penerbit = $this->input->post('penerbit');
    //         $tahun_terbit = $this->input->post('tahun_terbit');
    
    //     $data = array(
    //             'judul' => $judul,
    //             'penulis' => $penulis,
    //             'penerbit' => $penerbit,
    //             'tahun_terbit' => $tahun_terbit
    //     );
    
    //     $where = array(
    //         'id_buku' => $id_buku
    //     );
    
    //     $this->m_buku->update_data($where,$data,'buku');
    //     redirect('index.php/buku');
    // }

}