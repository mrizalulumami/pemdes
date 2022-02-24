<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller {

	public function __construct()
    {
        parent::__construct();
        $this->load->library('form_validation');
    }

    public function index(){
        $this->load->view('admin/partial/admin_header');
        $this->load->view('admin/partial/sidebar');
        $this->load->view('admin/index');
        $this->load->view('admin/partial/admin_footer');
    }
    public function pembayaran(){
        $this->load->view('admin/partial/admin_header');
        $this->load->view('admin/partial/sidebar');
        $this->load->view('admin/pembayaran');
        $this->load->view('admin/partial/admin_footer');
    }
    public function data_pelanggan(){
        $this->load->view('admin/partial/admin_header');
        $this->load->view('admin/partial/sidebar');
        $this->load->view('admin/data_pelanggan');
        $this->load->view('admin/partial/pelanggan_footer');
    }
    public function pelaporan(){
        $this->load->view('admin/partial/admin_header');
        $this->load->view('admin/partial/sidebar');
        $this->load->view('admin/pelaporan');
        $this->load->view('admin/partial/admin_footer');
    }
}