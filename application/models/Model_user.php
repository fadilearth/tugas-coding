<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Model_user extends CI_Model {

	public function tambah_ke_keranjang($data)
	{
		$query = $this->db->insert('transaksi', $data);
		return $query;
	}

	public function bandingkan1($key)
	{
		$this->db->like('id_transaksi', $key);
		$this->db->or_like('id_akun', $key);
		$query = $this->db->get('transaksi');
		return $query->result();
	}
}
