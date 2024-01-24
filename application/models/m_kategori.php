<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class M_kategori extends CI_Model {

    function getDatakategori()
    {
        $query = $this->db->get('kategori');
        return $query->result();
    }

    function insertDatakategori($data)
    {
        $this->db->insert('kategori', $data);
    }

    function deletekategori($id_kategori) {
        $this->db->where('id_kategori', $id_kategori);
        $this->db->delete('kategori');
    }

    function relasi() 
    {
        $this->db->order_by('id_kategori', 'ASC');
        return $this->db->from('kategori')
          ->join('buku', 'buku.id_buku=kategori.buku_id')
          ->get()
          ->result();
    }  
}