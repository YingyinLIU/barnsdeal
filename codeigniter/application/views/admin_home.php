<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>BARNSDEAL</title>
    <link href="<?php echo site_url('assets/css/bootstrap.css'); ?>" rel="stylesheet">
    <link href="<?php echo site_url('assets/css/admin_home.css'); ?>" rel="stylesheet">
	<style> body { padding-top: 50px; background-color: white }
			
	 </style>
</head>

<body>
	<?php $this->load->view('nav_bar'); ?>
	<div class="sider_content">
			<?php $this->load->view('side_bar'); ?>
		</div>
	<div class="main_container">
		<div class="content_">
			<?php $this->load->view($main_content); ?>
		</div>
	</div>
	<script src="<?php echo site_url('assets/javascript/jquery.min.js')?>"></script>
	<script src="<?php echo site_url('assets/javascript/bootstrap.bundle.js')?>"></script>
</body>
</html>


