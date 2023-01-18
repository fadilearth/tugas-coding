<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Model_admin extends CI_Model {

	public function ambil_pesanan()
	{
		$this->db->join('akun', 'akun.id_akun = transaksi.id_akun');
		$this->db->join('barang', 'barang.id_barang = transaksi.id_barang');
		$this->db->select('transaksi.*, count(transaksi.id_akun) as jumlah_beli');
		$this->db->select('akun.*');
		$this->db->select('barang.*');
		$this->db->group_by('transaksi.id_akun');
		$query = $this->db->get('transaksi');
		return $query->result();
	}

	public function detail_pesanan($id_akun)
	{
		$this->db->where('id_akun', $id_akun);
		$this->db->join('barang', 'barang.id_barang = transaksi.id_barang');
		$query = $this->db->get('transaksi');
		return $query->result();
	}

	public function konfirmasi_pesanan($id_transaksi, $data)
	{
		$this->db->where('id_transaksi', $id_transaksi);
		$query = $this->db->update('transaksi', $data);
		return $query;
	}
}
