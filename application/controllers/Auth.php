<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Auth extends CI_Controller {

	public function __construct()
    {
        parent::__construct();
        $this->load->library('form_validation');
    }
	public function index()
	{
        if ($this->session->userdata('username')) {
            redirect('admin');
        }
        $this->form_validation->set_rules('username', 'Username', 'trim|required');
        $this->form_validation->set_rules('password', 'Password', 'trim|required');

        if ($this->form_validation->run() == false) {
            $this->load->view('auth/partial/auth_header');
            $this->load->view('auth/index');
            $this->load->view('auth/partial/auth_footer');
        } else {
            //validasinya sukses
            $this->_login();
        }
		
	}
    private function _login()
    {

        $username = $this->input->post('username');
        $password = $this->input->post('password');

        $user = $this->db->get_where('users', ['username' => $username])->row_array();

        if ($user) {
            if ($user['is_active'] == 1) {
                if (password_verify($password, $user['password'])) {
                    $data = [
                        'username' => $user['username']
                    ];
                    $this->session->set_userdata($data);
                  
                    redirect('admin');
                } else {
                    $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Password Salah!</div>');

                    redirect('auth');
                }
                // redirect('admin');
            } else {
                $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Akun tidak aktif!</div>');
                redirect('auth');
            }
        } else {
            $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Akun tidak terdaftar!</div>');
            redirect('auth');
        }
    }
    public function registration()
    {
        if ($this->session->userdata('username')) {
            redirect('admin');
        }
        $this->form_validation->set_rules('nama_petugas', 'Nama_petugas', 'required|trim');
        $this->form_validation->set_rules('username', 'Username', 'required|trim|is_unique[users.username]', [
            'is_unique' => 'User ini sudah terdaftar'
        ]);
        $this->form_validation->set_rules('password1', 'Pasword', 'required|trim|min_length[3]|matches[password2]', [
            'matches' => 'password tidak sama!',
            'min_length' => 'password terlalu pendek!'
        ]);
        $this->form_validation->set_rules('password2', 'Pasword', 'required|trim|matches[password1]');
        if ($this->form_validation->run() == false) {
            $this->load->library('form_validation');
            $this->load->view('auth/partial/auth_header');
            $this->load->view('auth/register');
            $this->load->view('auth/partial/auth_footer');
        } else {
            $data = [
                'nama_petugas' => htmlspecialchars($this->input->post('nama_petugas', true)),
                'username' => htmlspecialchars($this->input->post('username', true)),
                'password' => password_hash($this->input->post('password1'), PASSWORD_DEFAULT),
                'is_active' => 1
            ];
            $this->db->insert('users', $data);
            $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Selamat Akun anda sudah dibuat,Silahkan Login!</div>');
            redirect('auth');
        }
    }
}
