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
<?php include ('navbar.php'); ?>
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
  
             <!-- Our Services Start -->
            <div class="container">
                <!-- Section Tittle -->
         
                <?php
                include 'koneksi.php';
                ?>
   
                <?php
                // Paging - Konfigurasi
                $jmlhhal = 3;
                $rslt = mysqli_query($koneksi, "SELECT * FROM tutorial");
                $jumlahDt = mysqli_num_rows($rslt);
                $jumlahhlm = ceil($jumlahDt / $jmlhhal);
                $halamanon = ( isset($_GET["hal"]) ) ? $_GET["hal"] : 1;

                // halaman 2, awalDatanya = 2. Dimulai indeks 0,1,2,3, dst
                $aData = ( $jmlhhal* $halamanon ) - $jmlhhal;
                // Akhir dari Konfigurasi

                // ambilData adalah variabel untuk menampilkan data dari 2 tabel, yaitu artikel dan kategori_artikel. 
                // Sehingga kita dapat menampilkan kategorinya, sesuai id_ktg di kedua tabel
                $Dataa=mysqli_query($koneksi, "SELECT * FROM tutorial order by id_tutorial ASC
                LIMIT $aData,$jmlhhal");
                ?>
                <div class="our-services section-pad-t30">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="section-tittle text-center">
                            <span>Panduan Penggunaan Aplikasi</span>
                            <h2>TUTORIAL </h2>
                        </div>
                    </div>
                </div>
                    <div class="row d-flex justify-contnet-center">
                    <?php while ($data = mysqli_fetch_array($Dataa)) { ?>
                        <div class="col-lg-4 col-md-6">
                    <div class="single-services text-center mb-30">
                            <div class="services-ion">
                            <img src="gambartutorial.php?id_tutorial=<?php echo $data['id_tutorial']; ?>"width="80px"><br>
                           
                            </div>
                            <div class="services-cap">
                                <h5><?= $data['judul_tutorial']; ?></h5><br><br>
                                <div class="btn_detail">
                            <div class="services-cap">
                                <a href="detailtutorial.php?id_tutorial=<?= $data['id_tutorial']; ?>" class="genric-btn primary radius">Detail</a>
                                </div>
                            </div>
                            </div>
                        </div> 
                    </div> 
                    <?php } ?>
                    </div>
                    <div class="pagination-area pb-115 text-center">
            <div class="container">
                <div class="row">
                    <div class="col-xl-12">
                        <div class="single-wrap d-flex justify-content-center">
                            <nav aria-label="Page navigation example">
                            <ul class="pagination justify-content-start">

                                    <!-- Memberi tombol prev -->
                                    <?php if( $halamanon > 1) : ?>
                                        <li class="page-item">
                                        <a class="page-link" href="?hal=<?= $halamanon - 1; ?>">&lt; Sebelumnya</a></h4>
                                        </li>
                                    <?php endif; ?>

                                    <!-- Navigasi Pages -->
                                    <?php for($i = 1; $i <= $jumlahhlm ; $i++) : ?>
                                        <?php if ($i == $halamanon ) : ?>
                                            <li class="page-item active">
                                            <a href="?hal=<?= $i; ?>" class="page-link"><?= $i; ?></a>
                                            </li>
                                        <?php else : ?>
                                            <li class="page-item">
                                            <a href="?hal=<?= $i; ?>" class="page-link"><?= $i; ?></a>
                                            </li>
                                        <?php endif; ?>
                                    <?php endfor; ?>

                                    <!-- Memberi tombol next -->
                                    <?php if( $halamanon < $jumlahhlm ) : ?>
                                        <li class="page-item">
                                        <a class="page-link" href="?hal=<?= $halamanon+ 1; ?>">Selanjutnya &gt;</span></a>
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
        </div>
    </div>                  <!--Pagination Start  -->

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