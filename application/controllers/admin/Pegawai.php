<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Pegawai extends CI_Controller {

    
    public function __construct()
    {
        parent::__construct();
        $this->load->model('admin/pegawai_model');
        $this->load->library('pdf');        
    }
    
    public function index()
    {
        $pegawai = $this->pegawai_model->listing();
		$data = array(  'title' => 'Data Pegawai ('.count($pegawai).' Data)',
						'pegawai' => $pegawai,
						'isi' => 'interface/admin/struktur/pegawai/pegawai_view');
		$this->load->view('interface/admin/struktur/wrapper', $data, FALSE);
    }

    public function tambah_data()
    {   
        
            //validation error
            date_default_timezone_set("Asia/Kuala_Lumpur");    

            $valid = $this->form_validation;

            $valid->set_rules('id_absen','Id Absen','required',
                        array('required' => ' Id Absen Harus Diisi'));

            $valid->set_rules('nama_karyawan','Nama Karyawan','required',
                        array('required' => ' Nama harus diisi'));
            
            $valid->set_rules('unit_kerja','Unit Kerja','required',
                        array('required' => ' Unit Kerja harus diisi'));
    
            $valid->set_rules('status','Status','required',
                        array('required' => ' Status harus diisi'));
    
    
            //end validasi
            if($valid->run()===FALSE){
    
                $data = array(  'title' => 'Tambah Data Pegawai',
                                'isi'   => 'interface/admin/struktur/pegawai/tambah_view');
                $this->load->view('interface/admin/struktur/wrapper', $data, FALSE);
    
            //jika tdk error, maka masuk ke db
            }else{
       
                $i = $this->input;
                $data = array(	'id'    		 => $this->session->userdata('id'),
                                'id_absen'       => $i->post('id_absen'),
                                'nama_karyawan'  => $i->post('nama_karyawan'),
                                'unit_kerja'     => $i->post('unit_kerja'),
                                'status'		 => $i->post('status')
                            );
                               
                $this->pegawai_model->tambah($data);
                $this->session->set_flashdata('sukses',' Data telah ditambahkan');
                redirect(base_url('index.php/admin/pegawai'),'refresh');  

            }
    }
	
    public function edit($id){
        $pegawai = $this->pegawai_model->detail($id);

		//validation error
		$valid = $this->form_validation;

        
            $valid->set_rules('id_absen','Id Absen','required',
                        array('required' => ' Id Absen Harus Diisi'));

            $valid->set_rules('nama_karyawan','Nama Karyawan','required',
                        array('required' => ' Nama harus diisi'));
            
            $valid->set_rules('unit_kerja','Unit Kerja','required',
                        array('required' => ' Unit Kerja harus diisi'));
    
            $valid->set_rules('status','Status','required',
                        array('required' => ' Status harus diisi'));
        
        
		//end validasi
		if($valid->run()===FALSE){
			$data = array(  'title' => 'Edit Data : '.$pegawai->nama_karyawan,
							'pegawai' => $pegawai,
							'isi' => 'interface/admin/struktur/pegawai/edit_view');
			$this->load->view('interface/admin/struktur/wrapper', $data, FALSE);

		//jika tdk error, maka masuk ke db
		}else{
            $i = $this->input;
			$data = array(	'id'    		 => $id,
							'id_absen'       => $i->post('id_absen'),
                            'nama_karyawan'  => $i->post('nama_karyawan'),
                            'unit_kerja'     => $i->post('unit_kerja'),
                            'status'         => $i->post('status'));

			$this->pegawai_model->edit($data);
			$this->session->set_flashdata('sukses',' Data telah diupdate');
			redirect(base_url('index.php/admin/pegawai'),'refresh');
		}
	}
        
    public function delete($id){
            if($this->session->userdata('id_admin') == ""){
                $this->session->set_flashdata('sukses', ' Silakan login dahulu');
                redirect(base_url('index.php/admin/login'), 'refresh');
                }
                //proteksi sebelum dihapus
                $data = array('id' => $id);
                $this->pegawai_model->delete($data);
                $this->session->set_flashdata('sukses', ' Data telah dihapus');
                redirect(base_url('index.php/admin/pegawai'),'refresh');
    }

    public function laporan_pdf(){
        $pdf = new FPDF('L','mm','A4');
        // membuat halaman baru
        $pdf->AddPage();
        // setting jenis font yang akan digunakan
        $pdf->SetFont('Arial','B',16);
        // mencetak string 
        $pdf->Cell(280,7,'Lembaga Pengembangan dan Pemberdayaan',0,1,'C');
        $pdf->Cell(280,7,'Pendidik dan Tenaga Kependidikan bidang',0,1,'C');
        $pdf->Cell(280,7,'Kelautan, Perikanan, dan Teknologi Informasi dan Komunikasi.',0,1,'C');
        $pdf->Cell(10,7,'',0,1);
        
        $pdf->SetFont('Arial','B',12);
        $pdf->Cell(280,7,'DAFTAR DATA PEGAWAI 2019-2020',0,1,'C');
        // Memberikan space kebawah agar tidak terlalu rapat
        $pdf->Cell(10,7,'',0,1);
        $pdf->SetFont('Arial','B',10);
        $pdf->SetLeftMargin('40');
        $pdf->Cell(40,6,'Id Absen',1,0,'C');
        $pdf->Cell(40,6,'Nama Karyawan',1,0,'C');
        $pdf->Cell(27,6,'Unit Kerja',1,0,'C');
        $pdf->Cell(40,6,'Status',1,0,'C');
        $pdf->Cell(40,6,'Data Entry',1,1,'C');
        $pdf->SetFont('Arial','',10);
        $pegawai = $this->db->get('pegawai')->result();
        foreach ($pegawai as $row){
            $pdf->Cell(40,6,$row->id_absen,1,0,'C');
            $pdf->Cell(40,6,$row->nama_karyawan,1,0,'C');
            $pdf->Cell(27,6,$row->unit_kerja,1,0,'C');
            $pdf->Cell(40,6,$row->status,1,0,'C');
            $pdf->Cell(40,6,$row->date,1,1,'C');  
        }
            $pdf->Output();
    }
    }
   

/* End of file Tamu_umum

public function __construct()
{
    parent::__construct();
    $this->load->model()
}
.php */


?>