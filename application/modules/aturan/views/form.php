<div class="row">
	<div class="col-lg-12">
		<h3 class="page-header"><i class="fa fa-edit fa-fw"></i> Form Aturan Penyakit & Solusi</h3>
	</div>
</div>
<div class="row">
	<div class="col-lg-6">
		<div class="panel panel-default">
			<div class="panel-body">
				<?php echo form_open('aturan/form/'.$id, 'class="form-horizontal"')?>
					<div class="form-group">
						<label class="col-lg-3">Penyakit<span class="text-danger">*</span></label>
						<div class="col-md-9">
							<?php 
								echo form_dropdown('id_penyakit', $opt_penyakit, set_value('id_penyakit', $id_penyakit), 'class="form-control"');
								echo form_error('id_penyakit');
							?>
						</div>
					</div>
					<div class="form-group">
						<label class="col-lg-3">Solusi<span class="text-danger">*</span></label>
						<div class="col-md-9">
							<?php 
								echo form_dropdown('id_solusi', $opt_solusi, set_value('id_solusi', $id_solusi), 'class="select1"', 'multiple');
								echo form_error('id_solusi');
							?>
						</div>
					</div>
					<div class="pull-left"><span class="text-danger">*</span>Wajib diisi</div>
					<button type="submit" class="btn btn-info pull-right"><i class="fa fa-check-circle"></i> Simpan</button>
				<?php echo form_close(); ?>
			</div>
		</div>
	</div>
</div>