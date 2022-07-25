<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Modul3 extends CI_Controller {

	public function index()
	{
		$this->load->view('modul3');
	}

    public function modul4()
	{
		$data['nama'] = $this->input->post('nama');
		$data['username'] = $this->input->post('username');
		$data['password'] = $this->input->post('password');
		$data['jk'] = $this->input->post('jk');
		$data['ttl'] = $this->input->post('ttl');
		$data['minat'] = $this->input->post('minat');
		$data['email'] = $this->input->post('email');
		$data['alamat'] = $this->input->post('alamat');
		$this->load->view('modul4');
	}
}
