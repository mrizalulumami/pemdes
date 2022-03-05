<?php
defined('BASEPATH') or exit('No direct script access allowed');

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

		$data['laporan'] = $this->M_Pelanggan->pelaporan();

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

	public function export_excell($tahun)
	{
		$data['report'] = $this->M_Pelanggan->report_excell($tahun);

		require(APPPATH. 'PHPExcel-1.8/Classes/PHPExcel.php');
		require(APPPATH. 'PHPExcel-1.8/Classes/PHPExcel/Writer/Excel2007.php');

		$objPHPExcel = new PHPExcell();

		$objPHPExcel->getProperties()->setCreator("pamdes");
		$objPHPExcel->getProperties()->setLastModifiedBy("pamdes");
		$objPHPExcel->getProperties()->setTitle("reporting");
		$objPHPExcel->getProperties()->setSubject("");
		$objPHPExcel->getProperties()->setDescription("");

		$objPHPExcel->setActiveSheetIndex(0);

		$objPHPExcel->getActiveSheet()->setCellValue('A1','No');
		$objPHPExcel->getActiveSheet()->setCellValue('B1','Nomor Kartu');
		$objPHPExcel->getActiveSheet()->setCellValue('C1','Nama Pengguna');
		$objPHPExcel->getActiveSheet()->setCellValue('D1','Alamat');
		$objPHPExcel->getActiveSheet()->setCellValue('E1','Kategori');
		$objPHPExcel->getActiveSheet()->setCellValue('F1','RT');

		$baris=2;
		$x=1;

		foreach ($data['report'] as $data) {
			$objPHPExcel->getActiveSheet()->setCellValue('A'.$baris,$x);
			$objPHPExcel->getActiveSheet()->setCellValue('B'.$baris,$data->$id_pelanggan);
			$objPHPExcel->getActiveSheet()->setCellValue('C'.$baris,$data->$nama_pelanggan);
			$objPHPExcel->getActiveSheet()->setCellValue('D'.$baris,$data->$alamat);
			$objPHPExcel->getActiveSheet()->setCellValue('E'.$baris,$data->$kategori);
			$objPHPExcel->getActiveSheet()->setCellValue('F'.$baris,$data->$rt);

			$x++;
			$baris++;
		}

		$fileName= "Data-Pelanggan".date("d-m-Y-H-i-s").'xlsx';

		$objPHPExcel->getActiveSheet()->setTitle("Data Pelanggan");

		header('Content-Type: application/vnd.openxmlformats-officedocument.spreadsheetml.sheet');
		header('Content-Disposition: attachment;filename"'.$fileName.'"');
		header('Cache-Control: max-age-0');

		$writer=PHPExcel_IOFactory::createWriter($objPHPExcel,'Excel2007');
		$writer->save('php://output');

		exit;

		// $this->load->view('admin/partial/admin_header');
		// $this->load->view('admin/partial/sidebar', $data);
		// $this->load->view('admin/pelaporan',$data);
		// $this->load->view('admin/partial/admin_footer');
	}
}
