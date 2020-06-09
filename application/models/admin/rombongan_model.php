<?php
defined('BASEPATH') OR exit('No direct script access allowed');



class Rombongan_model extends CI_Model {

    
    public function __construct()
    {
        parent::__construct();
        $this->load->database();
    }


    public function listing()
    {
        $this->db->select('*');
        $this->db->from('rombongan');
        $this->db->order_by('id','DESC');
        $query  =  $this->db->get();
        return $query->result();

    }
    
    public function detail($id)
    {
        $this->db->select('*');
        $this->db->from('rombongan');
        $this->db->where('id',$id);
        $this->db->order_by('id','DESC');
        $query =   $this->db->get();
        return $query->row();   
    }
    
    public function edit($data)
    {
        $this->db->where('id',$data['id']);
        $this->db->update('rombongan',$data);
    }

    public function delete($data)
    {
        $this->db->where('id', $data['id']);
        $this->db->delete('rombongan',$data);
    }

    function get_data_stok_rombongan(){
        $query = $this->db->query("SELECT bulan, COUNT(bulan) AS jumlah_data FROM rombongan GROUP BY bulan");
          
        if($query->num_rows() > 0){
            foreach($query->result() as $data){
                $hasil[] = $data;
            }
            return $hasil;
        }
    }
}

/* End of file tamu_umum.php */



?>