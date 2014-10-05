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
							<div class="form-group">
								 <label class="col-lg-4">No Diagnosa</label>
								<div class="col-md-8">
									<p class="form-control-static"><?php echo $no_diagnosa; ?></p>
								</div>
							</div>
							<div class="form-group">
								 <label class="col-lg-4">Nama</label>
								<div class="col-md-8">
									<p class="form-control-static"><?php echo $nama; ?></p>
								</div>
							</div>
							<div class="form-group">
								 <label class="col-lg-4">Kelompok</label>
								<div class="col-md-8">
									<p class="form-control-static"><?php echo $kelompok; ?></p>
								</div>
							</div>
							<div class="form-group">
								 <label class="col-lg-4">Tanggal</label>
								<div class="col-md-8">
									<p class="form-control-static"><?php echo format_dmy($tanggal); ?></p>
								</div>
							</div>
							<div class="form-group">
								 <label class="col-lg-4">Hasil</label>
								<div class="col-md-8">
									<?php 
										$r = $this->db->get_where('matrix', array('no_diagnosa'=>$no_diagnosa, 'skor'=>$this->diagnosa_model->get_skor($no_diagnosa)))->row_array();
										$k = $this->db->get_where('penyakit', array('id'=>$r['id_penyakit']))->row_array();
										$l = $this->db->get_where('mt_aturan', array('penyakit'=>$k['penyakit']))->row_array();
									?>
									<p class="form-control-static">Kemungkinan mengalami <label class="label label-info"><?php echo $k['penyakit']; ?></label></p>
								</div>
							</div>
							<div class="form-group">
								 <label class="col-lg-4">Deskripsi</label>
								<div class="col-md-8">
									<p class="form-control-static"><?php echo $k['deskripsi']; ?></p>
								</div>
							</div>
							<div class="form-group">
								 <label class="col-lg-4">Solusi</label>
								<div class="col-md-8">
									<p class="form-control-static"><?php echo $l['solusi']; ?></p>
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
			<img src="<?php echo base_url('userfiles/'.$k['img']);?>">
		</div>
	</div>
</div>
