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
</head>
<body>
<header>
        <!-- Header Start -->
       <div class="header-area header-transparrent">
           <div class="headder-top header-sticky">
                <div class="container">
                    <div class="row align-items-center">
                         <!-- Mobile Menu -->
                        <div class="col-lg-3 col-md-2">
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
                            <div class="col-12">
                                <div class="mobile_menu d-block d-lg-none"></div>
                            </div>
                        </div>
                        
                        <div class="col-lg-9 col-md-9">
                            <div class="menu-wrapper">
                                <!-- Header-btn -->
                                         <!-- Main-menu -->
                                        <div class="main-menu">
                                            <nav class="d-none d-lg-block">
                                                <ul id="navigation">
                                                    <li><a href="LandingPagePeternak.php">HOME</a></li>
                                                    <li><a href="daftar_artikel.php">ARTIKEL </a></li>
                                                    <li><a href="riwayat_konsultasi.php">KONSULTASI</a></li>
                                                    <li><a href="daftar_dokter.php">DOKTER</a></li>
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
                                        
                                <?php
                                    if(isset($_SESSION['username'])){
                                        $nama = $_SESSION['username'];
                                        ?>
                                        <div class="main-menu right">
                                            <ul >
                                            <a href="#">
                                            <img src="fotoakun.php?id_peternak=<?php echo $_SESSION['id']; ?>" class="rounded-circle z-depth-0"
                                                alt="fotoakun" height="35"></img>
                                            <!-- <img src="https://mdbootstrap.com/img/Photos/Avatars/avatar-5.jpg" class="rounded-circle z-depth-0"
                                                alt="avatar image" height="35"></img> -->
                                            </a> 
                                                <li><a href="#" id="Nama" ><?php echo $_SESSION['nama'];?> <span> (</span><?php echo $_SESSION['id_role'];?>)</a>
                                                    <ul class="submenu">
                                                        <li><a id="Nama"  href="profil_akun.php">Akun Profile</a></li>
                                                        <li><a id="Nama"  href="#ubahModal"  data-toggle="modal">Ubah Password</a></li>
                                                        <li><a id="Nama"  href="modal/logout.php" onclick="return confirm('Apakah Anda yakin ingin keluar Akun?')">Keluar Akun</a></li>                                                 
                                                    </ul>
                                                </li>
                                            </ul>
                                        </div>
                                    <?php
                                    }else{
                                        ?>
                                        <div class="main-menu right">
                                                <a href="daftar.php" class="btn head-btn1">DAFTAR</a>
                                                <a href="#myModal" data-toggle="modal" class="btn head-btn2">MASUK</a>
                                        </div>
                                    <?php
                                    }
                                 ?>          
                            </div>
                        </div>
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