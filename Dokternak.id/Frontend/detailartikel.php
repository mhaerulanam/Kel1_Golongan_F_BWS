<!doctype html>
<html class="no-js" lang="zxx">

<head>
   <meta charset="utf-8">
   <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title> Dokternak.id - Tips dan Trik </title>
   <meta name="description" content="">
   <meta name="viewport" content="width=device-width, initial-scale=1">
   <link rel="shortcut icon" type="image/x-icon" href="assets/img/favicon.png">
  
   <!-- CSS here -->
      <link rel="stylesheet" href="assets/css/bootstrap.min.css">
      <link rel="stylesheet" href="assets/css/owl.carousel.min.css">
      <link rel="stylesheet" href="assets/css/slicknav.css">
      <link rel="stylesheet" href="assets/css/price_rangs.css">
      <link rel="stylesheet" href="assets/css/animate.min.css">
      <link rel="stylesheet" href="assets/css/magnific-popup.css">
      <link rel="stylesheet" href="assets/css/fontawesome-all.min.css">
      <link rel="stylesheet" href="assets/css/themify-icons.css">
      <link rel="stylesheet" href="assets/css/slick.css">
      <link rel="stylesheet" href="assets/css/nice-select.css">
      <link rel="stylesheet" href="assets/css/style.css">
      <link rel="stylesheet" href="assets/css/responsive.css">
</head>

<body>
<header>
         <?php 
            include 'navbar.php';
         ?>
</header>
   <!-- Hero Area Start-->
   <div class="slider-area ">
      <div class="single-slider section-overly slider-height2 d-flex align-items-center" data-background="assets/img/gallery/s2.jpg">
          <div class="container">
              <div class="row">
                  <div class="col-xl-12">
                      <div class="hero-cap text-center">
                          <h2>TIPS DAN TRIK</h2>
                      </div>
                  </div>
              </div>
          </div>
      </div>
   </div>
   <!-- Hero Area End -->
   <!--================Blog Area =================-->
   <section class="blog_area single-post-area section-padding">
      <div class="container">
         <div class="row">
         <?php
            include "koneksi.php";

            // Konfigurasi menampilkan artikel lainnya
            $jumlahDataPerHalaman = 3;
            $result = mysqli_query($koneksi, "SELECT * FROM artikel order by id_artikel desc");
            $jumlahData = mysqli_num_rows($result);
            $jumlahHalaman = ceil($jumlahData / $jumlahDataPerHalaman);
            $halamanAktif = ( isset($_GET["halaman"]) ) ? $_GET["halaman"] : 1;

            // halaman 2, awalDatanya = 2. Dimulai indeks 0,1,2,3, dst
            $awalData = ( $jumlahDataPerHalaman * $halamanAktif ) - $jumlahDataPerHalaman;
            // Akhir dari Konfigurasi

            // Disini adalah percabangan if untuk menentukan apakah ada id_artikel yang dibuka
            // Jika user langsung membuka detailartikel.php tanpa mengklik judul di tipsdantrik.php, maka id_artikel yang ditampilkan otomatis ART1 / Artikel pertama
            if (isset($_GET["id_artikel"])) {
               $id_artikel = $_GET["id_artikel"];
            } else {
               $id_artikel = $_GET["id_artikel"] = 1;
            }
            
            // Pendeklarasian variabel kategori
            $datakat=mysqli_query($koneksi, "SELECT *, COUNT( * ) as total FROM artikel inner join kategori_artikel on artikel.id_ktg=kategori_artikel.id_ktg GROUP BY kategori_artikel");
            $jumlahkat = mysqli_num_rows($datakat);

            // $id_artikel = $_GET['id_artikel'];
            // $artikelAktif = ( isset($_GET["id_artikel"]) ) ? $_GET["id_artikel"] : 1;

            $query_mysql = mysqli_query($koneksi,"SELECT * FROM artikel, kategori_artikel WHERE id_artikel = '$id_artikel'
            AND artikel.id_ktg=kategori_artikel.id_ktg");
            while ($data = mysqli_fetch_array($query_mysql)) { ?>
            <div class="col-lg-8 posts-list">
                  <div class="single-post">
                     <div class="feature-img">
                        <img class="img-fluid" src="gambar.php?id_artikel=<?php echo $data['id_artikel']; ?>" alt="">
                     </div>
                     <div class="blog_details">
                           <h2><?php echo $data['judul']; ?></h2>
                           <ul class="blog-info-link mt-3 mb-4">
                              <li><a href="#"><i class="fa fa-user"></i> <?php echo $data['nama_penulis']; ?></a></li>
                              <li><a href="#"><i></i>Kategori : <?php echo $data['kategori_artikel']; ?></a></li>
                              <li><a href="#"><i class="fa fa-comments"></i><?php echo $data['tanggal']; ?></a></li>
                           </ul>
                           <p class="excert">
                              <?php echo nl2br(str_replace(' ', ' ', htmlspecialchars($data['isi']))); ?>
                           </p>
                           <div class="quote-wrapper">
                              <div class="quotes">
                              <p><?php echo $data['sumber'] ?></p>
                           </div>
                     </div>
                  </div>
               </div>
                <?php } ?>
               
                <!-- Icon Bagikan -->
                <div class="navigation-top">
                  <div class="d-sm-flex justify-content-between text-center">
                     <div class="col-sm-4 text-center my-2 my-sm-0">
                        <!-- <p class="comment-count"><span class="align-middle"><i class="fa fa-comment"></i></span> 06 Comments</p> -->
                     </div>
                     <ul class="social-icons">
                        <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                        <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                        <li><a href="#"><i class="fab fa-dribbble"></i></a></li>
                        <li><a href="#"><i class="fab fa-behance"></i></a></li>
                     </ul>
                  </div>
               </div>

               
            </div>

            <!-- Sidebar kanan -->
            <div class="col-lg-4">
               <div class="blog_right_sidebar">

               <!-- Tulis Artikel -->
                    <div class="btn_tulis">
                            <div class="items-link f-center">
                                <a href="daftar_artikel.php" class="genric-btn primary">DAFTAR ARTIKEL</a>
                                </div>
                     </div>

                        <aside class="single_sidebar_widget post_category_widget">
                            <h4 class="widget_title">KATEGORI</h4>
                            <ul class="list cat-list">
                            <?php while ($kategori = mysqli_fetch_array($datakat)) { ?>
                                <li>
                                    <a href="daftar_artikel.php?tampil=<?=$kategori['id_ktg']; ?>" class="d-flex">
                                        <p><?php echo $kategori['kategori_artikel']; ?> </p>
                                        <p>(<?php echo $kategori['total']; ?>)</p>
                                    </a>
                                </li>
                            <?php } ?>
                            </ul>
                        </aside>


                  <!-- Artikel Lainnya -->
                  <aside class="single_sidebar_widget popular_post_widget">
                     <h3 class="widget_title">Artikel Lainnya</h3>

                     <?php
                        $ambilData=mysqli_query($koneksi, "SELECT * FROM artikel, kategori_artikel 
                            where artikel.id_ktg=kategori_artikel.id_ktg and id_artikel != '$id_artikel' order by id_artikel desc
                            LIMIT $awalData,$jumlahDataPerHalaman"); 
                            
                        while ($data = mysqli_fetch_array($ambilData)) { 
                    ?>
                    <div class="media post_item">
                        <img src="gambar.php?id_artikel=<?php echo $data['id_artikel'];?>" width="120px" />
                        <div class="media-body">
                              <a href="detailartikel.php?id_artikel=<?php echo $data['id_artikel']; ?>">
                                 <h3><?= $data['judul']; ?></h3>
                              </a>
                              <p><?= $data['tanggal']; ?></p>
                        </div>
                    </div> 
                    <?php } ?>
                  </aside>
                  
               </div>
            </div>
         </div>
      </div>
   </section>
   <!--================ Blog Area end =================-->
   
<!-- JS here -->
	
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
      <!-- Date Picker -->
      <script src="./assets/js/gijgo.min.js"></script>
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
        
      <footer>
            <?php 
                include 'footer.php';
            ?>
      </footer>
</body>
</html>