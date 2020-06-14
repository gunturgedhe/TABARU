<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Lapadm extends CI_Controller {

	public function __construct() {
		parent::__construct();
		$this->load->model('M_lapadm');
	}

	public function index(){

		$dtlaporan = $this->M_lapadm->getLap();
		$data = array('laporan' => $dtlaporan);
		$this->load->view('listlapadm', $data);
	
	}

	public function delete($no_lap){
		$this->M_lapadm->deleteLap($no_lap);
		redirect(base_url('index.php/lapadm'));
	}

	public function d_laporan(){
        
    }

}