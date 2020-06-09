<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class rombongan_model extends CI_Model {

	public function __construct(){
		parent::__construct();
	}


	public function tambah_data($data = array()){
		return $this->db->insert('rombongan',$data);
	}

	public function hitung_rombongan(){
		$query = $this->db->get('rombongan');
			if ($query->num_rows()>0) {
				return $query->num_rows();
			}else{
				return 0;
			}
	}

	public function hitung_anggota(){
		$this->db->select_sum('anggota');
		$query = $this->db->get('rombongan');
		if ($query->num_rows()>0) {
			return $query->row()->anggota;
		}else{
			return 0;
		}
	}



}

/* End of file rombongan_model.php */
/* Location: ./application/models/rombongan_model.php */