<?php 
class Auth extends CI_Model 
{
	
	public function __construct()
	{
        parent::__construct();
	}

	function daftar($nisn,$nama,$alamat,$tmp_lahir,$tgl_lahir,$jk,$pw,$prodi)
	{
		$data_mahasiswa = array(
            'npm'=>null,
			'nisn'=>$nisn,
            'nama'=>$nama,
            'alamat'=>$alamat,
            'tmp_lahir'=>$tmp_lahir,
            'tgl_lahir'=>$tgl_lahir,
            'jk'=>$jk,
			'pw'=>password_hash($pw,PASSWORD_DEFAULT),
            'prodi'=>$prodi
		);
		$this->db->insert('mahasiswa',$data_mahasiswa);
	}

	function masuk($npm,$pw)
	{
        $query = $this->db->get_where('mahasiswa',array('npm'=>$npm));
        if($query->num_rows() > 0)
        {
            $data_mahasiswa = $query->row();
            if (password_verify($pw, $data_mahasiswa->pw)) {
                $this->session->set_userdata('npm',$npm);
				$this->session->set_userdata('nama',$data_mahasiswa->nama);
				$this->session->set_userdata('is_login',TRUE);
                return TRUE;
            } else {
                return FALSE;
            }
        }
        else
        {
            return FALSE;
        }
	}
	
    function cek_login()
    {
        if(empty($this->session->userdata('is_login')))
        {
			redirect('masuk');
		}
    }
}
?>