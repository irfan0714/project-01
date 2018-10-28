<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

	public function __construct(){
		parent::__construct();
		$this->load->model('M_pendaftar');
	}

	public function index(){
		$data['pendaftar'] = $this->M_pendaftar->getRandom();
		$this->load->view('v_home',$data);
	}

}

/* End of file Home.php */
/* Location: ./application/controllers/Home.php */