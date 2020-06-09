<?php 
//notofokasi kalau input error
echo validation_errors('<div class="alert alert-danger"><i class="fa fa-warning"></i> ','</div>');

echo form_open(base_url('index.php/admin/user/edit/'.$user->id));
?>
<div class="col-md-6">
	<div class="form-group">
		<label for="">Id Admin</label>
		<input type="text" name="id_admin" class="form-control" placeholder="Id Admin" value="<?php echo $user->id_admin ?>" required="required">
	</div>

	<div class="form-group">
		<label for="">Nama</label>
		<input type="text" name="nama" class="form-control" placeholder="nama" value="<?php echo $user->nama ?>" required="required">
	</div>

	<div class="form-group">
		<label for="">Email</label>
		<input type="email" name="email" class="form-control" placeholder="Email" value="<?php echo $user->email ?>" required="required">
    </div>

    <div class="form-group">
		<label for="">Password</label>
		<input type="password" name="password" class="form-control" placeholder="Password" value="<?php echo $user->password ?>" required="required">
	</div>
	 
    <div class="form-group">
        <label>Akses Level</label>
        <select name="akses_level" class="form-control">
            <option>-----</option>
            <option value="Admin" <?php if($user->akses_level=="Admin") {echo "selected";} ?> >Admin</option>
            <option value="User"  <?php if($user->akses_level=="User") {echo "selected";} ?> >User</option>
        </select>
    </div>
    
</div>

<div class="col-md-6">
    <div class="form-group">
		<label for="">Keterangan</label>
		<input type="text" name="keterangan" class="form-control" placeholder="Keterangan" value="<?php echo $user->keterangan ?>">
	</div>

 
	<div class="form-group">
		<input type="submit" name="submit" class="btn btn-success btn-lg" value="Simpan Data">
		<input type="reset" name="submit" class="btn btn-default btn-lg" value="reset">
	</div>
</div>

<?php echo form_close(); ?>