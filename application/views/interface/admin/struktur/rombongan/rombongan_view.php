   <div class="row"> 
                    <div class="col-md-6 col-sm-12 col-lg-12">                     
                        <div class="panel panel-default">
                            <div class="panel-heading">
                               Tamu
                            </div>
                        <div class="panel-body" align="center">
                              <?php
                                foreach($x as $x){
                                $bulan[] = $x->bulan;
                                $jumlah_data[] = (float) $x->jumlah_data;
                                }
                              ?>

                               <canvas id="canvas" width="800" height="300"></canvas>
                               
                                  <!--Load chart js-->
                                  <script type="text/javascript" src="<?php echo base_url().'assets/admin/assets/chartjs/chart.min.js'?>"></script>
                                  <script>
                               
                                          var lineChartData = {
                                              labels :  ["Januari", "Februari", "Maret", "April", "Mei", "Juni", "Juli", "Agustus",
                                                        "September", "Oktober", "November", "Desember"],    
                                              datasets : [
                                                   
                                                  {
                                                      fillColor: "rgba(60,141,188,0.9)",
                                                      strokeColor: "rgba(60,141,188,0.8)",
                                                      pointColor: "#3b8bba",
                                                      pointStrokeColor: "#fff",
                                                      pointHighlightFill: "#fff",
                                                      pointHighlightStroke: "rgba(152,235,239,1)",
                                                      data : <?php echo json_encode($jumlah_data);?>
                                                  }
                               
                                              ]
                                               
                                          }
                               
                                      var myLine = new Chart(document.getElementById("canvas").getContext("2d")).Line(lineChartData);
                                  </script>
                        </div>
                    </div>            
                </div>
            </div>





<table class="table table-striped table-bordered table-hover" id="dataTables-example">
<thead>
    <tr>
        <th>No</th>
        <th>Nama Perwakilan</th>
        <th>Instansi</th>
        <th>Jumlah Anggota</th>
        <th>Ingin Bertemu Dengan</th>
        <th>keperluan</th>
        <th>Waktu Kedatangan</th>
</thead>
<tbody>
<?php $i = 1; foreach($rombongan as $rombongan) {?>
    <tr>
        <td><?php echo $i++; ?></td>
        <td><?php echo $rombongan->perwakilan; ?>
            <br><i class="fa fa-phone"></i> Telp: <?php echo $rombongan->nomor_telepon; ?>
        </td>
        <td><?php echo $rombongan->instansi; ?></td>
        <td><?php echo $rombongan->anggota; ?></td>
        <td><?php echo $rombongan->nama_karyawan; ?></td>
        <td><?php echo $rombongan->keperluan; ?></td>
        <td><?php echo $rombongan->date;?> </td>
    </tr>
 <?php } ?>


</tbody>
</table>
