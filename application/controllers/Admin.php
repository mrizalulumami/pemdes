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
	}

	public function index()
	{
		$data['title'] = 'dashboard';
		$data['j_pelanggan'] = $this->M_Pelanggan->count_pelanggan();
		$data['j_admin'] = $this->M_Pelanggan->count_admin();

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
		$data['pelanggan'] = $this->M_Pelanggan->tampil_pembayaran($id_pelanggan);

		$this->load->view('admin/partial/admin_header');
		$this->load->view('admin/partial/sidebar', $data);
		$this->load->view('admin/pembayaran', $data);
		$this->load->view('admin/partial/admin_footer');
	}
	public function data_pelanggan()
	{

		$titdata['title'] = 'data pelanggan';

		$keyword = $this->input->post('keyword');
		$data['pelanggan'] = $this->M_Pelanggan->tampil_pelanggan($keyword);
		
		$kdunik['kodeunik'] = $this->M_Pelanggan->buat_kode();

		$this->load->view('admin/partial/admin_header');
		$this->load->view('admin/partial/sidebar', $titdata);
		$this->load->view('admin/data_pelanggan', $data);
		$this->load->view('admin/partial/modal_tambah', $kdunik);
		$this->load->view('admin/partial/modal_edit', $kdunik);
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
		// $this->pdf->load_view('laporan_pdf', $data);
		$this->pdf->load_view('report/struk_pdf', $data);
	
	
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
		$sheet->setCellValue('F1', 'RT/RW');
		$sheet->setCellValue('G1', 'METER PERTAMA');
		$sheet->setCellValue('H1', 'TANGGAL pemasangan');
		$sheet->setCellValue('I1', 'TANGGAL pemasangan');

		$baris=2;
		$x=1;

		foreach ($data->result() as $d) {

			$sheet->setCellValue('A' .$baris,$x);
			$sheet->setCellValue('B' .$baris,$d->id_pelanggan);
			$sheet->setCellValue('C' .$baris,$d->nama_pelanggan);
			$sheet->setCellValue('D' .$baris,$d->desa.', '.$d->kecamatan);
			$sheet->setCellValue('E' .$baris,$d->kategori);
			$sheet->setCellValue('F' .$baris,$d->rt.', '.$d->rw);
			$sheet->setCellValue('G' .$baris,$d->meter_pertama.' kubik');
			$sheet->setCellValue('H' .$baris,$d->tggl_pemasangan);
			$sheet->setCellValue('I' .$baris,$d->tahun_pemasangan);

			$x++;
			$baris++;
		}

		

		$fileName= "Data-Pelanggan ".$tahun."/".date("d-m-Y-H-i-s");
		header('Content-Type: application/vnd.ms-excel');
		header('Content-Disposition: attachment;filename="'.$fileName.'"');

		$writer = new Xlsx($spreadsheet);
		$writer->save("php://output");
	}
	//function for data pembayaran
	public function export_excell2($tahun){

		$data= $this->M_Pelanggan->report_excell2($tahun);

		$spreadsheet = new Spreadsheet();
		$sheet = $spreadsheet->getActiveSheet();

		$sheet->setCellValue('A1', 'No');
		$sheet->setCellValue('B1', 'Nomor Kartu');
		$sheet->setCellValue('C1', 'Nama Pengguna');
		$sheet->setCellValue('D1', 'Alamat');
		$sheet->setCellValue('E1', 'Kategori');
		$sheet->setCellValue('F1', 'BEBAN PEMAKAIAN');
		$sheet->setCellValue('G1', 'TOTAL TAGIHAN');
		$sheet->setCellValue('H1', 'BAYAR');
		$sheet->setCellValue('I1', 'BULAN');
		$sheet->setCellValue('J1', 'TAHUN');

		$baris=2;
		$x=1;

		foreach ($data->result() as $d) {

			$sheet->setCellValue('A' .$baris,$x);
			$sheet->setCellValue('B' .$baris,$d->id_pelanggan);
			$sheet->setCellValue('C' .$baris,$d->nama_pelanggan);
			$sheet->setCellValue('D' .$baris,$d->desa.', '.$d->kecamatan);
			$sheet->setCellValue('E' .$baris,$d->kategori);
			$sheet->setCellValue('F' .$baris,$d->beban);
			$sheet->setCellValue('G' .$baris,$d->total_tagihan);
			$sheet->setCellValue('H' .$baris,$d->bayar);
			$sheet->setCellValue('I' .$baris,$d->bulan);
			$sheet->setCellValue('J' .$baris,$d->tahun);

			$x++;
			$baris++;
		}

		

		$fileName= "Data-Pembayaran ".$tahun."/".date("d-m-Y-H-i-s");
		header('Content-Type: application/vnd.ms-excel');
		header('Content-Disposition: attachment;filename="'.$fileName.'"');

		$writer = new Xlsx($spreadsheet);
		$writer->save("php://output");
	}
}
