<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Tentang extends CI_Controller {
	public function __construct(){
		parent::__construct();
		$this->load->model('M_pendaftar');
	}

	public function index()
	{
		$this->load->view('v_tentang');
	}

}

/* End of file Tentang.php */
/* Location: ./application/controllers/Tentang.php */