<?php

Class search Extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->load->helper('url');
        $this->load->model('m_cari');
        $this->load->helper('form');
    }

    // function index(){
    //     $this->load->view('list', $data);
    // }

    public function search()
    {
        $keyword    =   $this->input->post('keyword');
        $data['dosen']    =   $this->m_cari->dosen($keyword);
        $this->load->view('list',$data);
    }

    public function searchmhs()
    {
        $keyword    =   $this->input->post('keyword');
        $data['mahasiswa']    =   $this->m_cari->mahasiswa($keyword);
        $this->load->view('listb',$data);
    }

    public function searchlapadm()
    {
        $keyword    =   $this->input->post('keyword');
        $data['laporan']    =   $this->m_cari->lapadm($keyword);
        $this->load->view('listlapadm',$data);
    }

    public function searchlapdsn()
    {
        $keyword    =   $this->input->post('keyword');
        $data['laporan']    =   $this->m_cari->lapdsn($keyword);
        $this->load->view('listlapdsn',$data);
    }

    public function searchlapmhs()
    {
        $keyword    =   $this->input->post('keyword');
        $data['laporan']    =   $this->m_cari->lapmhs($keyword);
        $this->load->view('listlapmhs',$data);
    }

}

?>