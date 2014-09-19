<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Administrator</title>
	<link rel="shortcut icon" href="<?php echo base_url(); ?>assets/favicon.ico">
	<link href="<?php echo base_url(); ?>assets/css/bootstrap.css" rel="stylesheet">
    <link href="<?php echo base_url(); ?>assets/css/font-awesome.css" rel="stylesheet">
    <link href="<?php echo base_url(); ?>assets/css/dataTables.bootstrap.css" rel="stylesheet">
    <link href="<?php echo base_url(); ?>assets/css/datepicker.css" rel="stylesheet">
    <link href="<?php echo base_url(); ?>assets/css/daterangepicker.css" rel="stylesheet">
	<link href="<?php echo base_url(); ?>assets/css/bootstrap-timepicker.css" rel="stylesheet">
	<link href="<?php echo base_url(); ?>assets/css/multi-select.css" rel="stylesheet">
	<link href="<?php echo base_url(); ?>assets/css/select2.css" rel="stylesheet">
    <link href="<?php echo base_url(); ?>assets/css/style.css" rel="stylesheet">
</head>
<body>
	<div id="wrapper">
		<nav class="navbar navbar-default navbar-fixed-top" role="navigation" style="margin-bottom: 0">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".sidebar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
				<?php echo anchor('', img('assets/img/logo.png'), 'class="navbar-brand"'); ?>
            </div>
			<ul class="nav navbar-top-links navbar-right">
				<li class="dropdown">
                    <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                        <i class="fa fa-user fa-fw"></i> <?php echo $this->session->userdata('nama'); ?>  <i class="fa fa-caret-down"></i>
                    </a>
                    <ul class="dropdown-menu dropdown-user">
                       	<li><?php echo anchor('auth/profile', '<i class="fa fa-user fa-fw"></i> User Profile'); ?></li>
                        <li class="divider"></li>
						<li><?php echo anchor('auth/logout', '<i class="fa fa-sign-out fa-fw"></i> Logout'); ?></li>
                    </ul>
				</li>
			</ul>
         	<div class="navbar-default navbar-static-side" role="navigation">
                <div class="sidebar-collapse">
                    <ul class="nav" id="side-menu">
                    	<li><?php echo anchor('', '<i class="fa fa-home fa-fw"></i> Beranda'); ?></li>
                    	<li><?php echo anchor('diagnosa', '<i class="fa fa-stethoscope fa-fw"></i> Diagnosa'); ?></li>
                    	<li><?php echo anchor('penyakit', '<i class="fa fa-stethoscope fa-fw"></i> Penyakit'); ?></li>
                        <li><?php echo anchor('gejala', '<i class="fa fa-stethoscope fa-fw"></i> Gejala'); ?></li>
                        <li><?php echo anchor('solusi', '<i class="fa fa-stethoscope fa-fw"></i> Solusi'); ?></li>
						<li><?php echo anchor('relasi', '<i class="fa fa-stethoscope fa-fw"></i> Relasi'); ?></li>
						<li><?php echo anchor('aturan', '<i class="fa fa-stethoscope fa-fw"></i> Aturan'); ?></li>
						<li><?php echo anchor('laporan', '<i class="fa fa-print fa-fw"></i> Laporan'); ?></li>
					</ul>
                </div>
            </div>
        </nav>

        <div id="page-wrapper">
        	<?php 
				//Display Alert
				if($this->session->flashdata('alert'))
				{
					echo $this->session->flashdata('alert');	
				}
				
				//Page Content
				echo $content; 
			?>
		</div>
	</div>

    <script src="<?php echo base_url(); ?>assets/js/jquery-latest.js"></script>
    <script src="<?php echo base_url(); ?>assets/js/bootstrap.js"></script>
    <script src="<?php echo base_url(); ?>assets/js/jquery.metisMenu.js"></script>
    <script src="<?php echo base_url(); ?>assets/js/bootstrap-datepicker.js"></script>
    <script src="<?php echo base_url(); ?>assets/js/common.js"></script>
    <?php if(isset($script)) echo $script; ?>
   
</body>
</html>
