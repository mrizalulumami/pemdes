<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller {

	public function __construct()
    {
        parent::__construct();
        $this->load->library('form_validation');
        $this->load->model('M_Pelanggan');
    }

    public function index(){
        $data['title'] = 'dashboard';

        $this->load->view('admin/partial/admin_header');
        $this->load->view('admin/partial/sidebar',$data);
        $this->load->view('admin/index');
        $this->load->view('admin/partial/admin_footer');
    }
    public function pembayaran(){
        $data['title'] = 'pembayaran';

        $this->load->view('admin/partial/admin_header');
        $this->load->view('admin/partial/sidebar',$data);
        $this->load->view('admin/pembayaran');
        $this->load->view('admin/partial/admin_footer');
    }
    public function data_pelanggan(){

        $titdata['title'] = 'data pelanggan';
        
        $data ['pelanggan'] = $this->M_Pelanggan->tampil_pelanggan();
        $kdunik['kodeunik'] = $this->M_Pelanggan->buat_kode(); 

        $this->load->view('admin/partial/admin_header');
        $this->load->view('admin/partial/sidebar',$titdata);
        $this->load->view('admin/data_pelanggan',$data);
        $this->load->view('admin/partial/modal_tambah',$kdunik);
        $this->load->view('admin/partial/pelanggan_footer');
    }
    public function pelaporan(){
        $data['title'] = 'pelaporan';

        $this->load->view('admin/partial/admin_header');
        $this->load->view('admin/partial/sidebar',$data);
        $this->load->view('admin/pelaporan');
        $this->load->view('admin/partial/admin_footer');
    }
}