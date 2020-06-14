<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_dosen extends CI_Model {

    public function __construct() {
        // parent::__construct();
        $this->load->database();
    }

    public function getdosen() {
        $this->db->select('*');
        $this->db->from('dosen');
        $query = $this->db->get();
        return $query->result();
    }

    public function createDosen($data){
        $this->db->insert('dosen', $data);
    }

    public function editDosen($data, $kddospem){
        $this->db->where('kddospem', $kddospem);
        $this->db->update('dosen', $data);
    }

    public function deleteDosen($kddospem){
        $this->db->where('kddospem', $kddospem);
        $this->db->delete('dosen');
    }

    public function getDataDsn($kddospem){
        $this->db->where('kddospem', $kddospem);
        $query = $this->db->get('dosen');
        return $query->row();
    }

}