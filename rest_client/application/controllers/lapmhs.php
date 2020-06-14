<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Lapmhs extends CI_Controller {

	public function __construct() {
		parent::__construct();
		$this->load->model('M_lapmhs');
	}

	public function index(){

		$dtlaporan = $this->M_lapmhs->getLaporan();
		$data = array('laporan' => $dtlaporan);
		$this->load->view('listlapmhs', $data);
	
	}
	
	public function c_laporan(){
		
		$this->load->view('createm');
		
	}
	
	public function create(){
		
		$no_lap = $this->input->post('no_lap');
		$judul = $this->input->post('judul');
		$jnlap = $this->input->post('jnlap');
		$nim = $this->input->post('nim');
		$tgl_upld = $this->input->post('tgl_upld');
		$file = $_FILES['file'];
		if ($file = '') {} else{
			$config['allowed_type'] = 'doc|pdf';
		}
		
		$data = array(
            'no_lap' => $no_lap,
			'judul' => $judul,
			'jnlap' => $jnlap,
			'nim' => $nim,
			'tgl_upld' => $tgl_upld,
			'file' => $file
		);
		
		$this->M_lapmhs->createLaporan($data);
		redirect(base_url('index.php/lapmhs'));
		
	}
	
	public function e_laporan($no_lap){
		$dtlap = $this->M_lapmhs->getDataLap($no_lap);
		$data = array('laporan' => $dtlap);
		$this->load->view('editm',$data);
	
	}
	
	public function edit(){
		
		$no_lap = $this->input->post('no_lap');
		$judul = $this->input->post('judul');
		$jnlap = $this->input->post('jnlap');
		$nim = $this->input->post('nim');
		$tgl_upld = $this->input->post('tgl_upld');
		$file = $this->input->post('file');
		
		$data = array(
			'judul' => $judul,
			'jnlap' => $jnlap,
			'nim' => $nim,
			'tgl_upld' => $tgl_upld,
			'file' => $file
		);
		
		$this->M_lapmhs->editLaporan($data, $no_lap);
		redirect(base_url('index.php/lapmhs'));

	}

	public function delete($no_lap){
		$this->M_lapmhs->deleteLaporan($no_lap);
		redirect(base_url('index.php/lapmhs'));
	}

}