 <?php echo form_open("index.php/kunjungan_umum/tambah_data"); ?>
        <div class="text-center mb-4 mt-5">
          <img class="mb-3" src="<?php echo base_url('assets/images/01.png');?>" width="100" height="100">
          <h1 class="h3 mb-3 font-weight-normal">Selamat Datang!</h1>
          <p>Lembaga Pengembangan dan Pemberdayaan Pendidik dan Tenaga Kependidikan bidang Kelautan, Perikanan, dan Teknologi Informasi dan Komunikasi.</p>
        </div>
       <div class="form-label-group">
          <input type="text" name="nama" id="nama" class="form-control" placeholder="Nama" required="" autofocus="">
          <label for="nama"></label>
        </div>
        <div class="form-label-group">
          <input type="text" name="nomor_telepon" class="form-control" placeholder="Nomor telepon" required="" autofocus="">
          <label for="noTelp"></label>
        </div>

        <select class="form-control mb-4" name="instansi" >
          <option>Instansi..</option>
          <option value="Pribadi" >Pribadi</option>
          <option value="Dinas">Dinas</option>
          <option value="Sekolah">Sekolah</option>
          <option value="Dinas Pendidikan" >Dinas Pendidikan</option>
          <option value="Pemerintah Daerah">Pemerintah Daerah</option>
          <option value="Perguruan Tinggi">Perguruan Tinggi</option>
          <option value="Kemdikbud">Kemdikbud</option>
          <option value="Lembaga Non Pemerintahan">Lembaga Non Pemerintahan</option>
          <option value="Lembaga Internasional">Lembaga Internasional</option>
        </select>

        <select class="form-control mb-4" name="nama_karyawan">
          <option>Ingin bertemu dengan..</option>
          <option value="Pak Ma'mur" >Pak Ma'mur - SUBBAG. Umum</option>
          <option value="Pak Andri Warsono">Pak Andri Warsono - Seksi Peningkatan Kompetensi</option>
          <option value="Pak Darwis M">Pak Darwis M - Manajemen</option>
          <option value="Pak Imran">Pak Imran - Widyaiswara</option>
          <option value="Pak Dwi Bagus Fitriyanto">Pak Dwi Bagus Fitriyanto - Seksi Program dan Informasi</option>
          <option value="Ibu Hasnawati">Ibu Hasnawati - Tenaga Kontrak</option>
        </select>
        
        <div class="form-label-group">
          <input type="text" name="keperluan" class="form-control" placeholder="Keperluan" required="" autofocus="">
          <label for="keperluan"></label>
        </div>

         <button name="submit" value="submit" class="btn btn-info btn-lg btn-block">Submit</button>

        <p class="mt-5 mb-3 text-muted text-center">© 2017-2019</p>
       
     <?php echo form_close(); ?>
      </form>          
    </div>
  </div>
</div>