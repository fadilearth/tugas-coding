<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Model_barang extends CI_Model {

	public function ambil()
	{
		$this->db->join('jenis_barang', 'jenis_barang.id_jenis_barang = barang.id_jenis_barang');
		$query = $this->db->get('barang');
		return $query->result();
	}

	public function tambah($data)
	{
		$query = $this->db->insert('barang', $data);
		return $query;
	}

	public function detail($id_barang)
	{
		$this->db->where('id_barang', $id_barang);
		$this->db->join('jenis_barang', 'jenis_barang.id_jenis_barang = barang.id_jenis_barang');
		$query = $this->db->get('barang');
		return $query->row();
	}

	public function hapus($id_barang)
	{
		$this->db->where('id_barang', $id_barang);
		$query = $this->db->delete('barang');
		return $query;
	}

	public function edit($id_barang, $data)
	{
		$this->db->where('id_barang', $id_barang);
		$query = $this->db->update('barang', $data);
		return $query;
	}
}
