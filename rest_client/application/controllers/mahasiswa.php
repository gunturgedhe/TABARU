<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Mahasiswa extends CI_Controller {

	public function __construct() {
		parent::__construct();
		$this->load->model('M_mahasiswa');
	}

	public function index(){

		$dtmahasiswa = $this->M_mahasiswa->getMhs();
		$data = array('mahasiswa' => $dtmahasiswa);
		$this->load->view('listb', $data);
	
	}
	
	public function c_mahasiswa(){
		
		$this->load->view('createb');
		
	}
	
	public function create(){
		
		$nim = $this->input->post('nim');
		$nama = $this->input->post('nama');
		$no_hp = $this->input->post('no_hp');
		$password = $this->input->post('password');
		$jurusan = $this->input->post('jurusan');
		$prodi = $this->input->post('prodi');
		$kddospem = $this->input->post('kddospem');
		
		$data = array(
			'nim' => $nim,
			'nama' => $nama,
			'no_hp' => $no_hp,
			'password' => $password,
			'jurusan' => $jurusan,
			'prodi' => $prodi,
			'kddospem' => $kddospem
		);
		
		$this->M_mahasiswa->createMhs($data);
		redirect(base_url('index.php/mahasiswa'));
		
	}
	
	public function e_mahasiswa($nim){
		$dtmhs = $this->M_mahasiswa->getDataMhs($nim);
		$data = array('mahasiswa' => $dtmhs);
		$this->load->view('editb',$data);
	
	}
	
	public function edit(){
		
		$nim = $this->input->post('nim');
		$nama = $this->input->post('nama');
		$no_hp = $this->input->post('no_hp');
		$password = $this->input->post('password');
		$jurusan = $this->input->post('jurusan');
		$prodi = $this->input->post('prodi');
		$kddospem = $this->input->post('kddospem');
		
		$data = array(
			'nama' => $nama,
			'no_hp' => $no_hp,
			'password' => $password,
			'jurusan' => $jurusan,
			'prodi' => $prodi,
			'kddospem' => $kddospem
		);
		
		$this->M_mahasiswa->editMhs($data, $nim);
		redirect(base_url('index.php/mahasiswa'));

	}

	public function delete($nim){
		$this->M_mahasiswa->deleteMhs($nim);
		redirect(base_url('index.php/mahasiswa'));
	}

}