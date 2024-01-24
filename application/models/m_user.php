<?php
class M_user extends CI_Model {

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

    public function update($id, $data)
    {
        $this->db->where('id_user', $id);
        $this->db->update('user', $data);
    }

    function edit_data($where,$table){		
        return $this->db->get_where($table,$where);
    }
}