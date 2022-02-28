<?php

class M_Pelanggan extends CI_Model{
	// var $db;
	var $table = "pelanggan";

	public function getDataPelanggan(){
		$query = $this->db->get('pelanggan');
		return $query->result();
	}

	public function tampil_pelanggan(){
		$hsl=$this->db->query("SELECT id_pelanggan,nama_pelanggan,kategori FROM pelanggan");
		return $hsl;
	}

	public function simpan_pelanggan($table_name, $data)
    {
        $this->db->insert($table_name, $data);
    }
	// public function simpan_pelanggan($table_name, $data)
    // {
    //     $tambah = $this->db->insert($table_name, $data);
    //     return $tambah;
    // }
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
