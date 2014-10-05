<div class="row">
	<div class="col-lg-12">
		<h3 class="page-header"><i class="fa fa-copy fa-fw"></i> Laporan</h3>
	</div>
</div>
<div class="row">
	<div class="col-lg-offset-4 col-lg-4">
		<div class="panel panel-default">
			<div class="panel-body">
                <?php echo form_open('laporan/printout'); ?>
					<div class="input-group">
						<span class="input-group-addon"><i class="fa fa-calendar"></i></span>
						<input class="form-control" id="DaterangePicker" name="tanggal" type="text">
					</div>
					<hr>
					<button type="submit" class="btn btn-info"><i class="fa fa-print"></i> Cetak</button>
					<?php echo anchor('', '<i class="fa  fa-mail-reply"></i> Kembali', 'class="btn pull-right"'); ?>					
				<?php echo form_close(); ?>
          	</div>
        </div>
    </div>
</div>
