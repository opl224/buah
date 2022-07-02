<!doctype html>
<html class="fixed">
	<head>

		<!-- Basic -->
		<meta charset="UTF-8">

		<title>Tambah Pesanan</title>
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
		<link rel="stylesheet" href="<?php echo base_url().'theme/assets/vendor/bootstrap-fileupload/bootstrap-fileupload.min.css'?>" />

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
            <?php $this->load->view('admin/v_header') ?>
			<!-- end: header -->

			<div class="inner-wrapper">
				<!-- start: sidebar -->
            <?php $this->load->view('admin/v_sidebar') ?>
				<!-- end: sidebar -->

				<section role="main" class="content-body">
					<header class="page-header">
						<h2>Tambah Pesanan</h2>

						<div class="right-wrapper pull-right">
							<ol class="breadcrumbs">
								<li>
									<a href="<?= base_url('Dashboard'); ?>">
										<i class="fa fa-home"></i>
									</a>
								</li>
								<li><span>Pesanan</span></li>
								<li><span>Tambah Pesanan</span></li>
							</ol>

							<a class="sidebar-right-toggle" data-open="sidebar-right"><i class="fa fa-chevron-left"></i></a>
						</div>
					</header>

					<!-- start: page -->
						<div class="row">
							<div class="col-lg-12">
								<section class="panel">
									<header class="panel-heading">
										<div class="panel-actions">
											<a href="#" class="fa fa-caret-down"></a>
											<a href="#" class="fa fa-times"></a>
										</div>

										<h2 class="panel-title">Tambah Pesanan</h2>
									</header>
									<div class="panel-body">
										<form action="<?php echo base_url() ?>Pesanan/Simpan_pesanan" method="post">
										<div class="form-horizontal form-bordered">
											<div class="form-group">
												<label class="col-md-3 control-label" for="inputDefault">Nama Pemesan</label>
												<div class="col-md-6">
													<input type="text" class="form-control" name="xnama" id="inputDefault" placeholder="Nama Pemesan">
												</div>
											</div>

											<div class="form-group row">
												<label class="col-md-3 control-label" for="inputDefault">Nama Buah</label>
												<div class="col-md-6">
													<input class="form-control" name="xbuah" id="inputDisabled" type="text" placeholder="Nama Buah">
												</div>
											</div>

											<div class="form-group row">
												<label class="col-md-3 control-label" for="inputDefault">Jenis Buah</label>
												<div class="col-md-6">
													<input class="form-control" name="xjenis" id="inputDisabled" type="text" placeholder="Jenis Buah">
												</div>
											</div>

											<div class="form-group row">
												<label class="col-md-3 control-label" for="inputDefault">Jumlah Beli</label>
												<div class="col-md-6">
													<input class="form-control" name="xjumlah" id="inputDisabled" type="text" placeholder="Jumlah Beli">
												</div>
											</div>

											<div class="form-group row">
												<label class="col-md-3 control-label" for="inputDefault">Keterangan Buah</label>
												<div class="col-md-6">
													<input class="form-control" name="xketerangan" id="inputDisabled" type="text" placeholder="Keterangan Buah">
												</div>
											</div>
											<input type="Submit" class="mb-xs mt-xs mr-xs btn btn-success" value="Simpan Pesanan">
										</div>
										</form>
									</div>
								</section>
							</div>
						</div>
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
		<script src="<?php echo base_url().'theme/assets/vendor/jquery-autosize/jquery.autosize.js'?>"></script>
		<script src="<?php echo base_url().'theme/assets/vendor/bootstrap-fileupload/bootstrap-fileupload.min.js'?>"></script>

		<!-- Theme Base, Components and Settings -->
		<script src="<?php echo base_url().'theme/assets/javascripts/theme.j'?>s"></script>

		<!-- Theme Custom -->
		<script src="<?php echo base_url().'theme/assets/javascripts/theme.custom.js'?>"></script>

		<!-- Theme Initialization Files -->
		<script src="<?php echo base_url().'theme/assets/javascripts/theme.init.js'?>"></script>

	</body>
</html>