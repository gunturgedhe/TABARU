<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class m_cari extends CI_Model {    

    public function __construct(){
      parent::__construct();
      $this->db->database();
    }
    
    public function dosen($keyword){
      $this->db->select('*');
      $this->db->from('dosen');
      $this->db->like('kddospem', $keyword);
      $this->db->or_like('nmdospem', $keyword);
      $query = $this->db->get();
      return $query->result();
    }

    public function mahasiswa($keyword){
      $this->db->select('*');
      $this->db->from('mahasiswa');
      $this->db->like('nim', $keyword);
      $this->db->or_like('nama', $keyword);
      $query = $this->db->get();
      return $query->result();  
    }

    public function lapadm($keyword){
      $this->db->select('*');
      $this->db->from('laporan');
      $this->db->like('no_lap', $keyword);
      $this->db->or_like('nim', $keyword);
      $query = $this->db->get();
      return $query->result();  
    }

    public function lapdsn($keyword){
      $this->db->select('*');
      $this->db->from('laporan');
      $this->db->like('no_lap', $keyword);
      $this->db->or_like('nim', $keyword);
      $query = $this->db->get();
      return $query->result();  
    }

    public function lapmhs($keyword){
      $this->db->select('*');
      $this->db->from('laporan');
      $this->db->like('no_lap', $keyword);
      $this->db->or_like('nim', $keyword);
      $query = $this->db->get();
      return $query->result();  
    }
}