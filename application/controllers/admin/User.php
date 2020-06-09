<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('admin/user_model');
	}

	public function index()
	{
		$user 	= $this->user_model->listing();
		$data 	= array('title' 	=>	'Data User ('. count($user).' data)',
				  		'user'		=>	$user,
				  		'isi'		=>	'interface/admin/struktur/user/user_view');
		$this->load->view('interface/admin/struktur/wrapper', $data, FALSE);
	}

	public function delete($id){
	  if($this->session->userdata('id_admin') == ""){
                $this->session->set_flashdata('sukses', ' Silakan login dahulu');
                redirect(base_url('index.php/admin/login'), 'refresh');
                }
                //proteksi sebelum dihapus
                $data = array('id' => $id);
                $this->user_model->delete($data);
                $this->session->set_flashdata('sukses', 'Data telah dihapus');
                redirect(base_url('index.php/admin/user'),'refresh');
            }
    public function tambah_data()
    {   
        
            //validation error
            date_default_timezone_set("Asia/Kuala_Lumpur");    

            $valid = $this->form_validation;
            $valid->set_rules('id_admin','ID Admin','required',
                        array('required' => ' ID Admin harus diisi'));
                        
            $valid->set_rules('nama','Nama','required',
                        array('required' => ' Nama harus diisi'));
            
            $valid->set_rules('email','Email','required',
                        array('required' => ' Email harus diisi'));
                        
            $valid->set_rules('password','Password','required',
                        array('required' => ' Password harus diisi'));
            
            $valid->set_rules('akses_level','Akses Level','required',
                        array('required' => ' Akses Level harus diisi'));
                
            //end validasi
            if($valid->run()===FALSE){
    
                $data = array(  'title' => 'Tambah User',
                                'isi'   => 'interface/admin/struktur/user/tambah_view');
                $this->load->view('interface/admin/struktur/wrapper', $data, FALSE);
    
            //jika tdk error, maka masuk ke db
            }else{
       
                $i = $this->input;
                $data = array(	'id'    		 => $this->session->userdata('id'),
                                'id_admin'       => $i->post('id_admin'),
                                'nama'       	 => $i->post('nama'),
                                'email' 		 => $i->post('email'),
                                'password' 		 => $i->post('password'),
                                'akses_level'	 => $i->post('akses_level'),
                                'keterangan'	 => $i->post('keterangan'),
                            );
                               
                $this->user_model->tambah($data);
                $this->session->set_flashdata('sukses',' Data telah ditambahkan');
                redirect(base_url('index.php/admin/user'),'refresh');  

            }
    }

    public function edit($id){
    	$user = $this->user_model->detail($id);

		//validation error
		$valid = $this->form_validation;
			$valid->set_rules('id_admin','ID Admin','required',
                        array('required' => ' ID Admin harus diisi'));
                        
            $valid->set_rules('nama','Nama','required',
                        array('required' => ' Nama harus diisi'));
            
            $valid->set_rules('email','Email','required',
                        array('required' => ' Email harus diisi'));
                        
            $valid->set_rules('password','Password','required',
                        array('required' => ' Password harus diisi'));
            
            $valid->set_rules('akses_level','Akses Level','required',
                        array('required' => ' Akses Level harus diisi'));
       
		//end validasi
		if($valid->run()===FALSE){
			$data = array(  'title' => 'Edit Data User : '.$user->nama,
							'user' => $user,
							'isi' => 'interface/admin/struktur/user/edit_view');
			$this->load->view('interface/admin/struktur/wrapper', $data, FALSE);

		//jika tdk error, maka masuk ke db
		}else{
          	$i = $this->input;
                $data = array(	'id'    		 => $id,
                                'id_admin'       => $i->post('id_admin'),
                                'nama'       	 => $i->post('nama'),
                                'email' 		 => $i->post('email'),
                                'password' 		 => $i->post('password'),
                                'akses_level'	 => $i->post('akses_level'),
                                'keterangan'	 => $i->post('keterangan'));

			$this->user_model->edit($data);
			$this->session->set_flashdata('sukses',' Data telah diupdate');
			redirect(base_url('index.php/admin/user'),'refresh');
		}
    }

    


}

/* End of file user.php */
/* Location: ./application/controllers/admin/user.php */