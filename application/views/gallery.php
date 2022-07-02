<!DOCTYPE html>
<html lang="en"> 
<!-- Basic -->

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <!-- Mobile Metas -->
    <meta name="viewport" content="width=device-width, initial-scale=1">

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
                    <h2>Gallery</h2>
                    <ul class="breadcrumb">
                        <li class="breadcrumb-item"><a href="<?= base_url('Home'); ?>">Home</a></li>
                        <li class="breadcrumb-item active">Gallery</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <!-- End All Title Box -->

    <!-- Start Gallery  -->
    <div class="products-box">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="title-all text-center">
                        <h1>Our Gallery</h1>
                        <p>Various types of fruit in our shop.</p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <div class="special-menu text-center">
                        <div class="button-group filter-button-group">
                            <button class="active" data-filter="*">All</button>
                            <button data-filter=".fruits">Fruits</button>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row special-list">
                <div class="col-lg-3 col-md-6 special-grid fruits">
                    <div class="products-single fix">
                        <div class="box-img-hover">
                            <div class="type-lb">

                            </div>
                            <img src="<?php echo base_url().'assets/images/anggur.jpg'?>" class="img-fluid" alt="Image">
                            <div class="mask-icon">
                            </div>
                        </div>
                        <div class="why-text">
                            <h5>Grape</h5>
                        </div>
                    </div>
                </div>

                <div class="col-lg-3 col-md-6 special-grid fruits">
                    <div class="products-single fix">
                        <div class="box-img-hover">
                            <img src="<?php echo base_url().'assets/images/apel.jpg'?>" class="img-fluid" alt="Image">
                            <div class="mask-icon">
                            </div>
                        </div>
                        <div class="why-text">
                            <h5>Apple</h5>
                        </div>
                    </div>
                </div>

                <div class="col-lg-3 col-md-6 special-grid fruits">
                    <div class="products-single fix">
                        <div class="box-img-hover">
                            <img src="<?php echo base_url().'assets/images/jeruk.jpg'?>" class="img-fluid" alt="Image">
                            <div class="mask-icon">
                            </div>
                        </div>
                        <div class="why-text">
                            <h5>Orange</h5>
                        </div>
                    </div>
                </div>

                <div class="col-lg-3 col-md-6 special-grid fruits">
                    <div class="products-single fix">
                        <div class="box-img-hover">
                            <img src="<?php echo base_url().'assets/images/mangga.jpg'?>" class="img-fluid" alt="Image">
                            <div class="mask-icon">
                            </div>
                        </div>
                        <div class="why-text">
                            <h5>Manggo</h5>
                        </div>
                    </div>
                </div>

                <div class="col-lg-3 col-md-6 special-grid fruits">
                    <div class="products-single fix">
                        <div class="box-img-hover">
                            <img src="<?php echo base_url().'assets/images/nanas.jpg'?>" class="img-fluid" alt="Image">
                            <div class="mask-icon">
                            </div>
                        </div>
                        <div class="why-text">
                            <h5>Pineapple</h5>
                        </div>
                    </div>
                </div>

                <div class="col-lg-3 col-md-6 special-grid fruits">
                    <div class="products-single fix">
                        <div class="box-img-hover">
                            <img src="<?php echo base_url().'assets/images/pisang.jpg'?>" class="img-fluid" alt="Image">
                            <div class="mask-icon">
                        </div>
                    </div>
                    <div class="why-text">
                        <h5>Banana</h5>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Gallery  -->

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