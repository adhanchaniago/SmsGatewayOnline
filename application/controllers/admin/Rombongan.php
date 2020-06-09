<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Rombongan extends CI_Controller {

    
    public function __construct()
    {
        parent::__construct();
        $this->load->model('admin/rombongan_model');
        $this->load->library('pdf');  
        
    }
    
    public function index()
    {
        $rombongan = $this->rombongan_model->listing();
        $x         = $this->rombongan_model->get_data_stok_rombongan();
		$data = array(  'title' => 'Data Rombongan ('.count($rombongan).' Data)',
						'rombongan' => $rombongan,
                        'x'         => $x,
						'isi' => 'interface/admin/struktur/rombongan/rombongan_view');
		$this->load->view('interface/admin/struktur/wrapper', $data, FALSE);
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
        $pdf->Cell(280,7,'DAFTAR TAMU ROMBONGAN PERIODE 2019-2020',0,1,'C');
        // Memberikan space kebawah agar tidak terlalu rapat
        $pdf->Cell(10,7,'',0,1);
        $pdf->SetFont('Arial','B',10);
        $pdf->SetLeftMargin('15');
        $pdf->Cell(40,6,'Nama Perwakilan',1,0,'C');
        $pdf->Cell(35,6,'Nomor Telepon',1,0,'C');
        $pdf->Cell(35,6,'Asal Instansi',1,0,'C');
        $pdf->Cell(38,6,'Jumlah Rombongan',1,0,'C');
        $pdf->Cell(40,6,'Ingin Bertemu dengan',1,0,'C');
        $pdf->Cell(40,6,'Keperluan',1,0,'C');
        $pdf->Cell(43,6,'Waktu Kunjungan',1,1,'C');
        $pdf->SetFont('Arial','',10);
        $rombongan = $this->db->get('rombongan')->result();
        foreach ($rombongan as $row){
            $pdf->Cell(40,6,$row->perwakilan,1,0,'C');
            $pdf->Cell(35,6,$row->nomor_telepon,1,0,'C');
            $pdf->Cell(35,6,$row->instansi,1,0,'C');
            $pdf->Cell(38,6,$row->anggota,1,0,'C');
            $pdf->Cell(40,6,$row->nama_karyawan,1,0,'C');
            $pdf->Cell(40,6,$row->keperluan,1,0,'C');
            $pdf->Cell(43,6,$row->date,1,1,'C');
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