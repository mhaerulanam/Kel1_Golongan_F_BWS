<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dokternak.id</title>
    <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="manifest" href="site.webmanifest">
		<link rel="shortcut icon" type="image/x-icon" href="./assets/img/favicon.ico">

		<!-- CSS here -->
            <link rel="stylesheet" href="./assets/css/bootstrap.min.css">
            <link rel="stylesheet" href="./assets/css/owl.carousel.min.css">
            <link rel="stylesheet" href="./assets/css/flaticon.css">
            <link rel="stylesheet" href="./assets/css/price_rangs.css">
            <link rel="stylesheet" href="./assets/css/slicknav.css">
            <link rel="stylesheet" href="./assets/css/animate.min.css">
            <link rel="stylesheet" href="./assets/css/magnific-popup.css">
            <link rel="stylesheet" href="./assets/css/fontawesome-all.min.css">
            <link rel="stylesheet" href="./assets/css/themify-icons.css">
            <link rel="stylesheet" href="./assets/css/slick.css">
            <link rel="stylesheet" href="./assets/css/nice-select.css">
            <link rel="stylesheet" href="./assets/css/style.css">
            <style>
                .avatar{
                    width: 35px;
                    height: 35px;
                    border-radius: 100%;
                    background-color: black;
                    border:1px solid white;
                }
            </style>
</head>
<body>
<header>
        <!-- Header Start -->
       <div class="header-area header-transparrent">
           <div class="headder-top header-sticky">
                <div class="container">
                    <div class="row align-items-center">
                        <div class="col-lg-3 col-md-2">
                            <!-- Logo -->
                            <div class="logo">
                                <a href="LandingPageDokter.php"><img src="../assets/img/logo/logo1.png" alt=""></a>
                            </div> 
                            <div class="col-12">
                                <div class="mobile_menu d-block d-lg-none"></div>
                            </div>
                        </div>

                        <div class="col-lg-9 col-md-9">
                                <div class="menu-wrapper">
                                <!-- Main-menu -->
                                <div class="main-menu">
                                    <nav class="d-none d-lg-block">
                                        <ul id="navigation">
                                            <li><a href="LandingPageDokter.php">HOME</a></li>
                                            <li><a href="daftar_artikel.php">ARTIKEL </a></li>
                                            <li><a href="#">DATA</a>
                                            <ul>
                                                    <li><a href="datarekammedik.php">REKAM MEDIK</a></li>
                                                    <li><a href="dataobat.php">OBAT</a></li>
                                                    <li><a href="data_hewan.php">HEWAN</a></li>                                                 
                                                </ul>
                                            </li>
                                            <li><a href="respon_konsultasi.php">NOTIFIKASI</a></li>
                                            <li><a href="daftar_tutorial.php">TUTORIAL</a></li>
                                        </ul>
                                    </nav>
                                </div>
                                <!-- Header-btn -->
                                <div class="main-menu f-right">
                                        <ul>  
                                        <a href="#">
                                        <img src="fotoakun.php?id_dokter=<?php echo $_SESSION['id']; ?>" class="rounded-circle z-depth-0"
                                            alt="fotoakun" height="35"></img>
                                        <!-- <img src="https://mdbootstrap.com/img/Photos/Avatars/avatar-5.jpg" class="rounded-circle z-depth-0"
                                            alt="avatar image" height="35"></img> -->
                                        </a>
                                            <li><a href="#" id="Nama" ><?php echo $_SESSION['nama'];?> <span> (</span><?php echo $_SESSION['jabatan'];?>)</a>
                                                <ul class="submenu">
                                                    <li><a id="Nama"  href="#ubahModal"  data-toggle="modal">Ubah Password</a></li>
                                                    <li><a id="Nama"  href="../modal/logout.php" onclick="return confirm('Apakah Anda yakin ingin keluar Akun?')" >Keluar Akun</a></li>                                                 
                                                </ul>
                                            </li>
                                        </ul>
                                    </div>        
                            </div>
                        </div>
                        <!-- Mobile Menu -->
                        <div class="col-lg-3 col-md-2">                 
                        </div>
                    </div>
                </div>
           </div>
       </div>
        <!-- Header End -->
    </header>
</body>
</html>