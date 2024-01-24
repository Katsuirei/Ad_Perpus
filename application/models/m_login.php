<?php
class M_login extends CI_Model {

    function getDataUser()
    {
        $query = $this->db->get('user');
        return $query->result();
    }

    function insertDataUser($data)
    {
        $this->db->insert('user', $data);
    }

    function deleteUser($id_user) {
        $this->db->where('id_user', $id_user);
        $this->db->delete('user');
    }
    
    function cek_login($table,$where){		
		return $this->db->get_where($table,$where);
	}	
}