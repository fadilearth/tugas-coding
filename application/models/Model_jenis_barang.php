<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Model_Jenis_barang extends CI_Model {

	public function ambil()
	{
		$query = $this->db->get('jenis_barang');
		return $query->result();
	}

	public function detail($id_jenis_barang)
	{
		$this->db->where('id_jenis_barang', $id_jenis_barang);
		$query = $this->db->get('jenis_barang');
		return $query->row();
	}

	public function tambah($data)
	{
		$query = $this->db->insert('jenis_barang', $data);
		return $query;
	}

	public function hapus($id_jenis_barang)
	{
		$this->db->where('id_jenis_barang', $id_jenis_barang);
		$query = $this->db->delete('jenis_barang');
		return $query;
	}

	public function edit($id_jenis_barang, $data)
	{
		$this->db->where('id_jenis_barang', $id_jenis_barang);
		$query = $this->db->update('jenis_barang', $data);
		return $query;
	}
}
