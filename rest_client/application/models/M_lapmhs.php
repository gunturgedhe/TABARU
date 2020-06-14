<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_lapmhs extends CI_Model {

    public function __construct() {
        // parent::__construct();
        $this->load->database();
    }

    public function getLaporan() {
        $this->db->select('*');
        $this->db->from('laporan');
        $query = $this->db->get();
        return $query->result();
    }

    public function createLaporan($data){
        $this->db->insert('laporan', $data);
    }

    public function editLaporan($data, $no_lap){
        $this->db->where('no_lap', $no_lap);
        $this->db->update('laporan', $data);
    }

    public function deleteLaporan($no_lap){
        $this->db->where('no_lap', $no_lap);
        $this->db->delete('laporan');
    }

    public function getDataLap($no_lap){
        $this->db->where('no_lap', $no_lap);
        $query = $this->db->get('laporan');
        return $query->row();
    }

}