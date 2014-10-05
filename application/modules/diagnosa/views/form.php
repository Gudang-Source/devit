<div class="row">
	<div class="col-lg-12">
		<h3 class="page-header"><i class="fa fa-stethoscope fa-fw"></i> Form Gejala Penyakit</h3>
	</div>
</div>
<div class="row">
	<div class="col-lg-12">
		<div class="panel panel-default">
			<div class="panel-body">
				<div class="row">
					<?php echo form_open('diagnosa/check', 'class="form-horizontal"')?>
					<div class="col-lg-6">
						<div class="form-group">
							 <label class="col-lg-4">No<span class="text-danger">*</span></label>
							<div class="col-md-8">
								<?php echo form_input(array('name'=>'no_diagnosa', 'class'=>'form-control', 'value'=>$no_diagnosa, 'readonly'=>'readonly')); ?>
							</div>
						</div>
						<div class="form-group">
							 <label class="col-lg-4">Nama<span class="text-danger">*</span></label>
							<div class="col-md-8">
								<?php
									echo form_input(array('name'=>'nama', 'class'=>'form-control', 'value'=>set_value('nama')));
									echo form_error('nama');
								?>
							</div>
						</div>
						<div class="form-group">
							 <label class="col-lg-4">Kelompok<span class="text-danger">*</span></label>
							<div class="col-md-8">
								<?php
									echo form_input(array('name'=>'kelompok', 'class'=>'form-control', 'value'=>set_value('kelompok')));
									echo form_error('kelompok');
								?>
							</div>
						</div>
						<div class="form-group">
							 <label class="col-lg-4">Tgl. Konsultasi<span class="text-danger">*</span></label>
							<div class="col-md-8">
								<?php
									echo form_input(array('name'=>'tanggal', 'class'=>'form-control date-picker', 'value'=>set_value('tanggal')));
									echo form_error('tanggal');
								?>
							</div>
						</div>
					</div>
					<div class="col-lg-12">
						<div class="form-group">
							 <label class="col-lg-2">Gejala<span class="text-danger">*</span></label>
							<div class="col-md-10">
								<?php echo form_dropdown('gejala[]', $opt_gejala, '','class="multiselect" multiple="multiple"'); ?>
							</div>
						</div>
						<div class="pull-left"><span class="text-danger">*</span>Wajib diisi</div>
						<button type="submit" class="btn btn-info pull-right"><i class="fa fa-check-circle"></i> Simpan</button>	
					</div>
					<?php echo form_close(); ?>
				</div>
			</div>
		</div>
	</div>
</div>
