<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class M_buku extends CI_Model {

    function getDataBuku()
    {
        $query = $this->db->get('buku');
        return $query->result();
    }

    function insertDataBuku($data)
    {
        $this->db->insert('buku', $data);
    }

    function getBukuDetail($id_buku) 
    {
        $this->db->where('id_buku', $id_buku);
        $query = $this->db->get('buku');
        return $query->row();
    }

    function updateBuku($id_buku, $ArrUpdate) 
    {
        $this->db->where('id_buku', $id_buku);
        $this->db->update('buku', $ArrUpdate);
    }

    function deleteBuku($id_buku) {
        $this->db->where('id_buku', $id_buku);
        $this->db->delete('buku');
    }

    public function update($id, $data)
    {
        $this->db->where('id_buku', $id);
        $this->db->update('buku', $data);
    }

    function edit_data($where,$table){		
        return $this->db->get_where($table,$where);
    }

    // function update_data($where,$data,$table){
	// 	$this->db->where($where);
	// 	$this->db->update($table,$data);
	// }
}