<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class kunjungan_umum_model extends CI_Model {

	public function __construct(){
		parent::__construct();
		
	}
	public function tambah_data($data = array()){
		return $this->db->insert('kunjungan_umum',$data);
	}


	public function hitung_pengunjung(){  
		$query = $this->db->get('kunjungan_umum');
    		if($query->num_rows()>0){
      			return $query->num_rows();
      		}else{
      			return 0;
      		}
	}

	public function listing(){
        $this->db->select('*');
        $this->db->from('kunjungan_umum');
        $this->db->order_by('id','DESC');
        $query  =  $this->db->get();
        return $query->result();

    }
    	


}

/* End of file kunjungan_umum.php */
/* Location: ./application/models/kunjungan_umum.php */