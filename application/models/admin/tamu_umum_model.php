<?php
defined('BASEPATH') OR exit('No direct script access allowed');



class Tamu_umum_model extends CI_Model {

    
    public function __construct()
    {
        parent::__construct();
        $this->load->database();
    }


    public function listing()
    {
        $this->db->select('*');
        $this->db->from('kunjungan_umum');
        $this->db->order_by('id','DESC');
        $query  =  $this->db->get();
        return $query->result();

    }
    
    public function detail($id)
    {
        $this->db->select('*');
        $this->db->from('kunjungan_umum');
        $this->db->where('id',$id);
        $this->db->order_by('id','DESC');
        $query =   $this->db->get();
        return $query->row();   
    }
    
    public function edit($data)
    {
        $this->db->where('id',$data['id']);
        $this->db->update('kunjungan_umum',$data);
    }

    public function delete($data)
    {
        $this->db->where('id', $data['id']);
        $this->db->delete('kunjungan_umum',$data);
    }

    function get_data_stok_tamu(){
        $query = $this->db->query("SELECT bulan, COUNT(bulan) AS jumlah_data FROM kunjungan_umum GROUP BY bulan");
          
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