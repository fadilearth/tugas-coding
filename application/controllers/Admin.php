<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller {

	public function index()
	{
		$this->load->view('welcome_message');
	}

	public function data_pesanan()
	{
		$data['data'] = $this->model_admin->ambil_pesanan();
		$this->load->view('admin/pesanan', $data);
	}

	public function detail_pesanan()
	{
		$id_akun = $this->input->post('id');

		$data['data'] = $this->model_admin->detail_pesanan($id_akun);
		$this->load->view('admin/detail_pesanan', $data);
	}

	public function konfirmasi_pesanan()
	{
		$id_transaksi = $this->input->post('id');
		$data = ['status' => 'Sedang di kemas'];

		$this->model_admin->konfirmasi_pesanan($id_transaksi, $data);
	}
}
