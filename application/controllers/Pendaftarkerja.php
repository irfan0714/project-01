<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pendaftarkerja extends CI_Controller {
	public function __construct(){
		parent::__construct();
		$this->load->model('M_pendaftar');
	}

	public function index()
	{
		$data['pendaftar']	= $this->M_pendaftar->get();
		$this->load->view('v_pendaftarkerja', $data);
	}
	public function detail($id=0){
		$data['pendaftar'] = $this->M_pendaftar->getDetail($id);
		if(count($data['pendaftar']) < 1){
			redirect('pendaftarkerja');
		}
		$data['pendaftar'] = $data['pendaftar'][0];
		$this->load->view('v_detailpendaftar', $data, FALSE);
	}

}

/* End of file Pendafatarkerja.php */
/* Location: ./application/controllers/Pendafatarkerja.php */