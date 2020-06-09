<?php 
	if ( ! defined('BASEPATH')) exit('No direct script access allowed');
	
	class pegawai_model extends CI_Model {
		
		public function __construct()
		{
			parent::__construct();
			
		}
		//create
		public function tambah_data($data = array())
		{
			return $this->db->insert('pegawai',$data);
		}
	
	}
	
	/* End of file pegawai_model.php */
	/* Location: ./application/models/pegawai_model.php */

 ?>