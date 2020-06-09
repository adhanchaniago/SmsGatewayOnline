<?php
defined('BASEPATH') OR exit('No direct script access allowed');



class pegawai_model extends CI_Model {

    
    public function __construct()
    {
        parent::__construct();
        $this->load->database();
    }


    public function listing()
    {
        $this->db->select('*');
        $this->db->from('pegawai');
        $this->db->order_by('id','DESC');
        $query  =  $this->db->get();
        return $query->result();

    }
    
    public function detail($id)
    {
        $this->db->select('*');
        $this->db->from('pegawai');
        $this->db->where('id',$id);
        $this->db->order_by('id','DESC');
        $query =   $this->db->get();
        return $query->row();   
    }
    
    public function edit($data)
    {
		$this->db->where('id', $data['id']);
		$this->db->update('pegawai', $data);
	}

    public function delete($data)
    {
        $this->db->where('id', $data['id']);
        $this->db->delete('pegawai',$data);
    }

    public function tambah($data)
    {
		$this->db->insert('pegawai', $data);
	}
}

/* End of file tamu_umum.php */



?>