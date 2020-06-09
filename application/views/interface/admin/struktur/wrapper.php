<?php

if($this->session->userdata('id_admin') == ""){
  $this->session->set_flashdata('sukses', ' Silakan Login Terlebih Dahulu');
  redirect(base_url('index.php/admin/login'),'refresh');
}
  require_once('head_view.php');
  require_once('header_view.php');
  require_once('navbar_view.php');
  require_once('content_view.php');
  require_once('footer_view.php');


   



