<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dokternak.id</title>
    <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="manifest" href="site.webmanifest">
		<link rel="shortcut icon" type="image/x-icon" href="assets/img/favicon.ico">

		<!-- CSS here -->
            <link rel="stylesheet" href="assets/css/bootstrap.min.css">
            <link rel="stylesheet" href="assets/css/owl.carousel.min.css">
            <link rel="stylesheet" href="assets/css/flaticon.css">
            <link rel="stylesheet" href="assets/css/price_rangs.css">
            <link rel="stylesheet" href="assets/css/slicknav.css">
            <link rel="stylesheet" href="assets/css/animate.min.css">
            <link rel="stylesheet" href="assets/css/magnific-popup.css">
            <link rel="stylesheet" href="assets/css/fontawesome-all.min.css">
            <link rel="stylesheet" href="assets/css/themify-icons.css">
            <link rel="stylesheet" href="assets/css/slick.css">
            <link rel="stylesheet" href="assets/css/nice-select.css">
            <link rel="stylesheet" href="assets/css/style.css">
</head>
<body>
<header>
        <!-- Header Start -->
       <div class="header-area header-transparrent">
           <div class="headder-top header-sticky">
                <div class="container">
                    <div class="row align-items-center">
                        <div class="col-lg-2 col-md-2">
                            <?php
                            if(isset($_SESSION['username'])){
                            $nama = $_SESSION['username'];
                            ?>
                                <!-- Logo -->
                                <div class="logo">
                                    <a href="LandingPagePeternak.php"><img src="assets/img/logo/logo1.png" alt=""></a>
                                </div>
                            <?php    
                            }else{
                            ?>
                                <!-- Logo -->
                                <div class="logo">
                                        <a href="index.php"><img src="assets/img/logo/logo1.png" alt=""></a>
                                </div>
                            <?php
                            }
                            ?> 
                        </div>
                        <div class="col-lg-10 col-md-13">
                            <div class="menu-wrapper">
                                <!-- Header-btn -->
                                <?php
                                    if(isset($_SESSION['username'])){
                                        $nama = $_SESSION['username'];
                                        ?>
                                         <!-- Main-menu -->
                                        <div class="main-menu">
                                            <nav class="d-none d-lg-block">
                                                <ul id="navigation">
                                                    <li><a href="LandingPagePeternak.php">HOME</a></li>
                                                    <li><a href="daftar_artikel.php">ARTIKEL </a></li>
                                                    <li><a href="#">KONSULTASI</a></li>
                                                    <li><a href="daftar_dokter.php">DAFTAR DOKTER</a></li>
                                                    <li><a href="#">INFORMASI</a>
                                                        <ul class="submenu">
                                                            <li><a href="daftarpuskeswan.php">PUSKESWAN</a></li>
                                                            <li><a href="daftar_tutorial.php">TUTORIAL</a></li>
                                                            <li><a href="aboutus.php">TENTANG KAMI</a></li>                                                 
                                                        </ul>
                                                    </li>
                                                </ul>
                                            </nav>
                                        </div>
                                        <div class="main-menu f-right">
                                        <ul id="navigation">
                                        <a href="#">
                                        <img src="fotoakun.php?id_user=<?php echo $_SESSION['id']; ?>" class="rounded-circle z-depth-0"
                                            alt="fotoakun" height="35"></img>
                                        <!-- <img src="https://mdbootstrap.com/img/Photos/Avatars/avatar-5.jpg" class="rounded-circle z-depth-0"
                                            alt="avatar image" height="35"></img> -->
                                        </a> 
                                            <li><a href="#" id="Nama" ><?php echo $_SESSION['username'];?> <span> (</span><?php echo $_SESSION['id_role'];?>)</a>
                                                <ul class="submenu">
                                                    <li><a id="Nama"  href="#">Akun Profile</a></li>
                                                    <li><a id="Nama"  href="#ubahModal"  data-toggle="modal">Ubah Password</a></li>
                                                    <li><a id="Nama"  href="modal/logout.php" onclick="return confirm('Apakah Anda yakin ingin keluar Akun?')">Keluar Akun</a></li>                                                 
                                                </ul>
                                            </li>
                                        </ul>
                                </div>
                                    <?php    
                                    }else{
                                        ?>
                                        <!-- Main-menu -->
                                        <div class="main-menu">
                                            <nav class="d-none d-lg-block">
                                                <ul id="navigation">
                                                    <li><a href="index.php">HOME</a></li>
                                                    <li><a href="daftar_artikel.php">ARTIKEL </a></li>
                                                    <li><a href="#">KONSULTASI</a></li>
                                                    <li><a href="daftar_dokter.php">DAFTAR DOKTER</a></li>
                                                    <li><a href="#">INFORMASI</a>
                                                        <ul class="submenu">
                                                            <li><a href="daftarpuskeswan.php">PUSKESWAN</a></li>
                                                            <li><a href="daftar_tutorial.php">TUTORIAL</a></li>
                                                            <li><a href="aboutus.php">TENTANG KAMI</a></li>                                                 
                                                        </ul>
                                                    </li>
                                                </ul>
                                            </nav>
                                        </div>
                                        <div class="header-btn d-none f-right d-lg-block">
                                            <a href="daftar.php" class="btn head-btn1">DAFTAR</a>
                                            <a href="#myModal" data-toggle="modal" class="btn head-btn2">MASUK</a>
                                        </div>
                                    <?php
                                    }
                                 ?>          
                            </div>
                        </div>
                        <!-- Mobile Menu -->
                        <div class="col-12">
                            <div class="mobile_menu d-block d-lg-none"></div>
                        </div>
                    </div>
                </div>
           </div>
       </div>
        <!-- Header End -->
    </header>
    
		<!-- All JS Custom Plugins Link Here here -->
        <script src="./assets/js/vendor/modernizr-3.5.0.min.js"></script>
		<!-- Jquery, Popper, Bootstrap -->
		<script src="./assets/js/vendor/jquery-1.12.4.min.js"></script>
        <script src="./assets/js/popper.min.js"></script>
        <script src="./assets/js/bootstrap.min.js"></script>
	    <!-- Jquery Mobile Menu -->
        <script src="./assets/js/jquery.slicknav.min.js"></script>

		<!-- Jquery Slick , Owl-Carousel Plugins -->
        <script src="./assets/js/owl.carousel.min.js"></script>
        <script src="./assets/js/slick.min.js"></script>
        <script src="./assets/js/price_rangs.js"></script>
        
		<!-- One Page, Animated-HeadLin -->
        <script src="./assets/js/wow.min.js"></script>
		<script src="./assets/js/animated.headline.js"></script>
        <script src="./assets/js/jquery.magnific-popup.js"></script>

		<!-- Scrollup, nice-select, sticky -->
        <script src="./assets/js/jquery.scrollUp.min.js"></script>
        <script src="./assets/js/jquery.nice-select.min.js"></script>
		<script src="./assets/js/jquery.sticky.js"></script>
        
        <!-- contact js -->
        <script src="./assets/js/contact.js"></script>
        <script src="./assets/js/jquery.form.js"></script>
        <script src="./assets/js/jquery.validate.min.js"></script>
        <script src="./assets/js/mail-script.js"></script>
        <script src="./assets/js/jquery.ajaxchimp.min.js"></script>
        
		<!-- Jquery Plugins, main Jquery -->	
        <script src="./assets/js/plugins.js"></script>
        <script src="./assets/js/main.js"></script>
</body>
</html>