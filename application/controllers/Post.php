<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Post extends CI_Controller {

    public function index()
	{
		
	}

    public function post1()
	{
		$this->load->view('post1');
	}

    public function post2()
	{
		$this->load->view('post2');
	}

    public function post3()
	{
		$this->load->view('post3');
	}
}
