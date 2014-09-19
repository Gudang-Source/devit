<div class="row">
	<div class="col-lg-12">
		<h3 class="page-header"><i class="fa fa-edit fa-fw"></i> Form Jenis Penyakit</h3>
	</div>
</div>
<div class="row">
	<div class="col-lg-6">
		<div class="panel panel-default">
			<div class="panel-body">
				<div class="row">
					<div class="col-lg-12">
						<?php echo form_open_multipart('penyakit/form_update/'.$id, 'class="form-horizontal"')?>
							<div class="form-group">
								 <label class="col-lg-4">ID</label>
								<div class="col-md-8">
									<?php
										echo form_input(array('name'=>'id_penyakit', 'class'=>'form-control', 'value'=>$id, 'readonly'=>'readonly'));
									?>
								</div>
							</div>
							<div class="form-group">
								 <label class="col-lg-4">Penyakit<span class="text-danger">*</span></label>
								<div class="col-md-8">
									<?php
										echo form_input(array('name'=>'penyakit', 'class'=>'form-control', 'value'=>set_value('penyakit', $penyakit)));
										echo form_error('penyakit');
									?>
								</div>
							</div>
							<div class="form-group">
								 <label class="col-lg-4">Deskripsi<span class="text-danger">*</span></label>
								<div class="col-md-8">
									<?php
										echo form_textarea(array('name'=>'deskripsi', 'rows'=>'2', 'class'=>'form-control', 'value'=>set_value('deskripsi', $deskripsi)));
										echo form_error('deskripsi');
									?>
								</div>
							</div>
							<div class="form-group">
								 <label class="col-lg-4">Gambar<span class="text-danger">*</span></label>
								<div class="col-md-8">
									<?php
										echo form_upload(array('name'=>'img')); 
										echo $this->upload->display_errors('<span class="text-danger">', '</span>');
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
	<div class="col-lg-6">
		<div class="img-thumbnail">
			<img src="<?php echo base_url('userfiles/'.$img);?>">
		</div>
	</div>
</div>
