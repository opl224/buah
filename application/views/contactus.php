<!DOCTYPE html>
<html lang="en">
	<!-- Basic --> 

	<head>
		<meta charset="utf-8" />
		<meta http-equiv="X-UA-Compatible" content="IE=edge" />

		<!-- Mobile Metas -->
		<meta name="viewport" content="width=device-width, initial-scale=1" />

		<!-- Site Metas -->
		<title>Toko Buah</title>
    <meta name="keywords" content="">
    <meta name="description" content="">
    <meta name="author" content="">

    <!-- Site Icons -->
    <link rel="shortcut icon" href="<?php echo base_url().'assets/images/favicon.ico'?>" type="image/x-icon">
    <link rel="apple-touch-icon" href="<?php echo base_url().'assets/images/apple-touch-icon.png'?>">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="<?php echo base_url().'assets/css/bootstrap.min.css'?>">
    <!-- Site CSS -->
    <link rel="stylesheet" href="<?php echo base_url().'assets/css/style.css'?>">
    <!-- Responsive CSS -->
    <link rel="stylesheet" href="<?php echo base_url().'assets/css/responsive.css'?>">
    <!-- Custom CSS -->
    <link rel="stylesheet" href="<?php echo base_url().'assets/css/custom.css'?>">

		<!--[if lt IE 9]>
			<script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
			<script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
		<![endif]-->
	</head>

	<body>
		<!-- Start Main Top -->
		<div class="main-top">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                    <div class="our-link">
                        <ul>
                            <li><a href="<?= base_url('administrator'); ?>"><i class="fa fa-user s_color"></i> Login</a></li>
                            <li><a href="<?= base_url('ContactUs'); ?>"><i class="fas fa-headset"></i> Contact Us</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
		<!-- End Main Top -->

		<!-- Start Main Top -->
		<?php $this->load->view('header') ?>
		<!-- End Main Top -->

		<!-- Start All Title Box -->
		<div class="all-title-box">
			<div class="container">
				<div class="row">
					<div class="col-lg-12">
						<h2>Contact Us</h2>
						<ul class="breadcrumb">
							<li class="breadcrumb-item"><a href="#">Home</a></li>
							<li class="breadcrumb-item active">Contact Us</li>
						</ul>
					</div>
				</div>
			</div>
		</div>
		<!-- End All Title Box -->

		<!-- Start Contact Us  -->
		<div class="contact-box-main">
			<div class="container">
				<div class="row">
					<div class="col-lg-8 col-sm-12">
						<div class="contact-form-right">
							<h2>GET IN TOUCH</h2>
							<p>
								.
							</p>
							<form id="contactForm">
								<div class="row">
									<div class="col-md-12">
										<div class="form-group">
											<input
												type="text"
												class="form-control"
												id="name"
												name="name"
												placeholder="Your Name"
												required
												data-error="Please enter your name"
											/>
											<div class="help-block with-errors"></div>
										</div>
									</div>
									<div class="col-md-12">
										<div class="form-group">
											<input
												type="text"
												placeholder="Your Email"
												id="email"
												class="form-control"
												name="name"
												required
												data-error="Please enter your email"
											/>
											<div class="help-block with-errors"></div>
										</div>
									</div>
									<div class="col-md-12">
										<div class="form-group">
											<input
												type="text"
												class="form-control"
												id="subject"
												name="name"
												placeholder="Subject"
												required
												data-error="Please enter your Subject"
											/>
											<div class="help-block with-errors"></div>
										</div>
									</div>
									<div class="col-md-12">
										<div class="form-group">
											<textarea
												class="form-control"
												id="message"
												placeholder="Your Message"
												rows="4"
												data-error="Write your message"
												required
											></textarea>
											<div class="help-block with-errors"></div>
										</div>
										<div class="submit-button text-center">
											<button class="btn hvr-hover" id="submit" type="submit">
												Send Message
											</button>
											<div id="msgSubmit" class="h3 text-center hidden"></div>
											<div class="clearfix"></div>
										</div>
									</div>
								</div>
							</form>
						</div>
					</div>
					<div class="col-lg-4 col-sm-12">
						<div class="contact-info-left">
							<h2>CONTACT INFO</h2>
							<p>
								Call or visit us if needed or you can order us online and you can.
							</p>
							<ul>
								<li>
									<p>
										<i class="fas fa-map-marker-alt"></i>Address: Kavling Tunas Jaya <br /> Street Pangeran Jayakarta,<br />
										KS 87213
									</p>
								</li>
								<li>
									<p>
										<i class="fas fa-phone-square"></i>Phone: +62 813 9892 0647
									</p>
								</li>
								<li>
									<p>
										<i class="fas fa-envelope"></i>Email: siapaajaboleh202@gmail.com@gmail.com
									</p>
								</li>
							</ul>
						</div>
					</div>
				</div>
			</div>
		</div>
		<!-- End Cart -->

		<!-- Start Footer  -->
		<?php $this->load->view('footer') ?>
		<!-- End Footer  -->

		<!-- Start copyright  -->
		<div class="footer-copyright">
        <p class="footer-company">All Rights Reserved. &copy; 2021 Toko Buah</a> Design By : We</p>
    </div>
    <!-- End copyright  -->

    <a href="#" id="back-to-top" title="Back to top" style="display: none;">&uarr;</a>

    <!-- ALL JS FILES -->
    <script src="<?php echo base_url().'assets/js/jquery-3.2.1.min.js'?>"></script>
    <script src="<?php echo base_url().'assets/js/popper.min.js'?>"></script>
    <script src="<?php echo base_url().'assets/js/bootstrap.min.js'?>"></script>
    <!-- ALL PLUGINS -->
    <script src="<?php echo base_url().'assets/js/jquery.superslides.min.js'?>"></script>
    <script src="<?php echo base_url().'assets/js/bootstrap-select.js'?>"></script>
    <script src="<?php echo base_url().'assets/js/inewsticker.js'?>"></script>
    <script src="<?php echo base_url().'assets/js/bootsnav.js.'?>"></script>
    <script src="<?php echo base_url().'assets/js/images-loded.min.js'?>"></script>
    <script src="<?php echo base_url().'assets/js/isotope.min.js'?>"></script>
    <script src="<?php echo base_url().'assets/js/owl.carousel.min.js'?>"></script>
    <script src="<?php echo base_url().'assets/js/baguetteBox.min.js'?>"></script>
    <script src="<?php echo base_url().'assets/js/form-validator.min.js'?>"></script>
    <script src="<?php echo base_url().'assets/js/contact-form-script.js'?>"></script>
    <script src="<?php echo base_url().'assets/js/custom.js'?>"></script>
	</body>
</html>
