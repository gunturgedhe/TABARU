<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_mahasiswa extends CI_Model {

    public function __construct() {
        // parent::__construct();
        $this->load->database();
    }

    public function getMhs() {
        $this->db->select('*');
        $this->db->from('mahasiswa');
        $query = $this->db->get();
        return $query->result();
    }

    public function createMhs($data){
        $this->db->insert('mahasiswa', $data);
    }

    public function editMhs($data, $nim){
        $this->db->where('nim', $nim);
        $this->db->update('mahasiswa', $data);
    }

    public function deleteMhs($nim){
        $this->db->where('nim', $nim);
        $this->db->delete('mahasiswa');
    }

    public function getDataMhs($nim){
        $this->db->where('nim', $nim);
        $query = $this->db->get('mahasiswa');
        return $query->row();
    }

}