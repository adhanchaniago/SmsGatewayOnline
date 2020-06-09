<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class User_model extends CI_Model {


	public function __construct()
	{
		parent::__construct();
		$this->load->database();
	}

	public function listing(){
		$this->db->select('*');
		$this->db->from('user');
		$this->db->order_by('id','DESC');
		$query = $this->db->get();
		return $query->result();
	}

	public function delete($data){
		$this->db->where('id', $data['id']);
		$this->db->delete('user', $data);
	}

	public function tambah($data){
		$this->db->insert('user', $data);
	}

	public function edit($data)
    {
		$this->db->where('id', $data['id']);
		$this->db->update('user', $data);
	}

	public function detail($id)
    {
        $this->db->select('*');
        $this->db->from('user');
        $this->db->where('id',$id);
        $this->db->order_by('id','DESC');
        $query =   $this->db->get();
        return $query->row();   
    }
    




}

/* End of file user_model.php */
/* Location: ./application/models/user_model.php */