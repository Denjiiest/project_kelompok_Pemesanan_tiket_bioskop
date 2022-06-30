<?php defined('BASEPATH') or exit('No direct script access allowed');

class Bioskop extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        cek_login();
        //cek_login();//
    }

    public function index()
    {
        $data['judul'] = 'Dashboard';
        $data['user'] = $this->ModelUser->cekData(['email' => $this->session->userdata('email')])->row_array();
        $data['anggota'] = $this->ModelUser->getUserLimit()->result_array();
        $this->load->view('templates/header', $data);

        $this->load->view('templates/sidebar', $data);
        $this->load->view('templates/topbar', $data);
        $this->load->view('bioskop/index', $data);
        $this->load->view('templates/footer');
    }
}