<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dosen extends CI_Controller {

	public function __construct() {
		parent::__construct();
		$this->load->model('M_dosen');
	}

	public function index(){

		$dtdosen = $this->M_dosen->getdosen();
		$data = array('dosen' => $dtdosen);
		$this->load->view('list', $data);
	
	}
	
	public function c_dosen(){
		
		$this->load->view('create');
		
	}
	
	public function create(){
		
		$kddospem = $this->input->post('kddospem');
		$nmdosepm = $this->input->post('nmdospem');
		
		$data = array(
			'kddospem' => $kddospem,
			'nmdospem' => $nmdosepm
		);
		
		$this->M_dosen->createDosen($data);
		redirect(base_url('index.php/dosen'));
		
	}
	
	public function e_dosen($kddospem){
		$dtdsn = $this->M_dosen->getDataDsn($kddospem);
		$data = array('dosen' => $dtdsn);
		$this->load->view('edit',$data);
	
	}
	
	public function edit(){
		
		$kddospem = $this->input->post('kddospem');
		$nmdospem = $this->input->post('nmdospem');
		
		$data = array(
			'nmdospem' => $nmdospem
		);
		
		$this->M_dosen->editDosen($data, $kddospem);
		redirect(base_url('index.php/dosen'));

	}

	public function delete($kddospem){
		$this->M_dosen->deleteDosen($kddospem);
		redirect(base_url('index.php/dosen'));
	}

}