<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Daftar extends CI_Controller {

	function __construct()
	{
		parent::__construct();
		$this->load->model('auth');
	}

	public function index()
	{
		$this->load->view('daftar');
	}

	public function proses()
	{
		$this->form_validation->set_rules('nisn', 'nisn','trim|required|min_length[1]|max_length[255]|is_unique[mahasiswa.nisn]');
		$this->form_validation->set_rules('pw', 'pw','trim|required|min_length[1]|max_length[255]');
		$this->form_validation->set_rules('nama', 'nama','trim|required|min_length[1]|max_length[255]');
        $this->form_validation->set_rules('alamat', 'alamat','trim|required|min_length[1]|max_length[255]');
        $this->form_validation->set_rules('tmp_lahir', 'tmp_lahir','trim|required|min_length[1]|max_length[255]');
		if ($this->form_validation->run()==true)
	   	{
			$nisn = $this->input->post('nisn');
			$nama = $this->input->post('nama');
            $alamat = $this->input->post('alamat');
            $tmp_lahir = $this->input->post('tmp_lahir');
            $tgl_lahir = $this->input->post('tgl_lahir');
            $jk = $this->input->post('jk');
            $pw = $this->input->post('pw');
            $prodi = $this->input->post('prodi');
			$this->auth->daftar($nisn,$nama,$alamat,$tmp_lahir,$tgl_lahir,$jk,$pw,$prodi);
			$this->session->set_flashdata('success_register','Pendaftaran Berhasil.');
			redirect('masuk');
		}
		else
		{
			$this->session->set_flashdata('error', validation_errors());
			redirect('daftar');
		}
	}
}