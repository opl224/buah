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
                    <h2>ABOUT US</h2>
                    <ul class="breadcrumb">
                        <li class="breadcrumb-item"><a href="<?= base_url('Home'); ?>">Home</a></li>
                        <li class="breadcrumb-item active">ABOUT US</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <!-- End All Title Box -->

    <!-- Start About Page  -->
    <div class="about-box-main">
        <div class="container">
            <div class="row">
				<div class="col-lg-6">
                    <div class="banner-frame"> <img class="img-fluid" src="<?php echo base_url().'assets/images/about-img.jpg'?>" alt="" />
                    </div>
                </div>
                <div class="col-lg-6">
                    <h2 class="noo-sh-title-top">We are <span>Freshshop</span></h2>
                    <p>Explanantion of the Freshshop website.</p>
                    <p>Freshshop shop provides fresh fruit and has good quality and guaranteed hygienic, as well as standard prices with other character.
                       There are many other fruits, such as grape, apple, orange, mango, pineapple, banana and so on The way of packaging is Also guaranteed to be good so There is a litte chance that the fruit is damaged or rotten the delivery is also fast.
                    </p>
                </div>
            </div>
            <div class="row my-5">
                <div class="col-sm-6 col-lg-4">
                    <div class="service-block-inner">
                        <h3>We are Trusted</h3>
                        <p>Because we only provide healty and fresh fruits and also low prices. </p>
                    </div>
                </div>
                <div class="col-sm-6 col-lg-4">
                    <div class="service-block-inner">
                        <h3>We are Professional</h3>
                        <p>We choose fruits from good crops. </p>
                    </div>
                </div>
                <div class="col-sm-6 col-lg-4">
                    <div class="service-block-inner">
                        <h3>We are Expert</h3>
                        <p>Because our farmers are expert in cloosing superior seed to be planted, harvested and marketed. </p>
                    </div>
                </div>
            </div>
            <div class="row my-4">
                <div class="col-12">
                    <h2 class="noo-sh-title">KELOMPOK 2</h2>
                </div>
                <div class="col-sm-6 col-lg-3">
                    <div class="hover-team">
                        <div class="our-team"> <img src="<?php echo base_url().'assets/images/user.jpg'?>" alt="" />
                            <div class="team-content">
                                <h3 class="title">Agung Fitriano</h3> <span class="post">Ketua</span> </div>
                            <ul>
                                <li>
                                    <a href="#" class="fab fa-facebook"></a>
                                </li>
                            </ul>
                            <div class="icon"> <i class="fab fa-black-tie" aria-hidden="true"></i> </div>
                        </div>
                        <div class="team-description">
                            <p>Tetap Semangat Kawand!</p>
                        </div>
                        <hr class="my-0"> </div>
                </div>
                <div class="col-sm-6 col-lg-3">
                    <div class="hover-team">
                        <div class="our-team"> <img src="<?php echo base_url().'assets/images/user.jpg'?>" alt="" />
                            <div class="team-content">
                                <h3 class="title">Alif Yusuf</h3> <span class="post">Anggota</span> </div>
                            <ul>
                                <li>
                                    <a href="#" class="fab fa-facebook"></a>
                                </li>
                            </ul>
                            <div class="icon"> <i class="fab fa-black-tie" aria-hidden="true"></i> </div>
                        </div>
                        <div class="team-description">
                            <p>Jangan Menyerah Kawand!</p>
                        </div>
                        <hr class="my-0"> </div>
                </div>
                <div class="col-sm-6 col-lg-3">
                    <div class="hover-team">
                        <div class="our-team"> <img src="<?php echo base_url().'assets/images/user.jpg'?>" alt="" />
                            <div class="team-content">
                                <h3 class="title">Noval Firdaus</h3> <span class="post">Anggota</span> </div>
                            <ul>
                                <li>
                                    <a href="#" class="fab fa-facebook"></a>
                                </li>
                            </ul>
                            <div class="icon"> <i class="fab fa-black-tie" aria-hidden="true"></i> </div>
                        </div>
                        <div class="team-description">
                            <p>OK! hehe</p>
                        </div>
                        <hr class="my-0"> </div>
                </div>
                <div class="col-sm-6 col-lg-3">
                    <div class="hover-team">
                        <div class="our-team"> <img src="<?php echo base_url().'assets/images/user.jpg'?>" alt="" />
                            <div class="team-content">
                                <h3 class="title">Putri Sonia</h3> <span class="post">Anggota</span> </div>
                            <ul>
                                <li>
                                    <a href="#" class="fab fa-facebook"></a>
                                </li>
                            </ul>
                            <div class="icon"> <i class="fab fa-black-tie" aria-hidden="true"></i> </div>
                        </div>
                        <div class="team-description">
                            <p>Berjaung Terus Kawand!</p>
                        </div>
                        <hr class="my-0"> </div>
                </div>
                <div class="col-sm-6 col-lg-3">
                    <div class="hover-team">
                        <div class="our-team"> <img src="<?php echo base_url().'assets/images/user.jpg'?>" alt="" />
                            <div class="team-content">
                                <h3 class="title">Seftia</h3> <span class="post">Wakil Ketua</span> </div>
                            <ul>
                                <li>
                                    <a href="#" class="fab fa-facebook"></a>
                                </li>
                            </ul>
                            <div class="icon"> <i class="fab fa-black-tie" aria-hidden="true"></i> </div>
                        </div>
                        <div class="team-description">
                            <p>Bahagia Selalu Kawand!</p>
                        </div>
                        <hr class="my-0"> </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End About Page -->

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