<?php 
defined('BASEPATH') or exit('No direct script access allowed');

class Sinopsis extends CI_Controller{
    public function __construct()
    {
        parent::__construct();
        cek_login();
    }
    
    public function index()
    {
        $data['judul'] = 'Sinopsis Film';
        $data['user'] = $this->ModelUser->cekData(['email' => $this->session->userdata('email')])->row_array();
        $data['anggota'] = $this->ModelUser->getUserLimit()->result_array();
        $this->load->view('templates/header', $data);

        $this->load->view('templates/sidebar', $data);
        $this->load->view('templates/topbar', $data);
        $this->load->view('film/sinopsis/onepice', $data);
        $this->load->view('templates/footer');
    }

    public function turningred(){
        $data['judul'] = 'Sinopsis Film';
        $data['user'] = $this->ModelUser->cekData(['email' => $this->session->userdata('email')])->row_array();
        $data['anggota'] = $this->ModelUser->getUserLimit()->result_array();
        $this->load->view('templates/header', $data);

        $this->load->view('templates/sidebar', $data);
        $this->load->view('templates/topbar', $data);
        $this->load->view('film/sinopsis/turningred', $data);
        $this->load->view('templates/footer');
    }

    public function ngeringerisedap(){
        $data['judul'] = 'Sinopsis Film';
        $data['user'] = $this->ModelUser->cekData(['email' => $this->session->userdata('email')])->row_array();
        $data['anggota'] = $this->ModelUser->getUserLimit()->result_array();
        $this->load->view('templates/header', $data);

        $this->load->view('templates/sidebar', $data);
        $this->load->view('templates/topbar', $data);
        $this->load->view('film/sinopsis/ngeringerisedap', $data);
        $this->load->view('templates/footer');
    }

    public function everythingatonce(){
        $data['judul'] = 'Sinopsis Film';
        $data['user'] = $this->ModelUser->cekData(['email' => $this->session->userdata('email')])->row_array();
        $data['anggota'] = $this->ModelUser->getUserLimit()->result_array();
        $this->load->view('templates/header', $data);

        $this->load->view('templates/sidebar', $data);
        $this->load->view('templates/topbar', $data);
        $this->load->view('film/sinopsis/everythingatonce', $data);
        $this->load->view('templates/footer');
    }
}