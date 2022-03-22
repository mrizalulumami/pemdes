<?php
defined('BASEPATH') or exit('No direct script access allowed');

require FCPATH.'vendor/autoload.php';

use PhpOffice\PhpSpreadsheet\Spreadsheet;
use PhpOffice\PhpSpreadsheet\Writer\Xlsx;

class Admin extends CI_Controller
{

	public function __construct()
	{
		parent::__construct();
		is_login();
		$this->load->library('form_validation');
		$this->load->model('M_Pelanggan');
		$this->load->model('M_Menu');
		$this->load->library('encryption');
	}

	public function index()
	{
		$data['title'] = 'dashboard';
		

		$data['j_pelanggan'] = $this->M_Pelanggan->count_pelanggan();
		$data['j_admin'] = $this->M_Pelanggan->count_admin();
		$data['pelanggan'] = $this->M_Pelanggan->tampil_bayar_index();
		$data['berkas1'] = $this->M_Pelanggan->count_berkas1();
		$data['berkas2'] = $this->M_Pelanggan->count_berkas2();
		$data['pelanggan_desa'] = $this->M_Pelanggan->hitung_data_pelanggan_berdasarkan_desa();

		$this->load->view('admin/partial/admin_header');
		$this->load->view('admin/partial/sidebar', $data);
		$this->load->view('admin/index', $data);
		$this->load->view('admin/partial/admin_footer');
	}
	public function pembayaran()
	{
		$data['title'] = 'pembayaran';


		$data['perkubik'] = 500;
		$id_pelanggan = $this->input->post('form_search');
		$tahun_search = $this->input->post('tahun-search');

		$data['pelanggan'] = $this->M_Pelanggan->tampil_pembayaran($id_pelanggan,$tahun_search);
		$data['pelanggan_woe'] = $this->M_Pelanggan->pelanggan_find();
		$data['tahun'] = $this->M_Pelanggan->tahun_pembayaran();
		$data['menu_we'] = $this->M_Menu->menu_pembayaran();

		$this->load->view('admin/partial/admin_header');
		$this->load->view('admin/partial/sidebar', $data);
		$this->load->view('admin/pembayaran', $data);
		$this->load->view('admin/partial/modal_pembayaran',$data);
		$this->load->view('admin/partial/modal_acc_bayar',$data);
		$this->load->view('admin/partial/modal_delete_pembayaran',$data);
		$this->load->view('admin/partial/admin_footer');
	}
	public function menu()
	{
		$data['title'] = 'menu';

		$data['menu_we'] = $this->M_Menu->menu_pembayaran();
		$data['menu_rw'] = $this->M_Menu->data_rw();
		$data['menu_kecamatan'] = $this->M_Menu->data_kecamatan();
		$data['menu_desa'] = $this->M_Menu->data_desa();
		$data['menu_ktg'] = $this->M_Menu->data_kategori();

		$this->load->view('admin/partial/admin_header');
		$this->load->view('admin/partial/sidebar', $data);
		$this->load->view('admin/partial/modal_delete_desa',$data);
		$this->load->view('admin/partial/modal_delete_kecamatan',$data);
		$this->load->view('admin/partial/modal_delete_rw',$data);
		$this->load->view('admin/partial/modal_edit_air',$data);
		$this->load->view('admin/partial/modal_edit_beban',$data);
		$this->load->view('admin/partial/modal_edit_pma',$data);
		$this->load->view('admin/partial/modal_edit_rw',$data);
		$this->load->view('admin/partial/modal_edit_desa',$data);
		$this->load->view('admin/partial/modal_edit_kecamatan',$data);
		$this->load->view('admin/partial/modal_tambah_rw',$data);
		$this->load->view('admin/partial/modal_tambah_desa',$data);
		$this->load->view('admin/partial/modal_tambah_kecamatan',$data);
		$this->load->view('admin/kelola_menu',$data);
		$this->load->view('admin/partial/admin_footer');
	}
	public function profile()
	{
		$data['title'] = 'profile';

		$data['user'] = $this->db->get_where('users', ['id_petugas' =>
        $this->session->userdata('id_petugas')])->result_array();
		// $password = $this->session->userdata('password');
		// $test[data] = $this->encryption->decrypt($password);

		$this->load->view('admin/partial/admin_header');
		$this->load->view('admin/partial/sidebar', $data);
		$this->load->view('admin/profile_admin',$data);
		$this->load->view('admin/partial/admin_footer');
	}
	public function data_pelanggan()
	{

		$titdata['title'] = 'data pelanggan';

		$keyword = $this->input->post('keyword');
		$data['pelanggan'] = $this->M_Pelanggan->tampil_pelanggan($keyword);
		
		$data['kodeunik'] = $this->M_Pelanggan->buat_kode();

		$data['menu_rw'] = $this->M_Menu->data_rw();
		$data['menu_kecamatan'] = $this->M_Menu->data_kecamatan();
		$data['menu_desa'] = $this->M_Menu->data_desa();
		$data['menu_ktg'] = $this->M_Menu->data_kategori();

		$this->load->view('admin/partial/admin_header');
		$this->load->view('admin/partial/sidebar', $titdata);
		$this->load->view('admin/data_pelanggan', $data);
		$this->load->view('admin/partial/modal_tambah', $data);
		$this->load->view('admin/partial/modal_edit', $data);
		$this->load->view('admin/partial/modal_delete');
		$this->load->view('admin/partial/pelanggan_footer');
	}
	public function pelaporan()
	{
		$data['title'] = 'pelaporan';

		$keyword = $this->input->post('keyword');

		$data['laporan_pelanggan'] = $this->M_Pelanggan->pelaporan_pelanggan($keyword);
		$data['laporan_pembayaran'] = $this->M_Pelanggan->pelaporan_pembayaran($keyword);

		$this->load->view('admin/partial/admin_header');
		$this->load->view('admin/partial/sidebar', $data);
		$this->load->view('admin/pelaporan',$data);
		$this->load->view('admin/partial/admin_footer');
		// var_dump($data);
	}
	
	public function printpdf($id_pembayaran){

		$data['title'] = 'Data Pembayaran';
		$data['perkubik'] = 500;

        $data['pdf_print'] = $this->M_Pelanggan->report_pdf($id_pembayaran);
	
		$this->load->library('pdf');

		$this->pdf->set_base_path("assets/");
	
		$this->pdf->setPaper('A4', 'potrait');
		$this->pdf->filename = "struk_pembayaran.pdf";
		$this->pdf->load_view('report/new_struck', $data);
		// $this->load->view('report/struk_pdf', $data);
	
	
	}

	public function pdf($id_pembayaran)
    {
        $this->load->library('dompdf_gen');

		$data['title'] = 'Data Pembayaran';
		$data['perkubik'] = 500;

        $data['pdf_print'] = $this->M_Pelanggan->report_pdf($id_pembayaran);

        // $this->load->view('laporan_pdf',$data);
		$this->load->view('report/new_struck', $data);

        $paper_size = 'A4';
        $orientation = 'landscape';
        $html        = $this->output->get_output();
        $this->dompdf->set_paper($paper_size,$orientation);

        $this->dompdf->load_html($html);
        $this->dompdf->render();
        $this->dompdf->stream("laporan_data_peminjam.pdf",array('Attachment' =>0));
    }
	//function for data pelanggan
	public function export_excell($tahun){

		// $data = $this->db->query("SELECT * FROM pembayaran WHERE tahun='$tahun'");
		$data= $this->M_Pelanggan->report_excell($tahun);

		$spreadsheet = new Spreadsheet();
		$sheet = $spreadsheet->getActiveSheet();

		$sheet->setCellValue('A1', 'No');
		$sheet->setCellValue('B1', 'Nomor Kartu');
		$sheet->setCellValue('C1', 'Nama Pengguna');
		$sheet->setCellValue('D1', 'Alamat');
		$sheet->setCellValue('E1', 'Kategori');
		$sheet->setCellValue('F1', 'RW');
		$sheet->setCellValue('G1', 'Tanggal Pemasangan');
		$sheet->setCellValue('H1', 'Tahun Pemasangan');

		$baris=2;
		$x=1;

		foreach ($data->result() as $d) {

			$sheet->setCellValue('A' .$baris,$x);
			$sheet->setCellValue('B' .$baris,$d->id_pelanggan);
			$sheet->setCellValue('C' .$baris,$d->nama_pelanggan);
			$sheet->setCellValue('D' .$baris,$d->desa.', '.$d->kecamatan);
			$sheet->setCellValue('E' .$baris,$d->kategori);
			$sheet->setCellValue('F' .$baris,$d->rw);
			$sheet->setCellValue('G' .$baris,$d->tggl_pemasangan);
			$sheet->setCellValue('H' .$baris,$d->tahun_pemasangan);

			$x++;
			$baris++;
		}

		

		$fileName= "Data Pelanggan ".$tahun." ".date("d-m-Y-H-i-s").".xls";
		header('Content-Type: application/vnd.ms-excel');
		header('Content-Disposition: attachment;filename="'.$fileName.'"');

		$writer = new Xlsx($spreadsheet);
		$writer->save("php://output");
	}
	//function for data pembayaran
	public function export_excell2($bulan){

		$data= $this->M_Pelanggan->report_excell2($bulan);

		$spreadsheet = new Spreadsheet();
		$sheet = $spreadsheet->getActiveSheet();

		$sheet->setCellValue('A2', 'Data Pembayaran Untuk Bulan '.$bulan);
		$sheet->setCellValue('A4', 'No');
		$sheet->setCellValue('B4', 'Nomor Pelanggan');
		$sheet->setCellValue('C4', 'Nama Pengguna');
		$sheet->setCellValue('D4', 'RW');
		$sheet->setCellValue('E4', 'Alamat');
		$sheet->setCellValue('F4', 'Kategori');
		$sheet->setCellValue('G4', 'Meter Awal');
		$sheet->setCellValue('H4', 'Meter Akhir');
		$sheet->setCellValue('I4', 'Beban Pemakaian');
		$sheet->setCellValue('J4', 'Total Tagihan');
		$sheet->setCellValue('K4', 'Dibayar');
		$sheet->setCellValue('L4', 'Bulan');
		$sheet->setCellValue('M4', 'Tahun');

		$baris=5;
		$x=1;

		foreach ($data->result() as $d) {

			$sheet->setCellValue('A' .$baris,$x);
			$sheet->setCellValue('B' .$baris,$d->id_pelanggan);
			$sheet->setCellValue('C' .$baris,$d->nama_pelanggan);
			$sheet->setCellValue('D' .$baris,$d->rw);
			$sheet->setCellValue('E' .$baris,$d->desa.', '.$d->kecamatan);
			$sheet->setCellValue('F' .$baris,$d->kategori);
			$sheet->setCellValue('G' .$baris,$d->meter_awal);
			$sheet->setCellValue('H' .$baris,$d->meter_akhir);
			$sheet->setCellValue('I' .$baris,$d->pemakaian);
			$sheet->setCellValue('J' .$baris,$d->total_tagihan);
			$sheet->setCellValue('K' .$baris,$d->bayar);
			$sheet->setCellValue('L' .$baris,$d->bulan);
			$sheet->setCellValue('M' .$baris,$d->tahun);

			$x++;
			$baris++;
		}

		

		$fileName= "Data Pembayaran Bulan ".$bulan." ".date("d-m-Y-H-i-s").".xls";
		header('Content-Type: application/vnd.ms-excel');
		header('Content-Disposition: attachment;filename="'.$fileName.'"');

		$writer = new Xlsx($spreadsheet);
		$writer->save("php://output");
	}
	public function acc_pembayaran(){
		
		$id_user = $this->session->userdata('id_petugas');

        $this->form_validation->set_rules('bayar_tagihan', 'Bayar tagihan', 'required|trim');

        if ($this->form_validation->run()) {
            $id_pembayaran = $_POST['id_pembayaran'];
            $bayar_tagihan = $_POST['bayar_tagihan'];

			// $id_pembayaran = $this->input->post('id_pembayaran');

            // $tambah = $this->Menu_model->tambahData('data_peminjam', $data);
            $this->db->set('bayar', $bayar_tagihan);
            $this->db->set('id_petugas', $id_user);
            $this->db->where('id_pembayaran', $id_pembayaran);
            $this->db->update('pembayaran');
            
            $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Data diupdate!</div>');
            redirect(base_url('admin/pembayaran'));
			// echo 'berhasil';
           
        }else{
            redirect('admin/pembayaran');
			// echo 'gagal';
        }
    }
}
