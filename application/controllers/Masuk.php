<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Masuk extends CI_Controller {

	function __construct()
	{
		parent::__construct();
		$this->load->model('auth');
	}

	public function index()
	{
		$this->load->view('masuk');
	}

	public function proses()
	{
		$npm = $this->input->post('npm');
		$pw = $this->input->post('pw');
		if($this->auth->masuk($npm,$pw))
		{
			redirect('dasbor');
		}
		else
		{
			$this->session->set_flashdata('error','Username & Kata Sandi salah');
			redirect('masuk');
		}
	}

	public function logout()
	{
		$this->session->unset_userdata('npm');
		$this->session->unset_userdata('nama');
		$this->session->unset_userdata('is_login');
		redirect('welcome');
	}

	

}