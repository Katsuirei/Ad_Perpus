<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class M_ulasan extends CI_Model {

    function getDataulasan()
    {
        $query = $this->db->get('ulasan');
        return $query->result();
    }

    function insertDataulasan($data)
    {
        $this->db->insert('ulasan', $data);
    }

    function deleteulasan($id_ulasan) {
        $this->db->where('id_ulasan', $id_ulasan);
        $this->db->delete('ulasan');
    }
}