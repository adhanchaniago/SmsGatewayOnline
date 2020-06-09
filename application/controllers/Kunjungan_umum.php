
<?php 

if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Kunjungan_umum extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->library('form_validation');
		$this->load->model('kunjungan_umum_model');
		$this->load->helper('url','html','form');
	}

	public function index()
	{	
		$data['hitung_pengunjung'] = $this->kunjungan_umum_model->hitung_pengunjung();
		$this->load->view('interface/user/struktur/meta');
		$this->load->view('interface/user/struktur/header');
		$this->load->view('interface/user/content/umum_view',$data);
		$this->load->view('interface/user/struktur/footer');
		
	}

	public function index_umum(){
		$data['hitung_pengunjung'] = $this->kunjungan_umum_model->hitung_pengunjung();

		$this->load->view('interface/user/struktur/meta');
		$this->load->view('interface/user/struktur/header');
		$this->load->view('interface/user/content/index_umum',$data);
		$this->load->view('interface/user/struktur/footer');
	}

	public function tambah_data(){

	date_default_timezone_set("Asia/Kuala_Lumpur");
	$kunjungan_umum = $this->kunjungan_umum_model->listing();
	if ($this->input->post('submit')){
			$data = array('nama' 				=>$this->input->post('nama'),
					  	  'nomor_telepon'		=>$this->input->post('nomor_telepon'),
					  	  'instansi'			=>$this->input->post('instansi'),
					  	  'nama_karyawan'		=>$this->input->post('nama_karyawan'),
					  	  'keperluan'			=>$this->input->post('keperluan'),
					  	  'bulan'				=>date('m'),
					  	  'jumlah_data'			=>count($kunjungan_umum)+1);

		$this->kunjungan_umum_model->tambah_data($data);
		$mobile 	= 	$this->input->post('nomor_telepon');
		$nama		=	$this->input->post('nama');
		$message	=	"Terima Kasih Saudara $nama Telah Berkunjung Di LP3TK, Harap mengisi form dibawah ini sebagai evaluasi bagi kami";
		$data		=	$this->input->post();
		unset($data['submit']);
		$msgencode	=	urlencode($message);
		$userkey	=	"2snwld";
		$passkey	=	"hk3p5wzfor";
		$router		=	"";

		$postdata 	=	array('authkey'=>$userkey,
						'mobile' 	=> $mobile,
						'message' 	=> $msgencode,
						'router'	=> $router		
						);
		$url		=	"https://reguler.zenziva.net/apps/smsapi.php?userkey=$userkey&passkey=$passkey&nohp=$mobile&pesan=$msgencode";

		$ch			=	curl_init();
						curl_setopt_array($ch,array(
							CURLOPT_URL 				=>	$url,
							CURLOPT_RETURNTRANSFER		=>	TRUE,
							CURLOPT_POST				=>	TRUE,
							CURLOPT_POSTFIELDS			=> 	$postdata
						));
		curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, 0);
		curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);

		$output 	=	curl_exec($ch);
		if (curl_errno($ch)) {
			echo "error". curl_error($ch);
		}
		curl_close($ch);
		$this->session->set_flashdata('sukses', 'Data Berhasil Disimpan');
	}
	redirect('index.php/Kunjungan_umum/index_umum','refresh');
	}		


}

/* End of file Welcome.php */
/* Location: ./application/controllers/Welcome.php */

?>


