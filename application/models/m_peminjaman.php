<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class M_peminjaman extends CI_Model {

    function getDatapeminjaman()
    {
        $query = $this->db->get('peminjaman');
        return $query->result();
    }

    function insertDatapeminjaman($data)
    {
        $this->db->insert('peminjaman', $data);
    }

    function deletepeminjaman($id_peminjaman) {
        $this->db->where('id_peminjaman', $id_peminjaman);
        $this->db->delete('peminjaman');
    }

    function getdata($id) 
    {
        $this->db->select('*');
        $this->db->from('peminjaman');
        $this->db->where('peminjaman.id_peminjaman', $id);
        return $this->db->get()->row_array();
    }  

    function delete($id) 
    {
        $this->db->where('id_peminjaman', $id);
        $this->db->delete('peminjaman');
    }
}