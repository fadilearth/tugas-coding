<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Barang extends CI_Controller {

	public function index()
	{
		$this->load->view('barang/index');
	}

	public function data_barang()
	{
		$data['data'] = $this->model_barang->ambil();
		$this->load->view('barang/data', $data);
	}

	public function tambah_barang()
	{
		$data['data'] = $this->model_jenis_barang->ambil();
		$this->load->view('barang/tambah', $data);
	}

	public function hapus_barang()
	{
		$id_barang = $this->input->post('id_barang');

		$data['data'] = $this->model_barang->detail($id_barang);
		$this->load->view('barang/hapus', $data);
	}

	public function edit_barang()
	{
		$id_barang = $this->input->post('id_barang');

		$data['data'] = $this->model_barang->detail($id_barang);
		$data['jenis_barang'] = $this->model_jenis_barang->ambil();
		$this->load->view('barang/edit', $data);
	}

	public function tambah()
	{
		$nama_barang 	 = $this->input->post('nama_barang');
		$stok 			 = $this->input->post('stok');
		$id_jenis_barang = $this->input->post('id_jenis_barang');

		$data = [
			'nama_barang' 	  => $nama_barang,
			'stok' 			  => $stok,
			'id_jenis_barang' => $id_jenis_barang
		];

		$this->model_barang->tambah($data);
	}

	public function hapus()
	{
		$id_barang = $this->input->post('id_barang');
		$this->model_barang->hapus($id_barang);
	}

	public function edit()
	{
		$id_barang 		 = $this->input->post('id_barang');
		$nama_barang 	 = $this->input->post('nama_barang');
		$stok 			 = $this->input->post('stok');
		$id_jenis_barang = $this->input->post('id_jenis_barang');

		$data = [
			'nama_barang' 	  => $nama_barang,
			'stok' 			  => $stok,
			'id_jenis_barang' => $id_jenis_barang
		];

		$this->model_barang->edit($id_barang,$data);
	}
}
