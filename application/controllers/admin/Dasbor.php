<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Dasbor extends CI_Controller {
    
    public function __construct()
    {
        parent::__construct();
    
    }
    
    public function index()
    {   

        $data = array(  'title' => 'Dashboard',
                        'isi' => 'interface/admin/struktur/dasbor/dasbor_view');
        $this->load->view('interface/admin/struktur/wrapper', $data);
    }
}

/* End of file Dasbor.php */
