<?php

class Tiket extends CI_Controller{
    public function __construct()
    {
        parent::__construct();
        cek_login();
        //cek_login();//
    }
    public function index()
    {
        $data['judul'] = 'Tiket User';
        $data['user'] = $this->ModelUser->cekData(['email' => $this->session->userdata('email')])->row_array();
        $data['anggota'] = $this->ModelUser->getUserLimit()->result_array();
        $data['semuatiket'] = $this->ModelPesan->gettiketLimit()->result_array();
        
        $this->load->view('templates/header', $data);

        $this->load->view('templates/sidebar', $data);
        $this->load->view('templates/topbar', $data);
        $this->load->view('bioskop/tiket/index', $data);
        $this->load->view('templates/footer');
    }
}