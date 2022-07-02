<!doctype html>
<html class="fixed">
	<head>

		<!-- Basic -->
		<meta charset="UTF-8">

		<title>Pesanan</title>
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
		<link rel="stylesheet" href="<?php echo base_url().'theme/vassets/vendor/bootstrap-datepicker/css/datepicker3.css'?>" />

		<!-- Specific Page Vendor CSS -->
		<link rel="stylesheet" href="<?php echo base_url().'theme/assets/vendor/jquery-ui/css/ui-lightness/jquery-ui-1.10.4.custom.css'?>" />
		<link rel="stylesheet" href="<?php echo base_url().'theme/assets/vendor/bootstrap-multiselect/bootstrap-multiselect.css'?>" />
		<link rel="stylesheet" href="<?php echo base_url().'theme/assets/vendor/morris/morris.css'?>" />

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

			<?php $this->load->view('admin/v_sidebar'); ?>
				<!-- end: sidebar -->

				<section role="main" class="content-body">
					<header class="page-header">
						<h2>Pesanan</h2>

						<div class="right-wrapper pull-right">
							<ol class="breadcrumbs">
								<li>
									<a href="<?= base_url('Dashboard'); ?>">
										<i class="fa fa-home"></i>
									</a>
								</li>
								<li><span>Pesanan</span></li>
							</ol>

							<a class="sidebar-right-toggle" data-open="sidebar-right"><i class="fa fa-chevron-left"></i></a>
						</div>
					</header>

					<!-- start: page -->
						<div class="row">
							<div class="col-md-12">
								<section class="panel">
									<header class="panel-heading">
										<div class="panel-actions">
											<a href="#" class="fa fa-caret-down"></a>
											<a href="#" class="fa fa-times"></a>
										</div>

										<div> <?php $this->session->flashdata('pesan'); ?> </div>
										<h2> <a href="<?php echo base_url() ?>Pesanan/tambah_pesanan" button type="button" class="mb-xs mt-xs mr-xs btn btn-success"> Tambah Pesanan</a> </h2>
									</header>
									<div class="panel-body">
										<div class="table-responsive">
											<table class="table mb-none">
												<thead>
													<tr>
														<th>No</th>
														<th>Nama Pemesan</th>
														<th>Nama Buah</th>
														<th>Jenis Buah</th>
														<th>Jumlah Beli</th>
														<th>Keterangan Buah</th>
													</tr>
												</thead>
												<tbody>
													<?php
													$no=0;
													foreach ($data->result () as $row):
														$no++;
													?>

													<tr>
														<td><?php echo $no ?></td>
														<td><?php echo $row->nama ?></td>
														<td><?php echo $row->buah ?></td>
														<td><?php echo $row->jenis ?></td>
														<td><?php echo $row->jumlah ?></td>
														<td><?php echo $row->keterangan ?></td>
														<td>
															<a href="<?php echo base_url().'Pesanan/edit_pesanan/'.$row->id ?>" class="btn btn-info">Edit</a>
															<a href="<?php echo base_url().'Pesanan/hapus_pesanan/'.$row->id ?>" class="btn btn-danger">Delete</a>
														</td>
													</tr>
													<?php endforeach; ?>
												</tbody>
											</table>
										</div>
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
		<script src="<?php echo base_url().'theme/assets/vendor/jquery-ui/js/jquery-ui-1.10.4.custom.js'?>"></script>
		<script src="<?php echo base_url().'theme/assets/vendor/jquery-ui-touch-punch/jquery.ui.touch-punch.js'?>"></script>
		<script src="<?php echo base_url().'theme/assets/vendor/jquery-appear/jquery.appear.js'?>"></script>
		<script src="<?php echo base_url().'theme/assets/vendor/bootstrap-multiselect/bootstrap-multiselect.js'?>"></script>
		<script src="<?php echo base_url().'theme/assets/vendor/jquery-easypiechart/jquery.easypiechart.js'?>"></script>
		<script src="<?php echo base_url().'theme/assets/vendor/flot/jquery.flot.js'?>"></script>
		<script src="<?php echo base_url().'theme/assets/vendor/flot-tooltip/jquery.flot.tooltip.js'?>"></script>
		<script src="<?php echo base_url().'theme/assets/vendor/flot/jquery.flot.pie.js'?>"></script>
		<script src="<?php echo base_url().'theme/assets/vendor/flot/jquery.flot.categories.js'?>"></script>
		<script src="<?php echo base_url().'theme/assets/vendor/flot/jquery.flot.resize.js'?>"></script>
		<script src="<?php echo base_url().'theme/assets/vendor/jquery-sparkline/jquery.sparkline.js'?>"></script>
		<script src="<?php echo base_url().'theme/assets/vendor/raphael/raphael.js'?>"></script>
		<script src="<?php echo base_url().'theme/assets/vendor/morris/morris.js'?>"></script>
		<script src="<?php echo base_url().'theme/assets/vendor/snap-svg/snap.svg.js'?>"></script>
		<script src="<?php echo base_url().'theme/assets/vendor/liquid-meter/liquid.meter.js'?>"></script>
		<script src="<?php echo base_url().'theme/assets/vendor/jqvmap/jquery.vmap.js'?>"></script>
		<script src="<?php echo base_url().'theme/assets/vendor/jqvmap/data/jquery.vmap.sampledata.js'?>"></script>
		<script src="<?php echo base_url().'theme/assets/vendor/jqvmap/maps/jquery.vmap.world.js'?>"></script>
		<script src="<?php echo base_url().'theme/assets/vendor/jqvmap/maps/continents/jquery.vmap.africa.js'?>"></script>
		<script src="<?php echo base_url().'theme/assets/vendor/jqvmap/maps/continents/jquery.vmap.asia.js'?>"></script>
		<script src="<?php echo base_url().'theme/assets/vendor/jqvmap/maps/continents/jquery.vmap.australia.js'?>"></script>
		<script src="<?php echo base_url().'theme/assets/vendor/jqvmap/maps/continents/jquery.vmap.europe.js'?>"></script>
		<script src="<?php echo base_url().'theme/assets/vendor/jqvmap/maps/continents/jquery.vmap.north-america.js'?>"></script>
		<script src="<?php echo base_url().'theme/assets/vendor/jqvmap/maps/continents/jquery.vmap.south-america.js'?>"></script>

		<!-- Theme Base, Components and Settings -->
		<script src="<?php echo base_url().'theme/assets/javascripts/theme.js'?>"></script>

		<!-- Theme Custom -->
		<script src="<?php echo base_url().'theme/assets/javascripts/theme.custom.js'?>"></script>

		<!-- Theme Initialization Files -->
		<script src="<?php echo base_url().'theme/assets/javascripts/theme.init.js'?>"></script>


		<!-- Examples -->
		<script src="<?php echo base_url().'theme/assets/javascripts/dashboard/examples.dashboard.js'?>"></script>
	</body>
</html>