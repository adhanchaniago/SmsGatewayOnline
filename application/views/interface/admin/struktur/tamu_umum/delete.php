<button class="btn btn-danger btn-xs" data-toggle="modal" data-target="#Delete<?php echo $tamu_umum->id?>"">
<i class="fa fa-trash-o"></i> Hapus
</button>
<div class="modal fade" id="Delete<?php echo $tamu_umum->id?>"" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true"> &times;</button>
                <h4 class="modal-title" id="myModalLabel">Hapus User <?php echo $tamu_umum->nama; ?></h4>
            </div>
            <div class="modal-body">
                <p class="alert alert-danger"><i class="fa fa-warning"></i> Yakin ingin menghapus <?php echo $tamu_umum->nama; ?> dari database?</p>
            </div>
            <div class="modal-footer">
                <a href="<?php echo base_url('admin/tamu_umum/delete/'.$tamu_umum->id) ?>" class="btn btn-danger"><i class="fa fa-trash-o"> </i> Hapus</a>
                <button type="button" class="btn btn-success" data-dismiss="modal"><i class="fa fa-times"></i> Close</button>
            </div>
        </div>
    </div>
</div>
