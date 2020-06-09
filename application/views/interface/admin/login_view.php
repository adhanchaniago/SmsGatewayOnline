<!DOCTYPE html>
<html lang="en">
    <head>
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

        <!-- Bootstrap CSS -->
        <link rel="stylesheet" href="<?php echo base_url()?>assets/css/baru.css">

        <title>LP3TK PTK</title>
    </head>
      <body>
        <div class="container">
          <div class="row">
            <div class="col-4 offset-4">
            <?php echo form_open("index.php/admin/login/aksi_login"); ?>
                <div class="text-center mb-4 mt-5">
                  <img class="mb-3" src="<?php echo base_url('assets/img/tutwuri.png');?>" width="100" height="100">
                  <h1 class="h3 mb-3 font-weight-normal">Admin LP3TK PTK</h1>
                  <p>Silahkan masukkan ID admin dan Password untuk mengakses dashboard admin.</p>
                  <p>
                  <?php 
                        //Notifikasi Kalau ada input error
                        echo validation_errors('<div class="alert alert-danger"><i class="fa fa-warning"></i> ',' </div>');

                        //Notifikasi
                        if($this->session->flashdata('sukses')){
                        echo '<div class="alert alert-success"><i class="fa fa-check"></i> ';
                        echo $this->session->flashdata('sukses');
                        echo '</div>';}
                    ?>
                  </p>
                </div>
                <div class="form-label-group">
                  <input type="text" name="id_admin" class="form-control" placeholder="ID admin" required="" autofocus="">
                  <label for="id_admin"></label>
                </div>
                <div class="form-label-group">
                  <input type="password" name="password" class="form-control" placeholder="Password" required="" autofocus="">
                  <label for="password"></label>
                </div>
                
                <input type="submit" name="submit" class="btn btn-info btn-lg btn-block" value="Masuk">
           
            <?php echo form_close(); ?>

                <p class="mt-5 mb-3 text-muted text-center">© 2017-2019</p>

              
            </div>
          </div>
        </div>
       </body>
</html>
