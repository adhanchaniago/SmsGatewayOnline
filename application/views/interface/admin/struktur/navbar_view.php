<nav class="navbar-default navbar-side" role="navigation">
<div class="sidebar-collapse">
    <ul class="nav" id="main-menu">
    
        <!-- Dasbor -->
        <li>
            <a  href="<?php echo base_url('index.php/admin/Dasbor')?>"><i class="fa fa-dashboard"></i> Dashboard</a>
        </li>    
          <!--tamu  -->
        <li><a href="#"><i class="fa fa-group"></i>Data Tamu<span class="fa arrow"></span></a>
            <ul class="nav nav-second-level">
                <li><a href="<?php echo base_url('index.php/admin/Tamu_umum')?>">Lihat Data</a></li>
                <li><a href="<?php echo base_url('index.php/admin/Tamu_umum/laporan_pdf')?>">Cetak Data</a></li>
            </ul>
          </li> 

            <!--Rombongan  -->
        <li><a href="#"><i class="fa fa-calendar"></i>Tamu Rombongan<span class="fa arrow"></span></a>
            <ul class="nav nav-second-level">
                <li><a href="<?php echo base_url('index.php/admin/Rombongan')?>">Lihat Data</a></li>
                <li><a href="<?php echo base_url('index.php/admin/Rombongan/laporan_pdf')?>">Cetak Data</a></li>
            </ul>
          </li>

           <!--pegawai  -->
        <li><a href="#"><i class="fa fa-book"></i>Data Pegawai<span class="fa arrow"></span></a>
            <ul class="nav nav-second-level">
                <li><a href="<?php echo base_url('index.php/admin/Pegawai/tambah_data')?>">Tambah Data</a></li>
                <li><a href="<?php echo base_url('index.php/admin/Pegawai')?>">Lihat Data</a></li>
                <li><a href="<?php echo base_url('index.php/admin/Pegawai/laporan_pdf')?>">Cetak Data</a></li>
            </ul>
          </li>


           <!--user  -->
         <li><a href="#"><i class="fa fa-newspaper-o"></i> Akun <span class="fa arrow"></span></a>
            <ul class="nav nav-second-level">
                <li><a href="<?php echo base_url('index.php/admin/user/tambah_data') ?> ">Tambahkan User</a></li>
                <li><a href="<?php echo base_url('index.php/admin/user')?> ">Data User</a></li>
            </ul>
          </li>

          <!-- Konfigurasi -->
    </ul>
   
</div>

</nav>  
<!-- /. NAV SIDE  -->
<div id="page-wrapper" >
<div id="page-inner">
    <div class="row">
        <div class="col-md-12">
         <h2><?php echo $title; ?></h2>
        </div>
    </div>
     <!-- /. ROW  -->
     <hr />
   
<div class="row">
    <div class="col-md-12">
        <!-- Advanced Tables -->
        <div class="panel panel-default">
            <div class="panel-heading">
                <?php echo $title;?>
            </div>
            <div class="panel-body">
                <div class="table-responsive">






