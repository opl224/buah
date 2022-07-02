<!doctype html>
<html class="fixed">
	<head>

		<!-- Basic -->
		<meta charset="UTF-8">

		<title>Profile</title>
		<meta name="keywords" content="HTML5 Admin Template" />
		<meta name="description" content="Porto Admin - Responsive HTML5 Template">
		<meta name="author" content="okler.net">

		<!-- Mobile Metas -->
		<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />

		<!-- Web Fonts  -->
		<link href="http://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700,800|Shadows+Into+Light" rel="stylesheet" type="text/css'?>">

		<!-- Vendor CSS -->
		<link rel="stylesheet" href="<?php echo base_url().'theme/assets/vendor/bootstrap/css/bootstrap.css'?>" />
		<link rel="stylesheet" href="<?php echo base_url().'theme/assets/vendor/font-awesome/css/font-awesome.css'?>" />
		<link rel="stylesheet" href="<?php echo base_url().'theme/assets/vendor/magnific-popup/magnific-popup.css'?>" />
		<link rel="stylesheet" href="<?php echo base_url().'theme/assets/vendor/bootstrap-datepicker/css/datepicker3.css'?>" />

		<!-- Theme CSS -->
		<link rel="stylesheet" href="<?php echo base_url().'theme/assets/stylesheets/theme.css'?>" />

		<!-- Skin CSS -->
		<link rel="stylesheet" href="<?php echo base_url().'theme/assets/stylesheets/skins/default.css'?>" />

		<!-- Theme Custom CSS -->
		<link rel="stylesheet" href="<?php echo base_url().'theme/assets/stylesheets/theme-custom.css'?>">

		<!-- Head Libs -->
		<script src="<?php echo base_url().'theme/assets/vendor/modernizr/modernizr.js'?>"></script>

	</head>
	<body>
		<!-- start: page -->
		<section class="body-sign body-locked">
			<div class="center-sign">
				<div class="panel panel-sign">
					<div class="panel-body">
						<form action="<?php echo base_url(); ?>Dashboard" method="post">
							<div class="current-user text-center">
								<img src="<?php echo base_url().'assets/images/user.jpg'?>" class="img-circle user-image" />
								<h2 class="user-name text-dark m-none">Admin</h2>
								<h6 class="text-dark">
									<p class="user-email m-none">Admin@bind.com</p></h6>
								<h5 class="user-name text-dark m-none">Tentang</h5>
									<p>Saya sangat suka sekali dengan buah. Terutama buah yang ditanam di negeri sendiri
										karena menghasilkan rasa khas tersendiri.
									</p>
							</div>
							<div class="row">
								<div class="text-right">
									<button type="submit" class="btn btn-primary">Kembali</button>
								</div>
							</div>
							<div class="row">
							</div>
						</form>
					</div>
				</div>
			</div>
		</section>
		<!-- end: page -->

		<!-- Vendor -->
		<script src="<?php echo base_url().'theme/assets/vendor/jquery/jquery.js'?>"></script>
		<script src="<?php echo base_url().'theme/assets/vendor/jquery-browser-mobile/jquery.browser.mobile.js'?>"></script>
		<script src="<?php echo base_url().'theme/assets/vendor/bootstrap/js/bootstrap.js'?>"></script>
		<script src="<?php echo base_url().'theme/assets/vendor/nanoscroller/nanoscroller.js'?>"></script>
		<script src="<?php echo base_url().'theme/assets/vendor/bootstrap-datepicker/js/bootstrap-datepicker.js'?>"></script>
		<script src="<?php echo base_url().'theme/assets/vendor/magnific-popup/magnific-popup.js'?>"></script>
		<script src="<?php echo base_url().'theme/assets/vendor/jquery-placeholder/jquery.placeholder.js'?>"></script>

		<!-- Theme Base, Components and Settings -->
		<script src="<?php echo base_url().'theme/assets/javascripts/theme.js'?>"></script>

		<!-- Theme Custom -->
		<script src="<?php echo base_url().'theme/assets/javascripts/theme.custom.js'?>"></script>

		<!-- Theme Initialization Files -->
		<script src="<?php echo base_url().'theme/assets/javascripts/theme.init.js'?>"></script>

	</body>
</html>