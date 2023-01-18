<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Model_transaksi extends CI_Model {

	public function ambil_keranjang($id_akun)
	{
		$data = ['id_akun' => $id_akun, 'status' => 'Di keranjang'];

		$this->db->where($data);
		$this->db->join('barang', 'barang.id_barang = transaksi.id_barang');
		$query = $this->db->get('transaksi');
		return $query->result();
	}

	public function detail_keranjang($id_akun)
	{
		$data = ['id_akun' => $id_akun, 'status' => 'Di keranjang'];

		$this->db->where($data);
		$this->db->join('barang', 'barang.id_barang = transaksi.id_barang');
		$query = $this->db->get('transaksi');
		return $query->row();
	}

	public function hapus_keranjang($id_transaksi, $id_akun)
	{
		$data = [
			'id_transaksi' => $id_transaksi,
			'id_akun' => $id_akun, 
			'status' => 'Di keranjang'
		];

		$this->db->where($data);
		$query = $this->db->delete('transaksi');
		return $query;
	}

	public function pesan_barang($id_akun, $data_pesan_barang)
	{
		$where = ['id_akun' => $id_akun, 'status' => 'Di keranjang'];

		$this->db->where($where);
		$query = $this->db->update('transaksi', $data_pesan_barang);
		return $query;
	}

	public function pesanan_user($id_akun)
	{
		$this->db->where('id_akun', $id_akun);
		$this->db->join('barang', 'barang.id_barang = transaksi.id_barang');
		$query = $this->db->get('transaksi');
		return $query->result();
	}
}