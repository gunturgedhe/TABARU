<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_lapadm extends CI_Model {

    public function __construct() {
        parent::__construct();
        $this->load->database();
    }

    public function getLap() {
        $this->db->select('*');
        $this->db->from('laporan');
        $query = $this->db->get();
        return $query->result();
    }

    public function deleteLap($no_lap){
        $this->db->where('no_lap', $no_lap);
        $this->db->delete('laporan');
    }

    public function dwnldlaporan(){
        
    }


}