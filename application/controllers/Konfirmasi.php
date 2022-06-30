<?php 
defined('BASEPATH') or exit('No direct script access allowed');

class Konfirmasi extends CI_Controller{
    public function __construct()
    {
        parent::__construct();
        cek_login();
    }
    
    public function index()
    {
        $data['judul'] = 'Konfirmasi Pembelian';
        $data['user'] = $this->ModelUser->cekData(['email' => $this->session->userdata('email')])->row_array();
        $data['anggota'] = $this->ModelUser->getUserLimit()->result_array();


        $this->load->view('templates/header', $data);

        $this->load->view('templates/sidebar', $data);
        $this->load->view('templates/topbar', $data);
        $this->load->view('konfirmasi/konfirmasi_pembelian', $data);
        $this->load->view('templates/footer');
    }

    
}