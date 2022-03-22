<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Menu extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
        is_login();
        $this->load->library('form_validation');
        $this->load->model('M_Menu');
        $this->load->library('encryption');
    }
    public function tambah_rwnya(){

       
        $this->form_validation->set_rules('rw', 'RW', 'required|trim');

        if ($this->form_validation->run()) {
            $alamat = $_POST['rw'];

            $data = array(
                'alamat' => $alamat
            );

            $this->M_Menu->tambah_rw('form_rw',$data);
            
            $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Data Berhasil Ditambah!</div>');
            redirect(base_url('admin/menu'));
           
        }else{
            redirect('admin/menu');
        }
    }
    public function tambah_desanya(){

       
        $this->form_validation->set_rules('desa', 'Desa', 'required|trim');

        if ($this->form_validation->run()) {
            $desa = $_POST['desa'];

            $data = array(
                'desa' => $desa
            );

            $this->M_Menu->tambah_desa('form_desa',$data);
            
            $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Data Berhasil Ditambah!</div>');
            redirect(base_url('admin/menu'));
           
        }else{
            redirect('admin/menu');
        }
    }
    public function tambah_kecamatanya(){

       
        $this->form_validation->set_rules('kecamatan', 'Kecamatan', 'required|trim');

        if ($this->form_validation->run()) {
            $kecamatan = $_POST['kecamatan'];

            $data = array(
                'kecamatan' => $kecamatan
            );

            $this->M_Menu->tambah_kecamatan('form_kecamatan',$data);
            
            $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Data Berhasil Ditambah!</div>');
            redirect(base_url('admin/menu'));
           
        }else{
            redirect('admin/menu');
        }
    }
    public function edit_harga_air(){

        $this->form_validation->set_rules('harga', 'Harga', 'required|trim');

        if ($this->form_validation->run()) {
            $harga = $_POST['harga'];
            $id = $_POST['id'];

            // $tambah = $this->Menu_model->tambahData('data_peminjam', $data);
         
            $this->db->set('harga_air', $harga);
            $this->db->where('id', $id);
            $this->db->update('menu_pembayaran');
            
            $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Data Berhasil Diubah!</div>');
            redirect(base_url('admin/menu'));
           
        }else{
            redirect('admin/menu');
        }
    }
    public function edit_pma(){

        $this->form_validation->set_rules('pma', 'PMA', 'required|trim');

        if ($this->form_validation->run()) {
            $pma = $_POST['pma'];
            $id = $_POST['id'];

            // $tambah = $this->Menu_model->tambahData('data_peminjam', $data);
         
            $this->db->set('pma', $pma);
            $this->db->where('id', $id);
            $this->db->update('menu_pembayaran');
            
            $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Data Berhasil Diubah!</div>');
            redirect(base_url('admin/menu'));
           
        }else{
            redirect('admin/menu');
        }
    }
    public function edit_beban(){

        $this->form_validation->set_rules('beban', 'Beban', 'required|trim');

        if ($this->form_validation->run()) {
            $beban = $_POST['beban'];
            $id = $_POST['id'];

            // $tambah = $this->Menu_model->tambahData('data_peminjam', $data);
         
            $this->db->set('beban', $beban);
            $this->db->where('id', $id);
            $this->db->update('menu_pembayaran');
            
            $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Data Berhasil Diubah!</div>');
            redirect(base_url('admin/menu'));
           
        }else{
            redirect('admin/menu');
        }
    }
    public function edit_rw(){

        $this->form_validation->set_rules('rw', 'RW', 'required|trim');

        if ($this->form_validation->run()) {
            $rw = $_POST['rw'];
            $id = $_POST['id'];

            // $tambah = $this->Menu_model->tambahData('data_peminjam', $data);
         
            $this->db->set('alamat', $rw);
            $this->db->where('id', $id);
            $this->db->update('form_rw');
            
            $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Data Berhasil Diubah!</div>');
            redirect(base_url('admin/menu'));
           
        }else{
            redirect('admin/menu');
        }
    }
    public function edit_desa(){

        $this->form_validation->set_rules('desa', 'Desa', 'required|trim');

        if ($this->form_validation->run()) {
            $desa = $_POST['desa'];
            $id = $_POST['id'];

            // $tambah = $this->Menu_model->tambahData('data_peminjam', $data);
         
            $this->db->set('desa', $desa);
            $this->db->where('id', $id);
            $this->db->update('form_desa');
            
            $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Data Berhasil Diubah!</div>');
            redirect(base_url('admin/menu'));
           
        }else{
            redirect('admin/menu');
        }
    }
    public function edit_kecamatan(){

        $this->form_validation->set_rules('kecamatan', 'Kecamatan', 'required|trim');

        if ($this->form_validation->run()) {
            $kecamatan = $_POST['kecamatan'];
            $id = $_POST['id'];

            // $tambah = $this->Menu_model->tambahData('data_peminjam', $data);
         
            $this->db->set('kecamatan', $kecamatan);
            $this->db->where('id', $id);
            $this->db->update('form_kecamatan');
            
            $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Data Berhasil Diubah!</div>');
            redirect(base_url('admin/menu'));
           
        }else{
            redirect('admin/menu');
        }
    }
    public function delete_rw($id)
	{
		$hapus = $this->M_Menu->hapus_data('form_rw', $id);
		if ($hapus > 0) {
			$this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Data Berhasil Dihapus!</div>');
			redirect('admin/menu');
		} else {
			echo 'Gagal menghapus !';
		}
	}
    public function delete_desa($id)
	{
		$hapus = $this->M_Menu->hapus_data('form_desa', $id);
		if ($hapus > 0) {
			$this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Data Berhasil Dihapus!</div>');
			redirect('admin/menu');
		} else {
			echo 'Gagal menghapus !';
		}
	}
    public function delete_kecamatan($id)
	{
		$hapus = $this->M_Menu->hapus_data('form_kecamatan', $id);
		if ($hapus > 0) {
			$this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Data Berhasil Dihapus!</div>');
			redirect('admin/menu');
		} else {
			echo 'Gagal menghapus !';
		}
	}

    public function tester(){

        $encrypted_password = '2y$10$neBEvKpL4Xk9OM5jd0UvHuKqggei8mpzce7cLXPVxkmGQ7Wqz.Dri';

        $test = $this->encryption->decrypt($encrypted_password);
        echo $test;
        die;
    }
}
