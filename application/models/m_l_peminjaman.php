<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class M_l_peminjaman extends CI_Model {

    function getDatapeminjaman()
    {
        $query = $this->db->get('peminjaman');
        return $query->result();
    }
}