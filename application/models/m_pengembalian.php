<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class M_pengembalian extends CI_Model {

    function getDatapengembalian()
    {
        $query = $this->db->get('pengembalian');
        return $query->result();
    }
}