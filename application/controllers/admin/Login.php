<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {
    
    
    public function __construct()
    {
        parent::__construct();
        $this->load->model('admin/login_model');    
    }
    
    public function index()
    {
        $this->load->view('interface/admin/login_view');
    }

    public function aksi_login()
    {
        //validasi
        $valid  =$this->form_validation;
        $valid->set_rules('id_admin','ID Admin','required',
                           array('required' => 'ID Admin Harus diisi'));
        $valid->set_rules('password','Password','required',
                           array('required'  => 'Password Harus diisi'));
        
        if ($valid->run()===FALSE) {
            $this->load->view('interface/admin/login_view');
        }else{
            $id_admin       =   $this->input->post('id_admin');
            $password       =   $this->input->post('password');
            $check_login    =   $this->login_model->login($id_admin,$password);

            //kalau ada record maka read session dan redirect
            if (count($check_login) == 1 ){
                $this->session->set_userdata('id_admin',$id_admin);
                $this->session->set_userdata('password',$password);
                $this->session->set_userdata('akses_level', $check_login->akses_level);
                redirect(base_url('index.php/admin/dasbor'),'refresh');
            }else{
                $this->session->set_flashdata('sukses','Username atau Password tidak cocok');
                redirect(base_url('index.php/admin/login'),'refresh');
            }
        }
    }

    public function logout(){
        $this->session->unset_userdata('id_admin');
        $this->session->unset_userdata('password');
        $this->session->unset_userdata('akses_level');
        redirect(base_url('index.php/admin/login'),'refresh');        
    }

}
?>