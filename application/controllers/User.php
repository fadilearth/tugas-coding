<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User extends CI_Controller {

	public function index()
	{
		$data['data'] = $this->model_barang->ambil();
		$this->load->view('user/index', $data);
	}

	public function detail_barang()
	{
		$id_barang = $this->input->post('id_barang');

		$data['data'] = $this->model_barang->detail($id_barang);
		$this->load->view('user/detail_barang', $data);
	}

	public function bandingkan()
	{
		$key = $this->input->post('jenis_barang');

		$data['data'] = $this->model_user->bandingkan1($key);
		$this->load->view('user/bandingkan', $data);
	}
}
