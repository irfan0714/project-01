<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_pendaftar extends CI_Model {

	public function get(){
		return $this->db->get('pendaftar')->result();
	}
	public function getRandom(){
		$this->db->order_by('id',"RANDOM");
		$this->db->limit(4);
		return $this->db->get('pendaftar')->result();
	}
	public function getDetail($id){
		$this->db->where('id',$id);
		return $this->db->get('pendaftar')->result();
	}
	public function insertData($data=array()){
		$this->db->insert('pendaftar',$data);
	}
	

}

/* End of file M_pendaftar.php */
/* Location: ./application/models/M_pendaftar.php */