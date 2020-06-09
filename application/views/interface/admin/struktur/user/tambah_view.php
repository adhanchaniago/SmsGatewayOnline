<?php 
//notofokasi kalau input error
echo validation_errors('<div class="alert alert-danger"><i class="fa fa-warning"></i> ','</div>');

echo form_open(base_url('index.php/admin/user/tambah_data'));
?>
<div class="col-md-6">
	<div class="form-group">
		<label for="">Id Admin</label>
		<input type="text" name="id_admin" class="form-control" placeholder="Id Admin" value="<?php echo set_value('id_admin') ?>" required="required">
	</div>

	<div class="form-group">
		<label for="">Nama</label>
		<input type="text" name="nama" class="form-control" placeholder="nama" value="<?php echo set_value('nama') ?>" required="required">
	</div>

	<div class="form-group">
		<label for="">Email</label>
		<input type="email" name="email" class="form-control" placeholder="Email" value="<?php echo set_value('email') ?>" required="required">
    </div>

    <div class="form-group">
		<label for="">Password</label>
		<input type="password" name="password" class="form-control" placeholder="Password" value="<?php echo set_value('password') ?>" required="required">
	</div>
	 
    <div class="form-group">
        <label>Akses Level</label>
        <select name="akses_level" class="form-control">
            <option>-----</option>
            <option value="Admin">Admin</option>
            <option value="User">User</option>
        </select>
    </div>
    
</div>

<div class="col-md-6">
    <div class="form-group">
		<label for="">Keterangan</label>
		<input type="text" name="keterangan" class="form-control" placeholder="Keterangan" value="<?php echo set_value('keterangan') ?>" required="required">
	</div>

 
	<div class="form-group">
		<input type="submit" name="submit" class="btn btn-success btn-lg" value="Simpan Data">
		<input type="reset" name="submit" class="btn btn-default btn-lg" value="reset">
	</div>
</div>

<?php echo form_close(); ?>