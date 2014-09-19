<div class="row">
	<div class="col-lg-12">
		<h3 class="page-header"><i class="fa fa-edit fa-fw"></i> Form Gejala Penyakit</h3>
	</div>
</div>
<div class="row">
	<div class="col-lg-6">
		<div class="panel panel-default">
			<div class="panel-body">
				<div class="row">
					<div class="col-lg-12">
						<?php echo form_open('gejala/form_update/'.$id, 'class="form-horizontal"')?>
							<div class="form-group">
								 <label class="col-lg-4">ID</label>
								<div class="col-md-8">
									<?php
										echo form_input(array('name'=>'id_gejala', 'class'=>'form-control', 'value'=>$id, 'readonly'=>'readonly'));
									?>
								</div>
							</div>
							<div class="form-group">
								 <label class="col-lg-4">Gejala<span class="text-danger">*</span></label>
								<div class="col-md-8">
									<?php
										echo form_textarea(array('name'=>'gejala', 'rows'=>'2', 'class'=>'form-control', 'value'=>set_value('gejala', $gejala)));
										echo form_error('gejala');
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
	</div>
</div>
