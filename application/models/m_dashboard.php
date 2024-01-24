<?php

class M_dashboard extends CI_Model {

    public function countBuku()
    {
        $this->db->count_all('buku');
        return $this->db->count_all('buku');                
    }

    public function countUser()
    {
        $this->db->count_all('user');
        return $this->db->count_all('user');                
    }

    public function countPeminjaman()
    {
        $this->db->count_all('peminjaman');
        return $this->db->count_all('peminjaman');                
    }

    public function countPengembalian()
    {
        $this->db->count_all('pengembalian');
        return $this->db->count_all('pengembalian');                
    }
}