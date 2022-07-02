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
                    <h2>Shop</h2>
                    <ul class="breadcrumb">
                        <li class="breadcrumb-item"><a href="<?= base_url('Home'); ?>">Home</a></li>
                        <li class="breadcrumb-item active">Shop</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <!-- End All Title Box -->

    <!-- Start Shop Page  -->
    <div class="shop-box-inner">
        <div class="container">
            <div class="row">
                <div class="col-xl-9 col-lg-9 col-sm-12 col-xs-12 shop-content-right">
                    <div class="right-product-box">
                        <div class="product-categorie-box">
                            <div class="tab-content">
                                <div role="tabpanel" class="tab-pane fade show active" id="grid-view">
                                    <div class="row">
                                        <div class="col-sm-6 col-md-6 col-lg-4 col-xl-4">
                                            <div class="products-single fix">
                                                <div class="box-img-hover">
                                                    <div class="type-lb">
                                                        <p class="sale">Sale</p>
                                                    </div>
                                                    <img src="<?php echo base_url().'assets/images/anggur.jpg'?>" class="img-fluid" alt="Image">
                                                    <div class="mask-icon">
                                                    </div>
                                                </div>
                                                <div class="why-text">
                                                    <h4>Grape</h4>
                                                    <h5>Rp30.000</h5>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-sm-6 col-md-6 col-lg-4 col-xl-4">
                                            <div class="products-single fix">
                                                <div class="box-img-hover">
                                                    <div class="type-lb">
                                                        <p class="new">New</p>
                                                    </div>
                                                    <img src="<?php echo base_url().'assets/images/apel.jpg'?>" class="img-fluid" alt="Image">
                                                    <div class="mask-icon">
                                                    </div>
                                                </div>
                                                <div class="why-text">
                                                    <h4>Apple</h4>
                                                    <h5>Rp 15.000</h5>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-sm-6 col-md-6 col-lg-4 col-xl-4">
                                            <div class="products-single fix">
                                                <div class="box-img-hover">
                                                    <div class="type-lb">
                                                        <p class="sale">Sale</p>
                                                    </div>
                                                    <img src="<?php echo base_url().'assets/images/jeruk.jpg'?>" class="img-fluid" alt="Image">
                                                    <div class="mask-icon">
                                                    </div>
                                                </div>
                                                <div class="why-text">
                                                    <h4>Orange</h4>
                                                    <h5> Rp25.000</h5>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-sm-6 col-md-6 col-lg-4 col-xl-4">
                                            <div class="products-single fix">
                                                <div class="box-img-hover">
                                                    <div class="type-lb">
                                                        <p class="new">New</p>
                                                    </div>
                                                    <img src="<?php echo base_url().'assets/images/mangga.jpg'?>" class="img-fluid" alt="Image">
                                                    <div class="mask-icon">
                                                    </div>
                                                </div>
                                                <div class="why-text">
                                                    <h4>Mango</h4>
                                                    <h5> Rp20.000</h5>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-sm-6 col-md-6 col-lg-4 col-xl-4">
                                            <div class="products-single fix">
                                                <div class="box-img-hover">
                                                    <div class="type-lb">
                                                        <p class="sale">Sale</p>
                                                    </div>
                                                    <img src="<?php echo base_url().'assets/images/nanas.jpg'?>" class="img-fluid" alt="Image">
                                                    <div class="mask-icon">
                                                    </div>
                                                </div>
                                                <div class="why-text">
                                                    <h4>Pineapple</h4>
                                                    <h5> Rp12.000</h5>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-sm-6 col-md-6 col-lg-4 col-xl-4">
                                            <div class="products-single fix">
                                                <div class="box-img-hover">
                                                    <div class="type-lb">
                                                        <p class="sale">Sale</p>
                                                    </div>
                                                    <img src="<?php echo base_url().'assets/images/pisang.jpg'?>" class="img-fluid" alt="Image">
                                                    <div class="mask-icon">
                                                    </div>
                                                </div>
                                                <div class="why-text">
                                                    <h4>Banana</h4>
                                                    <h5> Rp14.000</h5>
                                                </div>
                                            </div>
                                        </div>

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
				<div class="col-xl-3 col-lg-3 col-sm-12 col-xs-12 sidebar-shop-left">
                </div>
            </div>
        </div>
    </div>
    <!-- End Shop Page -->

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