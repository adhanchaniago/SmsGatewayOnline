<p><a href="<?php echo base_url('index.php/admin/pegawai/tambah_data') ?>" class="btn btn-success">
<i class="fa fa-plus"> </i> Tambah</a></p>

<?php 
//notifikassi
if($this->session->flashdata('sukses')){
	echo '<div class="alert alert-success"><i class="fa fa-check"></i>'; 
	echo $this->session->flashdata('sukses');
	echo '</div>';
}
?>

<table class="table table-striped table-bordered table-hover" id="dataTables-example">
<thead>
    <tr>
    <th>No</th>
    <th width="15%"><center>Id Absen</center></th>
    <th width ="14%"><center>Nama Karyawan</center></th>
    <th><center>Unit Kerja</center></th>
    <th><center>Status</center></th>
    <th><center>Data Entry</center></th>
    <th width = "14%">Action</th>
    </tr>
</thead>
<tbody>

<?php $i = 1; foreach($pegawai as $pegawai) {?>
    <tr>
        <td><?php echo $i++; ?></td>
        <td><?php echo $pegawai->id_absen; ?></td>
        <td><?php echo $pegawai->nama_karyawan; ?></td>               
        <td><?php echo $pegawai->unit_kerja; ?></td>
        <td><?php echo $pegawai->status; ?></td>
        <td><?php echo $pegawai->date;?> </td>
        <td>
            <a href="<?php echo base_url('index.php/admin/pegawai/edit/'.$pegawai->id) ?>" class="btn btn-warning btn-xs"><i class="fa fa-edit"></i> Edit</a>
            <?php include('delete_view.php') ?>
        </td>
    </tr>
<?php } ?>

</tbody>
</table>
