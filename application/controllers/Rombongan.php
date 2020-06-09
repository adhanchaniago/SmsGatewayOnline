<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Rombongan extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->helper('url');
		$this->load->model('rombongan_model');
	}

	public function index()
	{	
		$data = array('hitung_rombongan' => $this->rombongan_model->hitung_rombongan(), 
					  'hitung_anggota'	 => $this->rombongan_model->hitung_anggota()
					 );
		$this->load->view('interface/user/struktur/meta');
		$this->load->view('interface/user/struktur/header');
		$this->load->view('interface/user/content/rombongan_view',$data);
		$this->load->view('interface/user/struktur/footer');
	}


	public function index_rombongan(){
		$data = array('hitung_rombongan' => $this->rombongan_model->hitung_rombongan(), 
					  'hitung_anggota'	 => $this->rombongan_model->hitung_anggota()
					 );
		$this->load->view('interface/user/struktur/meta');
		$this->load->view('interface/user/struktur/header');
		$this->load->view('interface/user/content/index_rombongan',$data);
		$this->load->view('interface/user/struktur/footer');
	}

	public function tambah_data(){

	date_default_timezone_set("Asia/Kuala_Lumpur");

	if ($this->input->post('submit')){
			$data = array('perwakilan' 		=>$this->input->post('perwakilan'),
					  	  'nomor_telepon'	=>$this->input->post('nomor_telepon'),
					  	  'instansi'		=>$this->input->post('instansi'),
					  	  'anggota'			=>$this->input->post('anggota'),
					  	  'nama_karyawan'	=>$this->input->post('nama_karyawan'),
					  	  'keperluan'		=>$this->input->post('keperluan'),
					  	  'bulan'			=>date('m')
					  	);
		$this->rombongan_model->tambah_data($data);
		$this->session->set_flashdata('sukses', 'Data Berhasil Disimpan');
	}
	redirect('index.php/Rombongan/index_rombongan','refresh');
	}
	

}

/* End of file Rombongan.php */
/* Location: ./application/controllers/Rombongan.php */