<?php

class M_Pelanggan extends CI_Model{
	// var $db;
	var $table = "pelanggan";

	public function getDataPelanggan(){
		$query = $this->db->get('pelanggan');
		return $query->result();
	}

	public function report_excell($tahun){
		$query="SELECT `pembayaran`.*, `pelanggan`.`nama_pelanggan`
			FROM `pembayaran` JOIN `pelanggan`
			ON `pembayaran`.`id_pelanggan` = `pelanggan`.`id_pelanggan` where `pembayaran`.`tahun`='$tahun'";

		$hsl=$this->db->query($query)->result_array();
		return $hsl;
		
	}
	public function pelaporan(){
		$hsl=$this->db->query("SELECT * FROM laporan");
		return $hsl;
		
	}
	public function report_pdf($id_pembayaran){

		$query="SELECT `pembayaran`.*, `pelanggan`.`nama_pelanggan`
			FROM `pembayaran` JOIN `pelanggan`
			ON `pembayaran`.`id_pelanggan` = `pelanggan`.`id_pelanggan` where `pembayaran`.`id_pembayaran`='$id_pembayaran'";

		$hsl=$this->db->query($query)->result_array();
		return $hsl;
		
	}
	public function tampil_pelanggan($keyword){
		if(!$keyword == null){
			$hsl=$this->db->query("SELECT * FROM pelanggan WHERE id_pelanggan='$keyword' or nama_pelanggan='$keyword'");
		return $hsl;
		}else{
			$hsl=$this->db->query("SELECT * FROM pelanggan");
		return $hsl;
		}
		
	}
	public function tampil_pembayaran($id_pelanggan){

		if(!$id_pelanggan == null){
			$query="SELECT `pembayaran`.*, `pelanggan`.`nama_pelanggan`
			FROM `pembayaran` JOIN `pelanggan`
			ON `pembayaran`.`id_pelanggan` = `pelanggan`.`id_pelanggan` where `pembayaran`.`id_pelanggan`='$id_pelanggan' OR `pelanggan`.`id_pelanggan`='$id_pelanggan'";
		
			// $hsl=$this->db->query("SELECT * FROM pembayaran, pelanggan WHERE `pelanggan`.`id_pelanggan`=`pembayaran`.`id_pelanggan` OR `pelanggan`.`id_pelanggan`='$id_pelanggan' OR `pembayaran`.`id_pelanggan`='$id_pelanggan'");
			$hsl=$this->db->query($query);
			return $hsl;
		}else{
			$hsl=$this->db->query("SELECT * FROM pembayaran, pelanggan WHERE `pelanggan`.`id_pelanggan`=`pembayaran`.`id_pelanggan`");
			return $hsl;
		}
	}
    public function count_pelanggan(){
        $hasil=$this->db->count_all("pelanggan");
        return $hasil;
    }
    public function count_admin(){
        $hasil=$this->db->count_all("users");
        return $hasil;
    }

	public function simpan_pelanggan($table_name, $data)
    {
        $this->db->insert($table_name, $data);
    }
	
	public function hapus_data_pelanggan($table_name, $id)
	{
		$this->db->where('id_pelanggan', $id);
		$hapus = $this->db->delete($table_name);
		return $hapus;
	}
	public function buat_kode()   {

        $this->db->select('RIGHT(pelanggan.id_pelanggan,2) as kode', FALSE);
        $this->db->order_by('id_pelanggan','DESC');    
        $this->db->limit(1);    
        $query = $this->db->get('pelanggan');      //cek dulu apakah ada sudah ada kode di tabel.    
        if($query->num_rows() <> 0){      
         //jika kode ternyata sudah ada.      
         $data = $query->row();      
         $kode = intval($data->kode) + 1;    
        }
        else {      
         //jika kode belum ada      
         $kode = 1;    
        }

        $kodemax = str_pad($kode, 2, "0", STR_PAD_LEFT); // angka 4 menunjukkan jumlah digit angka 0
        $kodejadi = "PMD-".$kodemax;    // hasilnya ODJ-9921-0001 dst.
        return $kodejadi;  
  }

}
