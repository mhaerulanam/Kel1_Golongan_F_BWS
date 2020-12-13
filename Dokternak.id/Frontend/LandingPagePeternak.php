<?php
// Start the session
session_start();
?>
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
            <link rel="stylesheet" href="assets/css/style2.css">

</head>
<body>
<?php include "modal/login.php"; ?>
<div class="header-area header-transparrent">
           <div class="headder-top header-sticky">
                <div class="container">
                    <div class="row align-items-center">
                        <div class="col-lg-3 col-md-2">
                            <!-- Logo -->
                            <div class="logo">
                                <a href="index.php"><img src="assets/img/logo/logo.png" alt=""></a>
                            </div>  
                        </div>
                        <div class="col-lg-15 col-md-9">
                            <div class="menu-wrapper">
                                <!-- Main-menu -->
                                <div class="main-menu">
                                    <nav class="d-none d-lg-block">
                                        <ul id="navigation">
                                            <li><a href="index.php">HOME</a></li>
                                            <li><a href="#">ARTIKEL </a></li>
                                            <li><a href="#">KONSULTASI</a></li>
                                            <li><a href="#">TUTORIAL</a></li>
                                            <li><a href="#">INFORMASI</a>
                                                <ul class="submenu">
                                                    <li><a href="#">DAFTAR DOKTER</a></li>
                                                    <li><a href="#">PUSKESWAN</a></li>
                                                    <li><a href="#">TENTANG KAMI</a></li>                                                 
                                                </ul>
                                            </li>
                                        </ul>
                                    </nav>
                                </div>          
                                <!-- Header-btn -->
                                <div class="main-menu f-right">
                                        <ul id="navigation">
                                        <a href="#">
                                        <img src="https://mdbootstrap.com/img/Photos/Avatars/avatar-5.jpg" class="rounded-circle z-depth-0"
                                            alt="avatar image" height="35"></img>
                                        </a> 
                                            <li><a href="#" id="Nama" ><?php echo $_SESSION['username'];?> <span> (</span><?php echo $_SESSION['id_role'];?>)</a>
                                                <ul class="submenu">
                                                    <li><a id="Nama"  href="#">Akun Profile</a></li>
                                                    <li><a id="Nama"  href="#myModal">Ubah Password</a></li>
                                                    <li><a id="Nama"  href="modal/logout.php">Log Out</a></li>                                                 
                                                </ul>
                                            </li>
                                        </ul>
                                    
                                    
                                    <!-- <a href="#myModal" data-toggle="modal" class="btn head-btn2">MASUK</a> -->
                                </div>
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
    <section>
        <?php
            include 'pencarian.php';
        ?>
    </section>
        
        <section>
        <!-- Tips dan Trik Start -->
        <div class="home-blog-area blog-h-padding">
            <div class="container">
                <!-- Section Tittle -->
                <div class="row">
                    <div class="col-lg-12">
                        <div class="section-tittle text-center">
                            <span>Artikel Terkini</span>
                            <h2>TIPS DAN TRIK</h2>
                        </div>
                    </div>
                </div>
                <div class="row"> 

<!-- Disini adalah konten artikel yang diulang menggunakan while, untuk menampilkan keseluruhan database -->
                <?php
                include "koneksi.php";

                // Belajar paging : https://www.youtube.com/watch?v=Q1xJdoHrTj4

                // Paging - Konfigurasi
                $jumlahDataPerHalaman = 2;
                $result = mysqli_query($koneksi, "SELECT * FROM artikel");
                $jumlahData = mysqli_num_rows($result);
                $jumlahHalaman = ceil($jumlahData / $jumlahDataPerHalaman);
                $halamanAktif = ( isset($_GET["halaman"]) ) ? $_GET["halaman"] : 1;

                // halaman 2, awalDatanya = 2. Dimulai indeks 0,1,2,3, dst
                $awalData = ( $jumlahDataPerHalaman * $halamanAktif ) - $jumlahDataPerHalaman;
                // Akhir dari Konfigurasi

                // ambilData adalah variabel untuk menampilkan data dari 2 tabel, yaitu artikel dan kategori_artikel. 
                // Sehingga kita dapat menampilkan kategorinya, sesuai id_ktg di kedua tabel
                $ambilData=mysqli_query($koneksi, "SELECT * FROM artikel, kategori_artikel where artikel.id_ktg=kategori_artikel.id_ktg order by id_artikel desc
                LIMIT $awalData,$jumlahDataPerHalaman");


                while ($data = mysqli_fetch_array($ambilData)) { ?>

                <div class="col-xl-6 col-lg-6 col-md-6">
                        <div class="home-blog-single mb-30">
                            <div class="blog-img-cap">
                                <div class="blog-img">
                                    <!-- <img src="assets/img/blog/home-blog1.jpg" alt=""> -->
                                    <!-- Baris img src dibawah ini untuk memanggil gambar sesuai syntax di gambar.php -->
                                    <img src="gambar.php?id_artikel=<?php echo $data['id_artikel']; ?>"/>
                                    <div class="blog-date text-center">
                                        <span><?php echo $data['tanggal']; ?></span>
                                        <p>Kategori : <?php echo $data['kategori_artikel']; ?></p>
                                    </div>
                                </div>
                                <div class="blog-cap">
                                    <p>|   <?php echo $data['nama_penulis']; ?></p>
                                    <h3><a href="detailartikel.php?id_artikel=<?php echo $data['id_artikel']; ?>"><?php echo $data['judul']; ?></a></h3>
                                    <a href="detailartikel.php?id_artikel=<?php echo $data['id_artikel']; ?>" class="more-btn">Read more »</a>
                                </div>
                            </div>
                        </div> 
                    </div> <?php } ?>
                </div>
        <!-- Blog Area End -->

        <!--Pagination Start  -->
        <div class="pagination-area pb-115 text-center">
            <div class="container">
                <div class="row">
                    <div class="col-xl-12">
                        <div class="single-wrap d-flex justify-content-center">
                            <nav aria-label="Page navigation example">
                            <ul class="pagination justify-content-start">

                                    <!-- Memberi tombol prev -->
                                    <?php if( $halamanAktif > 1) : ?>
                                        <li class="page-item">
                                        <a class="page-link" href="?halaman=<?= $halamanAktif - 1; ?>">&lt; Sebelumnya</a></h4>
                                        </li>
                                    <?php endif; ?>

                                    <!-- Navigasi Pages -->
                                    <?php for($i = 1; $i <= $jumlahHalaman; $i++) : ?>
                                        <?php if ($i == $halamanAktif ) : ?>
                                            <li class="page-item active">
                                            <a href="?halaman=<?= $i; ?>" class="page-link"><?= $i; ?></a>
                                            </li>
                                        <?php else : ?>
                                            <li class="page-item">
                                            <a href="?halaman=<?= $i; ?>" class="page-link"><?= $i; ?></a>
                                            </li>
                                        <?php endif; ?>
                                    <?php endfor; ?>

                                    <!-- Memberi tombol next -->
                                    <?php if( $halamanAktif < $jumlahHalaman) : ?>
                                        <li class="page-item">
                                        <a class="page-link" href="?halaman=<?= $halamanAktif + 1; ?>">Selanjutnya &gt;</span></a>
                                        </li>
                                    <?php endif; ?>

                                </ul>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--Pagination End  -->
        </section>

        <section>
             <!-- Our Services Start -->
        <div class="apply-process-area apply-bg pt-150 pb-150" data-background="assets/img/gallery/how-applybg.png">
            <div class="container">
                <!-- Section Tittle -->
                <div class="row">
                    <div class="col-lg-12">
                        <div class="section-tittle text-center">
                            <span>Panduan Penggunaan Aplikasi</span>
                            <h2>TUTORIAL </h2>
                        </div>
                    </div>
                </div>

                
                <?php
                include 'koneksi.php';
                ?>

                
                <?php
                $jtph = 3;
                $result = mysqli_query($koneksi, "SELECT * FROM tutorial");
                $banyakdata = mysqli_num_rows($result);
                $banyakpage = ceil($banyakdata / $jtph);
                $aktif = ( isset($_GET["hlmn"]) ) ? $_GET["hlmn"] : 1;

                $awalData = ( $jtph * $aktif ) - $jtph;
                
                $datatutorial=mysqli_query($koneksi, "SELECT * FROM tutorial order by id_tutorial ASC
                LIMIT $awalData,$jtph");

                ?>

                <div class="row d-flex justify-contnet-center">
                <?php while ($data = mysqli_fetch_array($datatutorial)) {?>
                    <div class="col-lg-4 col-md-6">
                        <div class="single-process text-center mb-30">
                            <div class="process-ion">
                            <img src="gambartutorial.php?id_tutorial=<?php echo $data['id_tutorial']; ?>"width="120px">
                           
                            </div>
                            <div class="process-cap">
                                <h5><?= $data['judul_tutorial']; ?></h5>
                                <div class="btn_detail">
                            <div class="items-link f-center">
                            <a href="detailtutorial.php?id_tutorial=<?= $data['id_tutorial']; ?>" class="genric-btn default radius">Detail</a>
                                </div>
                            </div>
                            </div>
                        </div> 
                    </div> 
                    <?php } ?>
                </div> 
            </div>
        </div>
        </section>

        <footer>
        <?php include 'footer.php'; ?>
        </footer>

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