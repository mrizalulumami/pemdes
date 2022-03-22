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

    public function tambah_beban(){

       
        $this->form_validation->set_rules('id_pelanggan', 'ID pelanggan', 'required|trim');
        $this->form_validation->set_rules('bulan', 'Bulan', 'required|trim');
        // $this->form_validation->set_rules('meter_awal', 'Meter awal', 'required|trim');
        $this->form_validation->set_rules('meter_akhir', 'Meter akhir', 'required|trim');
        $this->form_validation->set_rules('pemakaian', 'Pemakaian', 'required|trim');
        $this->form_validation->set_rules('total_tagihan', 'Total tagihan', 'required|trim');
        $this->form_validation->set_rules('tahun', 'Tahun', 'required|trim');

        if ($this->form_validation->run()) {
            $id_pelanggan = $_POST['id_pelanggan'];
            $bulan = $_POST['bulan'];
            $meter_awal = $_POST['meter_awal'];
            $meter_akhir = $_POST['meter_akhir'];
            $pemakaian = $_POST['pemakaian'];
            $total_tagihan = $_POST['total_tagihan'];
            $tahun = $_POST['tahun'];

            $data = array(
                'id_pelanggan' => $id_pelanggan,
                'bulan' => $bulan,
                'meter_awal' => $meter_awal,
                'meter_akhir' => $meter_akhir,
                'pemakaian'	=> $pemakaian,
                'total_tagihan' => $total_tagihan,
                'tahun'	=> $tahun
            );

            $tambah = $this->M_Pelanggan->tambah_bebanya('pembayaran',$data);
            
            $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Data Berhasil Ditambah!</div>');
            redirect(base_url('admin/pembayaran'));
           
        }else{
            // redirect('admin/pembayaran');
            echo 'gagal';
        }
    }
    public function tambah_pelanggan(){

       
        $this->form_validation->set_rules('nama_pelanggan', 'Nama Lengkap', 'required|trim');
        $this->form_validation->set_rules('j_kelamin', 'Jenis Kelamin', 'required|trim');
        $this->form_validation->set_rules('desa', 'Desa', 'required|trim');
        $this->form_validation->set_rules('kecamatan', 'Kecamatan', 'required|trim');
        $this->form_validation->set_rules('rw', 'RW', 'required|trim');
        $this->form_validation->set_rules('kategori', 'Kategori', 'required|trim');
        $this->form_validation->set_rules('tggl_pemasangan', 'Tanggal Pemasangan', 'required|trim');

        if ($this->form_validation->run()) {
            $id_pelanggan = $_POST['id_pelanggan'];
            $nama_pelanggan = $_POST['nama_pelanggan'];
            $j_kelamin = $_POST['j_kelamin'];
            $desa = $_POST['desa'];
            $kecamatan = $_POST['kecamatan'];
            $rw = $_POST['rw'];
            $kategori = $_POST['kategori'];
            $tggl_pemasangan = $_POST['tggl_pemasangan'];

            $data = array(
                'id_pelanggan' => $id_pelanggan,
                'nama_pelanggan' => $nama_pelanggan,
                'j_kelamin'	=> $j_kelamin,
                'desa' => $desa,
                'kecamatan'	=> $kecamatan,
                'rw'	=> $rw,
                'kategori'	=> $kategori,
                'tggl_pemasangan'	=> $tggl_pemasangan
            );

            $tambah = $this->M_Pelanggan->simpan_pelanggan('pelanggan',$data);
            
            $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Data Berhasil Ditambah!</div>');
            redirect(base_url('admin/data_pelanggan'));
           
        }else{
            redirect('admin/data_pelanggan');
        }
    }

    public function edit_pelanggan(){

       
        $this->form_validation->set_rules('nama_pelanggan', 'Nama Lengkap', 'required|trim');
        $this->form_validation->set_rules('desa', 'Desa', 'required|trim');
        $this->form_validation->set_rules('kecamatan', 'Kecamatan', 'required|trim');
        $this->form_validation->set_rules('rw', 'RW', 'required|trim');
        $this->form_validation->set_rules('tggl_pemasangan', 'Tanggal Pemasangan', 'required|trim');

        if ($this->form_validation->run()) {
            $id_pelanggan = $_POST['id_pelanggan'];
            $nama_pelanggan = $_POST['nama_pelanggan'];
            $desa = $_POST['desa'];
            $kecamatan = $_POST['kecamatan'];
            $rw = $_POST['rw'];
            $tggl_pemasangan = $_POST['tggl_pemasangan'];

            // $tambah = $this->Menu_model->tambahData('data_peminjam', $data);
            $this->db->set('nama_pelanggan', $nama_pelanggan);
            $this->db->set('desa', $desa);
            $this->db->set('kecamatan', $kecamatan);
            $this->db->set('rw', $rw);
            $this->db->set('tggl_pemasangan', $tggl_pemasangan);
            $this->db->where('id_pelanggan', $id_pelanggan);
            $this->db->update('pelanggan');
            
            $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Data Berhasil Diubah!</div>');
            redirect(base_url('admin/data_pelanggan'));
           
        }else{
            redirect('admin/data_pelanggan');
        }
    }
    public function delete_pembayaran($id)
	{
		$hapus = $this->M_Pelanggan->hapus_data_pembayaran('pembayaran', $id);
		if ($hapus > 0) {
			$this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Data Berhasil Dihapus!</div>');
			redirect('admin/pembayaran');
		} else {
			echo 'Gagal menghapus !';
		}
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
	// public function edit_pelanggan($id)
	// {
	// 	$data['title'] = 'Edit Data Pelanggan';
    //     $data['user'] = $this->db->get_where('user', ['email' =>
    //     $this->session->userdata('email')])->row_array();

    //     $data['pelanggan'] = $this->db->get_where('pelanggan', ['id_pelanggan' =>
    //     $this->session->userdata('id_pelanggan')])->row_array();
		
	// 	$this->form_validation->set_rules('nama_pelanggan', 'Nama Lengkap', 'required|trim');
    //     $this->form_validation->set_rules('j_kelamin', 'Jenis Kelamin', 'required|trim');
    //     $this->form_validation->set_rules('desa', 'Desa', 'required|trim');
    //     $this->form_validation->set_rules('kecamatan', 'Kecamatan', 'required|trim');
    //     $this->form_validation->set_rules('rt', 'RT', 'required|trim');
    //     $this->form_validation->set_rules('rw', 'RW', 'required|trim');
    //     $this->form_validation->set_rules('kategori', 'Kategori', 'required|trim');
    //     $this->form_validation->set_rules('meter_pertama', 'Meter Pertama', 'required|trim');
    //     $this->form_validation->set_rules('tggl_pemasangan', 'Tanggal Pemasangan', 'required|trim');

	// 	if ($this->form_validation->run()) {
	// 		$id_pelanggan = $this->input->post('id_pelanggan');
    //         $nama_pelanggan = $this->input->post('nama_pelanggan');
    //         $j_kelamin = $this->input->post('j_kelamin');
    //         $desa = $this->input->post('desa');
    //         $kecamatan = $this->input->post('kecamatan');
    //         $rt = $this->input->post('rt');
    //         $rw = $this->input->post('rw');
    //         $kategori = $this->input->post('kategori');
    //         $meter_pertama = $this->input->post('meter_pertama');
    //         $tggl_pemasangan = $this->input->post('tggl_pemasangan');

	// 		$this->db->set('id_pelanggan', $id_pelanggan);
	// 		$this->db->set('nama_pelanggan', $nama_pelanggan);
	// 		$this->db->set('j_kelamin', $j_kelamin);
	// 		$this->db->set('desa', $desa);
	// 		$this->db->set('Kecamatan', $kecamatan);
	// 		$this->db->set('rt', $rt);
	// 		$this->db->set('rw', $rw);
	// 		$this->db->set('Kategori', $kategori);
	// 		$this->db->set('meter_pertama', $meter_pertama);
	// 		$this->db->set('tggl_pemasangan', $tggl_pemasangan);

	// 		$this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Data Berhasil Diubah!</div>');
    //         redirect('admin/data_pelanggan');
	// 	} else {
    //         echo 'Gagal diubah !';
    //     }
	// }
}
