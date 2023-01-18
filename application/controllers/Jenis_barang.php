<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Jenis_barang extends CI_Controller {

	public function index()
	{
		$this->load->view('barang/jenis_barang/index');
	}

	public function data_jenis_barang()
	{
		$data['data'] = $this->model_jenis_barang->ambil();
		$this->load->view('barang/jenis_barang/data', $data);
	}

	public function tambah_jenis_barang()
	{
		$this->load->view('barang/jenis_barang/tambah');
	}

	public function hapus_jenis_barang()
	{
		$id_jenis_barang = $this->input->post('id_jenis_barang');

		$data['data'] = $this->model_jenis_barang->detail($id_jenis_barang);
		$this->load->view('barang/jenis_barang/hapus', $data);
	}

	public function edit_jenis_barang()
	{
		$id_jenis_barang = $this->input->post('id_jenis_barang');

		$data['data'] = $this->model_jenis_barang->detail($id_jenis_barang);
		$this->load->view('barang/jenis_barang/edit', $data);
	}

	public function tambah()
	{
		$jenis_barang = $this->input->post('jenis_barang');

		$data = ['jenis_barang' => $jenis_barang];
		$this->model_jenis_barang->tambah($data);
	}

	public function hapus()
	{
		$id_jenis_barang = $this->input->post('id_jenis_barang');
		$this->model_jenis_barang->hapus($id_jenis_barang);
	}

	public function edit()
	{
		$id_jenis_barang = $this->input->post('id_jenis_barang');
		$jenis_barang 	 = $this->input->post('jenis_barang');

		$data = ['jenis_barang' => $jenis_barang];
		$this->model_jenis_barang->edit($id_jenis_barang,$data);
	}
}
