<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Login Page</title>
	<link rel="shortcut icon" href="<?php echo base_url(); ?>assets/favicon.ico">
	<link href="<?php echo base_url(); ?>assets/css/bootstrap.css" rel="stylesheet">
    <link href="<?php echo base_url(); ?>assets/css/font-awesome.css" rel="stylesheet">
    <link href="<?php echo base_url(); ?>assets/css/style.css" rel="stylesheet">
</head>
<body class="login-bg">
	<div class="container">
		<div class="row">
			<div class="col-md-4 col-md-offset-4">
				<div class="login-heading"><?php echo img('assets/img/homelogo.png'); ?></div>			
			</div>
            <div class="col-md-4 col-md-offset-4">
                <div class="login-panel">
                	<div class="panel-body">
                		<?php echo $alert; ?>
                        <?php echo form_open('auth/login'); ?>
                            <fieldset>
                                <div class="form-group">
                                	<?php echo form_input(array('class'=>'form-control', 'placeholder'=>'Username', 'name'=>'username')); ?>
								</div>
                                <div class="form-group">
                                    <?php echo form_password(array('class'=>'form-control', 'placeholder'=>'Password', 'name'=>'password')); ?>
                                </div>
                                <button class="btn btn-info btn-block" type="submit">Login <i class="fa fa-sign-in"></i></button>
						<?php echo form_close(); ?>
					</div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>
