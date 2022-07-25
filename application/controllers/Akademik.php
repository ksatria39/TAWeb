<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Akademik extends CI_Controller {

    public function index()
	{
		
	}

    public function daftar()
	{
		$this->load->view('daftar');
	}

    public function prodi()
	{
		$this->load->view('prodi');
	}

    public function kalender()
	{
		$this->load->view('kalender');
	}
}
