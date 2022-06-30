<?php 
defined('BASEPATH') or exit('No direct script access allowed');

class Pesanfilm extends CI_Controller{
    public function __construct()
    {
        parent::__construct();
        cek_login();
    }
    
    public function index()
    {
        $data['judul'] = 'Pesan Tiket';
        $data['onepiece'] = 'Onepiece';
        $data['user'] = $this->ModelUser->cekData(['email' => $this->session->userdata('email')])->row_array();
        $data['anggota'] = $this->ModelUser->getUserLimit()->result_array();
        $data['namafilm'] = $this->ModelPesan->showfilm()->result_array();
        $data['namakamu'] = $this->ModelPesan->showuser()->result_array();
        $data['tanggalfilm'] = $this->ModelPesan->showtanggal()->result_array();
        $data['jamfilm'] = $this->ModelPesan->showjam()->result_array();
        $data['harga'] = $this->ModelPesan->showharga()->result_array();


        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('templates/topbar', $data);
        $this->load->view('film/pesan/pesantiket', $data);
        $this->load->view('templates/footer');
    }

    public function pembelian(){
        $this->form_validation->set_rules('nama', 'Nama', 'required',['required' => 'Nama harus diisi']);
        $this->form_validation->set_rules('judul_tiket','Judul Film', 'required', ['required' => 'Judul Film harus dipilih']);
        $this->form_validation->set_rules('tanggal_tiket', 'Tanggal Film', 'required', ['required' => 'Tanggal Film harus dipilih']);
        $this->form_validation->set_rules('jam_tiket','Jam Tayang','required', ['required' => 'jam tayang harus dipilih']);
        $this->form_validation->set_rules('harga_tiket','Harga','required', ['required' => 'harus dipilih']);

        if($this->form_validation->run()==false){
            $data['judul'] = 'Pesan Tiket';
        $data['onepiece'] = 'Onepiece';
        $data['user'] = $this->ModelUser->cekData(['email' => $this->session->userdata('email')])->row_array();
        $data['anggota'] = $this->ModelUser->getUserLimit()->result_array();
        $data['namafilm'] = $this->ModelPesan->showfilm()->result_array();
        $data['namakamu'] = $this->ModelPesan->showuser()->result_array();
        $data['tanggalfilm'] = $this->ModelPesan->showtanggal()->result_array();
        $data['jamfilm'] = $this->ModelPesan->showjam()->result_array();
        $data['harga'] = $this->ModelPesan->showharga()->result_array();
            
            $this->load->view('templates/header', $data);
            $this->load->view('templates/sidebar', $data);
            $this->load->view('templates/topbar', $data);
            $this->load->view('film/pesan/pesantiket', $data);
            $this->load->view('templates/footer');
        }else{
            $data=[
                'nama' => $this->input->post('nama', true),
                'judul_tiket' => $this->input->post('judul_tiket', true),
                'tanggal_tiket' => $this->input->post('tanggal_tiket', true),
                'jam_tiket' => $this->input->post('jam_tiket', true),
                'harga_tiket' => $this->input->post('harga_tiket', true)
            ];

            $this->ModelPesan->simpanfilm($data);

            $data['judul'] = 'Konfirmasi Pembelian';
            $data['user'] = $this->ModelUser->cekData(['email' => $this->session->userdata('email')])->row_array();
            $data['anggota'] = $this->ModelUser->getUserLimit()->result_array();
            $data['namafilm'] = $this->ModelPesan->showfilm()->result_array();
            $data['namakamu'] = $this->ModelPesan->showuser()->result_array();
            $data['tanggalfilm'] = $this->ModelPesan->showtanggal()->result_array();
            $data['jamfilm'] = $this->ModelPesan->showjam()->result_array();
            $data['harga'] = $this->ModelPesan->showharga()->result_array();
            $this->load->view('templates/header', $data);
            $this->load->view('templates/sidebar', $data);
            $this->load->view('templates/topbar', $data);
            $this->load->view('konfirmasi/konfirmasi_pembelian', $data);
            $this->load->view('templates/footer');


        }
    }
}