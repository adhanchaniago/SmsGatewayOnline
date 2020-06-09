
<?php 
//notofokasi kalau input error
echo validation_errors('<div class="alert alert-danger"><i class="fa fa-warning"></i> ','</div>');

echo form_open(base_url('index.php/admin/pegawai/edit/'.$pegawai->id));
?>
<div class="col-md-6">
	<div class="form-group">
		<label for="">Id Abses</label>
		<input type="text" name="id_absen" class="form-control" placeholder="Id Absem" value="<?php echo $pegawai->id_absen ?>"required="required">
	</div>

	<div class="form-group">
		<label for="">Nama Karyawan</label>
		<input type="text" name="nama_karyawan" class="form-control" placeholder="Nama Karyawan" value="<?php echo $pegawai->nama_karyawan ?>" required="required">
	</div>
	
	<div class="form-group">
        <label>Unit Kerja</label>
        <select name="unit_kerja" class="form-control">
            <option>-----</option>
            <option value="SUBBAG. Umum"  					<?php if($pegawai->unit_kerja=="SUBBAG. Umum"){echo "selected";} ?>>SUBBAG. Umum</option>
            <option value="Seksi Peningkatan Kompetensi" 	<?php if($pegawai->unit_kerja=="Seksi Peningkatan Kompetensi"){echo "selected";} ?>>Seksi Peningkatan Kompetensi</option>
            <option value="Manajemen"						<?php if($pegawai->unit_kerja=="Manajemen"){echo "selected";} ?>>Manajemen</option>
            <option value="Widyaiswara" 					<?php if($pegawai->unit_kerja=="Widyaiswara") {echo "selected";} ?>>Widyaiswara</option>
            <option value="Seksi Program dan Informasi" 	<?php if($pegawai->unit_kerja=="Seksi Program dan Informasi") {echo "selected";} ?>>Seksi Program DAN infromasi</option>
            <option value="Tenaga Kontrak" 					<?php if($pegawai->unit_kerja=="Tenaga Kontrak") {echo "selected";} ?>>Tenaga Kerja</option>
        </select>
    </div>
</div>

<div class="col-md-6">
	
	<div class="form-group">
        <label>Status</label>
        <select name="status" class="form-control">
            <option>-----</option>
            <option value="Active" 		<?php if($pegawai->unit_kerja=="Active") {echo "selected";} ?>>Aktif</option>
            <option value="Non Active" 	<?php if($pegawai->unit_kerja=="Non Active") {echo "selected";} ?>>Non Aktif</option>
        </select>
    </div>

	<div class="form-group">
		<input type="submit" name="submit" class="btn btn-success btn-lg" value="Simpan Data">
		<input type="reset" name="submit" class="btn btn-default btn-lg" value="reset">
	</div>
</div>

<?php echo form_close(); ?>