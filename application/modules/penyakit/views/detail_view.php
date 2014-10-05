<div class="row">
	<div class="col-lg-12">
		<h3 class="page-header"><i class="fa fa-info-circle fa-fw"></i> Detail Jenis Penyakit Sapi</h3>
	</div>
</div>
<div class="row">
	<div class="col-lg-6">
		<div class="panel panel-default">
			<div class="panel-body">
				<div class="row">
					<div class="col-lg-12">
						<form class="form-horizontal">
							<legend>
								<div class="btn-group pull-right">
									<?php
										if (!$this->session->userdata('id'))
										{
											echo anchor('penyakit/cetak_detail/'.$id, '<i class="fa fa-print"></i>', 'class="btn btn-xs" title="Cetak"');
										}
										else
										{
											echo anchor('penyakit/form_update/'.$id, '<i class="fa fa-edit"></i>', 'class="btn btn-xs" title="Edit"');
	                            			echo anchor('penyakit/cetak_detail/'.$id, '<i class="fa fa-print"></i>', 'class="btn btn-xs" title="Cetak"');
    	                        			echo '<a href="'.base_url().'penyakit/delete_penyakit/'.$id.'" onclick="return confirmModal(\'Anda akan menghapus?\',\''.base_url().'penyakit/delete_penyakit/'.$id.'\')" class="btn btn-xs" title="Hapus"><i class="fa fa-trash-o"></i></a>';	
										}
									?>
								</div>
							</legend>
							<div class="form-group">
								 <label class="col-lg-4">Penyakit</label>
								<div class="col-md-8">
									<p class="form-control-static"><?php echo $penyakit; ?></p>
								</div>
							</div>
							<div class="form-group">
								 <label class="col-lg-4">Deskripsi</label>
								<div class="col-md-8">
									<p class="form-control-static"><?php echo $deskripsi; ?></p>
								</div>
							</div>
							<div class="form-group">
								 <label class="col-lg-4">Gejala</label>
								<div class="col-md-8">
									<p class="form-control-static">
										<?php 
											$x = $this->penyakit_model->get_gejala($penyakit);
											foreach ($x as $x)
											{
												echo "* ".$x->gejala."<br>";
											}
										?>
									</p>
								</div>
							</div>
							<div class="form-group">
								 <label class="col-lg-4">Penanganan</label>
								<div class="col-md-8">
									<p class="form-control-static">
										<?php 
											$xx = $this->penyakit_model->get_solusi($penyakit);
											foreach ($xx as $xx)
											{
												echo "* ".$xx->solusi."<br>";
											}
										?>
									</p>
								</div>
							</div>
						</form>
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
