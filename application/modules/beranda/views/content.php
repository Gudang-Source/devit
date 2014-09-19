<div class="row">
	<div class="col-lg-12">
		<div class="row">
			<div class="col-lg-3">
				<div class="panel panel-info">
					<div class="panel-heading">
						<div class="row">
							<div class="col-xs-6"><i class="fa fa-info-circle fa-5x"></i></div>
							<div class="col-xs-6 text-right">
								<p class="announcement-heading"><?php echo $this->db->count_all('pasien'); ?></p>
								<p class="announcement-text">Pasien</p>
							</div>
						</div>
					</div>
					<a href="<?php echo base_url('pasien'); ?>">
					<div class="panel-footer announcement-bottom">
						<div class="row">
							<div class="col-xs-6">Detail</div>
							<div class="col-xs-6 text-right"><i class="fa fa-arrow-circle-right"></i></div>
						</div>
					</div>
					</a>
				</div>
			</div>
			<div class="col-lg-3">
				<div class="panel panel-warning">
					<div class="panel-heading">
						<div class="row">
							<div class="col-xs-6"><i class="fa fa-info-circle fa-5x"></i></div>
							<div class="col-xs-6 text-right">
								<p class="announcement-heading"><?php echo $this->db->count_all('penyakit'); ?></p>
								<p class="announcement-text">Penyakit</p>
							</div>
						</div>
					</div>
					<a href="<?php echo base_url('penyakit'); ?>">
					<div class="panel-footer announcement-bottom">
						<div class="row">
							<div class="col-xs-6">Detail</div>
							<div class="col-xs-6 text-right"><i class="fa fa-arrow-circle-right"></i></div>
						</div>
					</div>
					</a>
				</div>
			</div>
			<div class="col-lg-3">
				<div class="panel panel-danger">
					<div class="panel-heading">
						<div class="row">
							<div class="col-xs-6"><i class="fa fa-info-circle fa-5x"></i></div>
							<div class="col-xs-6 text-right">
								<p class="announcement-heading"><?php echo $this->db->count_all('gejala'); ?></p>
								<p class="announcement-text">Gejala</p>
							</div>
						</div>
					</div>
					<a href="<?php echo base_url('gejala'); ?>">
					<div class="panel-footer announcement-bottom">
						<div class="row">
							<div class="col-xs-6">Detail</div>
							<div class="col-xs-6 text-right"><i class="fa fa-arrow-circle-right"></i></div>
						</div>
					</div>
					</a>
				</div>
			</div>
			<div class="col-lg-3">
				<div class="panel panel-success">
					<div class="panel-heading">
						<div class="row">
							<div class="col-xs-6"><i class="fa fa-info-circle fa-5x"></i></div>
							<div class="col-xs-6 text-right">
								<p class="announcement-heading"><?php echo $this->db->count_all('solusi'); ?></p>
								<p class="announcement-text">Solusi</p>
							</div>
						</div>
					</div>
					<a href="<?php echo base_url('solusi'); ?>">
					<div class="panel-footer announcement-bottom">
						<div class="row">
							<div class="col-xs-6">Detail</div>
							<div class="col-xs-6 text-right"><i class="fa fa-arrow-circle-right"></i></div>
						</div>
					</div>
					</a>
				</div>
			</div>
        </div>
        <div class="jumbotron">
          <p>Sistem Informasi Pengambilan Keputusan Jenis Penyakit Hewan Ternak Sapi di Saung <b>AL-BAROKAH</b></p>
       </div>
    </div>
</div>
