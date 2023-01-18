<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Model_auth extends CI_Model {

	public function buat($data)
	{
		$query = $this->db->insert('akun', $data);
		return $query;
	}

	public function detail($user)
	{
		$this->db->where('username', $user);
		$query = $this->db->get('akun');
		return $query->row();
	}
}
