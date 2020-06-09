<?php 
//notofokasi kalau input error
echo validation_errors('<div class="alert alert-danger"><i class="fa fa-warning"></i> ','</div>');

echo form_open(base_url('index.php/admin/pegawai/tambah_data'));
?>
<div class="col-md-6">
	<div class="form-group">
		<label for="">ID Absen</label>
		<input type="text" name="id_absen" class="form-control" placeholder="Id Absen" value="<?php echo set_value('id_absen') ?>" required="required">
	</div>

	<div class="form-group">
		<label for="">Nama Karyawan</label>
		<input type="text" name="nama_karyawan" class="form-control" placeholder="Nama Karyawan" value="<?php echo set_value('nama_karyawan') ?>" required="required">
	</div>
	 
    <div class="form-group">
        <label>Unit Kerja</label>
        <select name="unit_kerja" class="form-control">
            <option>-----</option>
            <option value="SUBBAG. Umum">SUBBAG. Umum</option>
            <option value="Seksi Peningkatan Kompetensi">Seksi Peningkatan Kompetensi</option>
            <option value="Manajemen">Manajemen</option>
            <option value="Widyaiswara">Widyaiswara</option>
            <option value="Seksi Program dan Informai">Seksi Program dan Informai</option>
            <option value="Tenaga Kontrak">Tenaga Kontrak</option>
        </select>
    </div>
    
</div>

<div class="col-md-6">
	<div class="form-group">
		<label>Status Pegawai</label>
		<select name="status" class="form-control">
      <option>-----</option>
			<option value="Active">Aktif</option>
			<option value="Non Active">Non Aktif</option>
		</select>
	</div>
		
	<div class="form-group">
		<input type="submit" name="submit" class="btn btn-success btn-lg" value="Simpan Data">
		<input type="reset" name="submit" class="btn btn-default btn-lg" value="reset">
	</div>
</div>

<?php echo form_close(); ?>