<?php

class M_Users extends CI_Model
{
	

	public function data_users()
	{
		$query = $this->db->query("SELECT * FROM menu_pembayaran");
		return $query->result_array();
	}
}