<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Transaksi extends CI_Controller {

	public function keranjang()
	{
		$id_akun = $this->session->userdata('id_akun');
		$data['data'] = $this->model_transaksi->ambil_keranjang($id_akun);
		$this->load->view('user/transaksi/keranjang', $data);
	}

	public function tambah_ke_keranjang()
	{
		$id_akun 	 = $this->session->userdata('id_akun');
		$id_barang	 = $this->input->post('id_barang');
		$jumlah_beli = $this->input->post('jumlah_beli');

		$data = [
			'id_akun' 		 => $id_akun,
			'id_barang' 	 => $id_barang,
			'jumlah_terjual' => $jumlah_beli,
			'status' 		 => 'Di keranjang',
			'tgl_transaksi'  => date('d-m-y')
		];

		$barang = $this->model_transaksi->detail_keranjang($id_akun);

		if ($barang->id_barang == $id_barang) {
			echo "Barang ini sudah ada di keranjang";
		} else {
			$this->model_user->tambah_ke_keranjang($data);
		}
	}

	public function hapus_keranjang($id_transaksi)
	{
		$id_akun = $this->session->userdata('id_akun');
		$this->model_transaksi->hapus_keranjang($id_transaksi, $id_akun);

		redirect('transaksi/keranjang');
	}

	public function pesan_barang()
	{
		$id_akun = $this->session->userdata('id_akun');

		$data_pesan_barang = ['status' => 'Di pesan'];
		$this->model_transaksi->pesan_barang($id_akun, $data_pesan_barang);

		redirect('transaksi/keranjang');
	}

	public function pesanan_user()
	{
		$id_akun = $this->session->userdata('id_akun');
		$data['data'] = $this->model_transaksi->pesanan_user($id_akun);
		$this->load->view('user/transaksi/pesanan_user', $data);
	}
}
