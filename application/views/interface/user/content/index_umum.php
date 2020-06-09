<div class="text-center mb-4 mt-5">
          <img class="mb-3" src="<?php echo base_url('assets/images/01.png');?>" width="100" height="100">
          <h1 class="h3 mb-3 font-weight-normal">Selamat Datang!</h1>
          <p>Lembaga Pengembangan dan Pemberdayaan Pendidik dan Tenaga Kependidikan bidang Kelautan, Perikanan, dan Teknologi Informasi dan Komunikasi.</p>
          <p>
                <?php 
                if ($this->session->flashdata('sukses')) {
                        echo '<div class="alert alert-success"><i class="fa fa-check"></i> ';
                        echo $this->session->flashdata('sukses');
                        echo '</div>';
                        echo '<div class="alert alert-link "><i class="fa fa-check"></i> ';
                        echo "Anda Adalah Pengunjung Yang Ke- ";
                        echo $hitung_pengunjung;
                        echo ' <script type="text/javascript">
                            $data= responsiveVoice.OnVoiceReady = function() {
                                    console.log("speech time?");
                                    responsiveVoice.speak(
                                    "Selamat datang di LP3TK" ,
                                    "Indonesian Male",
                                    {
                                    pitch: 1, 
                                    rate: 1, 
                                    volume: 1
                                    }
                                    );
                                    };
                                    </script>';
                        echo " hari ini";
                        echo "<br>";
                        echo '</div>';

                    }
                ?>
          </p>
        </div>
          <p class="mt-5 mb-3 text-muted text-center">© 2017-2019</p>
    </div>
  </div>
</div>
