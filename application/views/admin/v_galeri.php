<!doctype html>
<html class="fixed sidebar-left-collapsed">
	<head>

		<!-- Basic -->
		<meta charset="UTF-8">

		<title>Galeri</title>
		<meta name="keywords" content="HTML5 Admin Template" />
		<meta name="description" content="Porto Admin - Responsive HTML5 Template">
		<meta name="author" content="okler.net">

		<!-- Mobile Metas -->
		<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />

		<!-- Web Fonts  -->
		<link href="http://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700,800|Shadows+Into+Light" rel="stylesheet" type="text/css">

		<!-- Vendor CSS -->
		<link rel="stylesheet" href="<?php echo base_url().'theme/assets/vendor/bootstrap/css/bootstrap.css'?>" />
		<link rel="stylesheet" href="<?php echo base_url().'theme/assets/vendor/font-awesome/css/font-awesome.css'?>" />
		<link rel="stylesheet" href="<?php echo base_url().'theme/assets/vendor/magnific-popup/magnific-popup.css'?>" />
		<link rel="stylesheet" href="<?php echo base_url().'theme/assets/vendor/bootstrap-datepicker/css/datepicker3.css'?>" />

		<!-- Specific Page Vendor CSS -->
		<link rel="stylesheet" href="<?php echo base_url().'theme/assets/vendor/isotope/jquery.isotope.css'?>" />

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
		<section class="body">

			<!-- start: header -->
			<?php $this->load->view('admin/v_header'); ?>
			<!-- end: header -->

			<div class="inner-wrapper">
				<?php $this->load->view('admin/v_sidebar'); ?>
				<!-- end: sidebar -->

				<section role="main" class="content-body">
					<header class="page-header">
						<h2>Galeri</h2>

						<div class="right-wrapper pull-right">
							<ol class="breadcrumbs">
								<li>
									<a href="<?= base_url('Dashboard'); ?>">
										<i class="fa fa-home"></i>
									</a>
								</li>
								<li><span>Galeri</span></li>
							</ol>

							<a class="sidebar-right-toggle" data-open="sidebar-right"><i class="fa fa-chevron-left"></i></a>
						</div>
					</header>

					<!-- start: page -->
					<section class="content-with-menu content-with-menu-has-toolbar media-gallery">
						<div class="content-with-menu-container">
							<menu id="content-menu" class="inner-menu" role="menu">
							</menu>
							<div class="inner-body mg-main">
								<div class="row mg-files">
									<div class="isotope-item document col-sm-6 col-md-4 col-lg-3">
										<div class="thumbnail">
											<div class="thumb-preview">
												<a class="thumb-image" href="<?php echo base_url().'assets/images/Anggur.jpg'?>">
													<img src="<?php echo base_url().'assets/images/Anggur.jpg'?>" class="img-responsive">
												</a>
											</div>
											<h5 class="mg-title text-semibold">Angur<small> (Grape)</small></h5>
											<div class="mg-description">
												<small class="pull-left text-muted">Rp30.000</small>
											</div>
										</div>
									</div>
									<div class="isotope-item col-sm-6 col-md-4 col-lg-3">
										<div class="thumbnail">
											<div class="thumb-preview">
												<a class="thumb-image" href="<?php echo base_url().'assets/images/Apel.jpg'?>">
													<img src="<?php echo base_url().'assets/images/Apel.jpg'?>" class="img-responsive">
												</a>
											</div>
											<h5 class="mg-title text-semibold">Apel<small> (Apple)</small></h5>
											<div class="mg-description">
												<small class="pull-left text-muted">Rp15.000</small>
											</div>
										</div>
									</div>
									<div class="isotope-item video col-sm-6 col-md-4 col-lg-3">
										<div class="thumbnail">
											<div class="thumb-preview">
												<a class="thumb-image" href="<?php echo base_url().'assets/images/Jeruk.jpg'?>">
													<img src="<?php echo base_url().'assets/images/Jeruk.jpg'?>" class="img-responsive">
												</a>
											</div>
											<h5 class="mg-title text-semibold">Jeruk<small> (Orange)</small></h5>
											<div class="mg-description">
												<small class="pull-left text-muted">Rp25.000</small>
											</div>
										</div>
									</div>
									<div class="isotope-item image col-sm-6 col-md-4 col-lg-3">
										<div class="thumbnail">
											<div class="thumb-preview">
												<a class="thumb-image" href="<?php echo base_url().'assets/images/Mangga.jpg'?>">
													<img src="<?php echo base_url().'assets/images/Mangga.jpg'?>" class="img-responsive">
												</a>
											</div>
											<h5 class="mg-title text-semibold">Mangga<small> (Mango)</small></h5>
											<div class="mg-description">
												<small class="pull-left text-muted">Rp20.000</small>
											</div>
										</div>
									</div>
									<div class="isotope-item video col-sm-6 col-md-4 col-lg-3">
										<div class="thumbnail">
											<div class="thumb-preview">
												<a class="thumb-image" href="<?php echo base_url().'assets/images/Nanas.jpg'?>">
													<img src="<?php echo base_url().'assets/images/Nanas.jpg'?>" class="img-responsive">
												</a>
											</div>
											<h5 class="mg-title text-semibold">Nanas<small> (Pineapple)</small></h5>
											<div class="mg-description">
												<small class="pull-left text-muted">Rp12.000</small>
											</div>
										</div>
									</div>
									<div class="isotope-item document col-sm-6 col-md-4 col-lg-3">
										<div class="thumbnail">
											<div class="thumb-preview">
												<a class="thumb-image" href="<?php echo base_url().'assets/images/Pisang.jpg'?>">
													<img src="<?php echo base_url().'assets/images/Pisang.jpg'?>" class="img-responsive">
												</a>
											</div>
											<h5 class="mg-title text-semibold">Pisang<small> (Banana)</small></h5>
											<div class="mg-description">
												<small class="pull-left text-muted">Rp14.000</small>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</section>
					<!-- end: page -->
				</section>
			</div>

			<?php $this->load->view('admin/v_sidebar2'); ?>
		</section>

		<!-- Vendor -->
		<script src="<?php echo base_url().'theme/assets/vendor/jquery/jquery.js'?>"></script>
		<script src="<?php echo base_url().'theme/assets/vendor/jquery-browser-mobile/jquery.browser.mobile.js'?>"></script>
		<script src="<?php echo base_url().'theme/assets/vendor/bootstrap/js/bootstrap.js'?>"></script>
		<script src="<?php echo base_url().'theme/assets/vendor/nanoscroller/nanoscroller.js'?>"></script>
		<script src="<?php echo base_url().'theme/assets/vendor/bootstrap-datepicker/js/bootstrap-datepicker.js'?>"></script>
		<script src="<?php echo base_url().'theme/assets/vendor/magnific-popup/magnific-popup.js'?>"></script>
		<script src="<?php echo base_url().'theme/assets/vendor/jquery-placeholder/jquery.placeholder.js'?>"></script>

		<!-- Specific Page Vendor -->
		<script src="<?php echo base_url().'theme/assets/vendor/isotope/jquery.isotope.js'?>"></script>

		<!-- Theme Base, Components and Settings -->
		<script src="<?php echo base_url().'theme/assets/javascripts/theme.js'?>"></script>

		<!-- Theme Custom -->
		<script src="<?php echo base_url().'theme/assets/javascripts/theme.custom.js'?>"></script>

		<!-- Theme Initialization Files -->
		<script src="<?php echo base_url().'theme/assets/javascripts/theme.init.js'?>"></script>


		<!-- Examples -->
		<script src="<?php echo base_url().'theme/assets/javascripts/pages/examples.mediagallery.js'?>" /></script>

	</body>
</html>