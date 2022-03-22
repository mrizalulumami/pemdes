<?php

class M_Menu extends CI_Model
{
	
	public function tambah_rw($table_name, $data)
	{
		$this->db->insert($table_name, $data);
	}
	public function tambah_desa($table_name, $data)
	{
		$this->db->insert($table_name, $data);
	}
	public function tambah_kecamatan($table_name, $data)
	{
		$this->db->insert($table_name, $data);
	}

	public function menu_pembayaran()
	{
		$query = $this->db->query("SELECT * FROM menu_pembayaran");
		return $query->result_array();
	}
	public function data_rw()
	{
		$query = $this->db->query("SELECT * FROM form_rw");
		return $query->result_array();
	}
	public function data_kecamatan()
	{
		$query = $this->db->query("SELECT * FROM form_kecamatan");
		return $query->result_array();
	}
	public function data_desa()
	{
		$query = $this->db->query("SELECT * FROM form_desa");
		return $query->result_array();
	}
	public function data_kategori()
	{
		$query = $this->db->query("SELECT * FROM kategori");
		return $query->result_array();
	}

	public function hapus_data($table_name, $id)
	{
		$this->db->where('id', $id);
		$hapus = $this->db->delete($table_name);
		return $hapus;
	}
}