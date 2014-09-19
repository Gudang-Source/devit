<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>404 Page Not Found</title>
	<link rel="shortcut icon" href="<?php echo base_url(); ?>assets/favicon.ico">
	<link href="<?php echo base_url(); ?>assets/css/bootstrap.css" rel="stylesheet">
    <link href="<?php echo base_url(); ?>assets/css/font-awesome.css" rel="stylesheet">
    <link href="<?php echo base_url(); ?>assets/css/style.css" rel="stylesheet">
</head>
<body class="login-bg">
	<div class="container">
		<div class="row">
            <div class="col-md-4 col-md-offset-4">
               	<div class="error-panel">
					<h1><i class="fa fa-unlink"></i> 404</h1>
					<h2>It looks like you're lost.</h2>
					<?php echo anchor('', 'Go to the homepage...', 'class="btn btn-lg"'); ?>
				</div>
            </div>
        </div>
    </div>
</body>
</html>
