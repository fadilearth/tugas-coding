<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Auth extends CI_Controller {

	public function index()
	{
		$this->form_validation->set_rules('user', 'Username', 'required');
		$this->form_validation->set_rules('pass', 'Password', 'required');

		if ($this->form_validation->run() == false) {
			$this->load->view('auth/login');
		} else {
			$this->_login();
		}
	}

	private function _login(){
		$user = $this->input->post('user');
		$pass = $this->input->post('pass');

		$data = $this->model_auth->detail($user);

		$data_session = ['id_akun' => $data->id_akun];

		if ($data) {
			if ($data->password == $pass) {
				if ($data->role == 'user') {
					$this->session->set_userdata($data_session);
					redirect('user');
				} else {
					redirect('barang');
				}
			} else {
				echo "Password Salah";
			}
		} else {
			echo "Username Tidak Ada";
		}
	}

	public function buat_akun()
	{
		$this->form_validation->set_rules('nama', 'Nama Lengkap', 'required');
		$this->form_validation->set_rules('user', 'Username', 'required');
		$this->form_validation->set_rules('pass', 'Password', 'required');

		if ($this->form_validation->run() == false) {
			$this->load->view('auth/buat_akun');
		} else {
			$nama = $this->input->post('nama');
			$user = $this->input->post('user');
			$pass = $this->input->post('pass');

			$data = [
				'nama_lengkap' => $nama,
				'username'	   => $user,
				'password' 	   => $pass,
				'role'		   => 'user'
			];

			$this->model_auth->buat($data);
			echo "Berhasil";
		}
	}
}
