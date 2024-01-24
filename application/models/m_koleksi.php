<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class M_koleksi extends CI_Model {

    function getDatakoleksi()
    {
        $query = $this->db->get('koleksi');
        return $query->result();
    }

    function insertDatakoleksi($data)
    {
        $this->db->insert('koleksi', $data);
    }

    function deletekoleksi($id_koleksi) {
        $this->db->where('id_koleksi', $id_koleksi);
        $this->db->delete('koleksi');
    }
}