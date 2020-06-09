
<?php 


if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Pegawai extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->helper('url');
		$this->load->model('pegawai_model');

	}

	public function index()
	{
		$this->load->view('interface/user/struktur/meta');
		$this->load->view('interface/user/struktur/header');
		$this->load->view('interface/user/content/pegawai_view');
		$this->load->view('interface/user/struktur/footer');
	}

	public function tambah_data(){
	if ($this->input->post('submit')){
			$data = array('nama' 			=>$this->input->post('nama'),
						  'id_pegawai'		=>$this->input->post('id_pegawai'),
					  	  'nomor_telepon'	=>$this->input->post('nomor_telepon'),
					  	  'pimpinan'		=>$this->input->post('pimpinan'),
					  	  'keperluan'		=>$this->input->post('keperluan'));
		$this->pegawai_model->tambah_data($data);
		$this->session->set_flashdata('sukses', 'Data Berhasil Disimpan');
	}
	redirect('Pegawai','refresh');
	}
	
}

/* End of file Welcome.php */
/* Location: ./application/controllers/Welcome.php */

?>


