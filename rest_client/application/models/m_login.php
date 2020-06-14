<?php 

class M_login extends CI_Model{	

	function cek_login($table,$where){		
		return $this->db->get_where($table,$where);
	}
	
	function is_logged_in()
    {
        return $this->session->userdata('id_user');
    }

    //fungsi cek level
    function is_role()
    {
        return $this->session->userdata('role');
    }

    //fungsi check login
    function check_login($table, $field1, $field2)
    {
        $this->db->select('*');
        $this->db->from($table);
        $this->db->where($field1);
        $this->db->where($field2);
        $this->db->limit(1);
        $query = $this->db->get();
        if ($query->num_rows() == 0) {
            return FALSE;
        } else {
            return $query->result();
        }
    }
}