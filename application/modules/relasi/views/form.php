<div class="row">
	<div class="col-lg-12">
		<h3 class="page-header"><i class="fa fa-edit fa-fw"></i> Form Relasi Penyakit & Gejala</h3>
	</div>
</div>
<div class="row">
	<div class="col-lg-6">
		<div class="panel panel-default">
			<div class="panel-body">
				<?php echo form_open('relasi/form/'.$id, 'class="form-horizontal"')?>
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
						<label class="col-lg-3">Gejala<span class="text-danger">*</span></label>
						<div class="col-md-9">
							<?php 
								echo form_dropdown('id_gejala', $opt_gejala, set_value('id_gejala', $id_gejala), 'class="select1"', 'multiple');
								echo form_error('id_gejala');
							?>
						</div>
					</div>
					<div class="form-group">
						<label class="col-lg-3">CF<span class="text-danger">*</span></label>
						<div class="col-md-5">
							<?php 
								echo form_input(array('name'=>'cf', 'value'=>set_value('cf', $cf), 'class'=>'form-control'));
								echo form_error('cf');
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