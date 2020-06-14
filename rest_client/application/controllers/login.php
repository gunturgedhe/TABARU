<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
        $this->load->library('form_validation');
        $this->load->model('M_login');
    }

    public function index(){
        if($this->M_login->is_logged_in()){
            //jika memang session sudah terdaftar, maka redirect ke halaman dahsboard
            if($this->session->userdata("role") == "admin"){
                redirect("dosen");
            }else if ($this->session->userdata("role") == "mahasiswa"){
                redirect("lapmhs");
            }else{
                redirect("lapdsn");
            }

            }else{

            //jika session belum terdaftar

            //set form validation
            $this->form_validation->set_rules('username', 'Username', 'required|trim');
            $this->form_validation->set_rules('password', 'Password', 'required');

            //set message form validation
            $this->form_validation->set_message('required', '<div class="alert alert-danger" style="margin-top: 3px">
            <div class="header"><b><i class="fa fa-exclamation-circle"></i> {field}</b> harus diisi</div></div>');

            //cek validasi
            if ($this->form_validation->run() == TRUE) {

            //get data dari FORM
            $username = $this->input->post("username", TRUE);
            $password = $this->input->post('password', TRUE);

            //checking data via model
            $checking = $this->m_login->check_login('users', array('username' => $username), array('pass' => $password));
                
            //var_dump($checking);
            //die();

            //jika ditemukan, maka create session
                if ($checking != FALSE) {
                    foreach ($checking as $apps) {
                        $session_data = array(
                        'id_user'   => $apps->id_user,
                        'username'  => $apps->username,
                        'pass'      => $apps->pass,
                        'nama'      => $apps->nama,
                        'role'      => $apps->role
                        );
                        //set session userdata
                        $this->session->set_userdata($session_data);
                        //var_dump($session_data);
                        //die();

                        //redirect berdasarkan level user
                        if($this->session->userdata("role") == "admin"){
                            redirect("dosen");
                        }else if ($this->session->userdata("role") == "mahasiswa"){
                            redirect("lapmhs");
                        }else{
                            redirect("lapdsn");
                        } 
                    }        
                    }else{
                        $data['error'] = '<div class="alert alert-danger" style="margin-top: 3px">
                        <div class="header"><b><i class="fa fa-exclamation-circle"></i> ERROR</b> username atau password salah!</div></div>';
                        $this->load->view('login', $data);
                    }
                }else{

                $this->load->view('login');
            }
        }
    }
    
    function register(){

        //set form validation
        $this->form_validation->set_rules('nama', 'Nama', 'required|trim');
        $this->form_validation->set_rules('username', 'Username', 'required|trim|is_unique[users.username]');
        $this->form_validation->set_rules('password1', 'Password', 'required|trim|min_length[3]|matches[password2]');
        $this->form_validation->set_rules('password2', 'Password', 'required|trim|matches[password1]');

        //set message form validation
        $this->form_validation->set_message('required', '<div class="alert alert-danger" style="margin-top: 3px">
        <div class="header"><b><i class="fa fa-exclamation-circle"></i>{field}</b> harus diisi</div></div>');
        $this->form_validation->set_message('is_unique', '<div class="alert alert-danger" style="margin-top: 3px">
        <div class="header"><b><i class="fa fa-exclamation-circle"></i>{field}</b> sudah digunakan !!</div></div>');
        $this->form_validation->set_message('min_length', '<div class="alert alert-danger" style="margin-top: 3px">
        <div class="header"><b><i class="fa fa-exclamation-circle"></i>{field}</b> kurang dari 3 digit !!</div></div>');
        $this->form_validation->set_message('matches', '<div class="alert alert-danger" style="margin-top: 3px">
        <div class="header"><b><i class="fa fa-exclamation-circle"></i>{field}</b> tidak sama !!</div></div>');

        if ($this->form_validation->run() == false) {
            $this->load->view('register');
        }else {
            $data = [
                'nama'     => htmlspecialchars($this->input->post('nama', true)),
                'username' => htmlspecialchars($this->input->post('username')),
                'pass'     => htmlspecialchars($this->input->post('password1')),
                'role'     => 'dosen'
            ];

            $this->db->insert('users', $data);
            $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">
            Registrasi berhasil! Silahkan Login.
          </div>');
            redirect('login');
        }
    }
    
    function logout(){
		$this->session->sess_destroy();
		redirect(base_url('index.php/login'));
	}

}