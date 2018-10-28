<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Daftar extends CI_Controller {
	public function __construct(){
		parent::__construct();
		$this->load->model('M_pendaftar');
	}

	public function index()
	{	
		$data = array();
		if($this->input->method() == 'post'){
			$dataPost = array(
								'nama'		=> $this->input->post("nama"),
								'email'		=> $this->input->post("email"),
								'pekerjaan'	=> $this->input->post("pekerjaan"),
								'alamat'	=> $this->input->post("alamat"),
								'resume'	=> $this->input->post("resume")
								);
			if(!$this->M_pendaftar->insertData($dataPost)){
				$data['status']	= "success";
				$data['message']= "Selamat, Data anda berhasil disimpan.";
			}else{
				$data['status']	= "danger";
				$data['message']= "Maaf, Data anda gagal disimpan.";
			}
		}
		$this->load->view('v_daftar',$data);
	}

}

/* End of file Daftar.php */
/* Location: ./application/controllers/Daftar.php */