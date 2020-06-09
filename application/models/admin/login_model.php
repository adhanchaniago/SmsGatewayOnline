<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Login_model extends CI_Model {


public function __construct(){
        parent::__construct();
        $this->load->database();
}

   
public function login($id_admin, $password){
		$this->db->select('*');
		$this->db->from('user');
		$this->db->where(array('id_admin'   => $id_admin, 
						       'password'   => $password));
		$this->db->order_by('id_admin','DESC');
		$query = $this->db->get();
		return $query->row();
	}
	
}

?>