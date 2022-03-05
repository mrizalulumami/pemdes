<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pelanggan extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
        is_login();
        $this->load->library('form_validation');
        $this->load->model('M_Pelanggan');
    }

    public function index(){
        // $queryAllPelanggan = $this->M_Pelanggan->getDataPelanggan();
		// $DATA = array('queryAllPelanggan' => $queryAllPelanggan);
        // variable $kodeunik merujuk ke file model_user.php pada function buat_kode. paham kan ya? harus paham dong
        $data['kodeunik'] = $this->M_Pelanggan->buat_kode(); 

		$this->load->view('admin/partial/admin_header');
		$this->load->view('admin/partial/sidebar');
        $this->load->view('pelanggan/tambah_data_pelanggan', $data);
        $this->load->view('admin/partial/admin_footer');
    }

    // public function tambah_pelanggan(){

    //     $this->form_validation->set_rules('nama_pelanggan', 'Nama Lengkap', 'required|trim');
    //     $this->form_validation->set_rules('j_kelamin', 'Jenis Kelamin', 'required|trim');
    //     $this->form_validation->set_rules('desa', 'Desa', 'required|trim');
    //     $this->form_validation->set_rules('kecamatan', 'Kecamatan', 'required|trim');
    //     $this->form_validation->set_rules('rt', 'RT', 'required|trim');
    //     $this->form_validation->set_rules('rw', 'RW', 'required|trim');
    //     $this->form_validation->set_rules('kategori', 'Kategori', 'required|trim');
    //     $this->form_validation->set_rules('meter_pertama', 'Meter Pertama', 'required|trim');
    //     $this->form_validation->set_rules('tggl_pemasangan', 'Tanggal Pemasangan', 'required|trim');

    //     if($this->form_validation->run())
    //     {
    //         //add to database
    //         die("dead-1");
    //         if($this->members_model->addPost())
    //         {
    //             echo "Successfully made one entry will be validated";
    //         }
    //         else
    //         {
    //             echo "Error uploading the datas into database Please contact us about the problem";
    //         }
    //     }
    //     else
    //     {
    //         die("Form validation tidak berfungsi!");
    //     }
    // }

    public function tambah_pelanggan(){

       
        $this->form_validation->set_rules('nama_pelanggan', 'Nama Lengkap', 'required|trim');
        $this->form_validation->set_rules('j_kelamin', 'Jenis Kelamin', 'required|trim');
        $this->form_validation->set_rules('desa', 'Desa', 'required|trim');
        $this->form_validation->set_rules('kecamatan', 'Kecamatan', 'required|trim');
        $this->form_validation->set_rules('rt', 'RT', 'required|trim');
        $this->form_validation->set_rules('rw', 'RW', 'required|trim');
        $this->form_validation->set_rules('kategori', 'Kategori', 'required|trim');
        $this->form_validation->set_rules('meter_pertama', 'Meter Pertama', 'required|trim');
        $this->form_validation->set_rules('tggl_pemasangan', 'Tanggal Pemasangan', 'required|trim');

        if ($this->form_validation->run()) {
            $id_pelanggan = $_POST['id_pelanggan'];
            $nama_pelanggan = $_POST['nama_pelanggan'];
            $j_kelamin = $_POST['j_kelamin'];
            $desa = $_POST['desa'];
            $kecamatan = $_POST['kecamatan'];
            $rt = $_POST['rt'];
            $rw = $_POST['rw'];
            $kategori = $_POST['kategori'];
            $meter_pertama = $_POST['meter_pertama'];
            $tggl_pemasangan = $_POST['tggl_pemasangan'];

            // $nama_pelanggan = $this->input->post('nama_pelanggan');
            // $j_kelamin = $this->input->post('j_kelamin');
            // $desa = $this->input->post('desa');
            // $kecamatan = $this->input->post('kecamatan');
            // $rt = $this->input->post('rt');
            // $rw = $this->input->post('rw');
            // $kategori = $this->input->post('kategori');
            // $meter_pertama = $this->input->post('meter_pertama');
            // $tggl_pemasangan = $this->input->post('tggl_pemasangan');

            $data = array(
                'id_pelanggan' => $id_pelanggan,
                'nama_pelanggan' => $nama_pelanggan,
                'j_kelamin'	=> $j_kelamin,
                'desa' => $desa,
                'kecamatan'	=> $kecamatan,
                'rt'	=> $rt,
                'rw'	=> $rw,
                'kategori'	=> $kategori,
                'meter_pertama'	=> $meter_pertama,
                'tggl_pemasangan'	=> $tggl_pemasangan
            );

            // $tambah = $this->Menu_model->tambahData('data_peminjam', $data);
            $tambah = $this->M_Pelanggan->simpan_pelanggan('pelanggan',$data);
            
            $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Data Berhasil Ditambah!</div>');
            redirect(base_url('admin/data_pelanggan'));
           
        }else{
            redirect('admin/data_pelanggan');
        }

        // $this->M_Pelanggan->simpan_pelanggan($ArrInsert);
        // redirect(base_url('admin/data_pelanggan'));
    }
    public function delete_pelanggan($id)
    {
        $hapus = $this->M_Pelanggan->hapus_data_pelanggan('pelanggan', $id);
        if ($hapus > 0) {
            $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Data Berhasil Dihapus!</div>');
            redirect('admin/data_pelanggan');
        } else {
            echo 'Gagal menghapus !';
        }
    }
	public function edit_pelanggan($id)
	{
		$data['title'] = 'Edit Data Pelanggan';
        $data['user'] = $this->db->get_where('user', ['email' =>
        $this->session->userdata('email')])->row_array();

        $data['pelanggan'] = $this->db->get_where('pelanggan', ['id_pelanggan' =>
        $this->session->userdata('id_pelanggan')])->row_array();
		
		$this->form_validation->set_rules('nama_pelanggan', 'Nama Lengkap', 'required|trim');
        $this->form_validation->set_rules('j_kelamin', 'Jenis Kelamin', 'required|trim');
        $this->form_validation->set_rules('desa', 'Desa', 'required|trim');
        $this->form_validation->set_rules('kecamatan', 'Kecamatan', 'required|trim');
        $this->form_validation->set_rules('rt', 'RT', 'required|trim');
        $this->form_validation->set_rules('rw', 'RW', 'required|trim');
        $this->form_validation->set_rules('kategori', 'Kategori', 'required|trim');
        $this->form_validation->set_rules('meter_pertama', 'Meter Pertama', 'required|trim');
        $this->form_validation->set_rules('tggl_pemasangan', 'Tanggal Pemasangan', 'required|trim');

		if ($this->form_validation->run()) {
			$id_pelanggan = $this->input->post('id_pelanggan');
            $nama_pelanggan = $this->input->post('nama_pelanggan');
            $j_kelamin = $this->input->post('j_kelamin');
            $desa = $this->input->post('desa');
            $kecamatan = $this->input->post('kecamatan');
            $rt = $this->input->post('rt');
            $rw = $this->input->post('rw');
            $kategori = $this->input->post('kategori');
            $meter_pertama = $this->input->post('meter_pertama');
            $tggl_pemasangan = $this->input->post('tggl_pemasangan');

			$this->db->set('id_pelanggan', $id_pelanggan);
			$this->db->set('nama_pelanggan', $nama_pelanggan);
			$this->db->set('j_kelamin', $j_kelamin);
			$this->db->set('desa', $desa);
			$this->db->set('Kecamatan', $kecamatan);
			$this->db->set('rt', $rt);
			$this->db->set('rw', $rw);
			$this->db->set('Kategori', $kategori);
			$this->db->set('meter_pertama', $meter_pertama);
			$this->db->set('tggl_pemasangan', $tggl_pemasangan);

			$this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Data Berhasil Diubah!</div>');
            redirect('admin/data_pelanggan');
		} else {
            echo 'Gagal diubah !';
        }
	}
}
