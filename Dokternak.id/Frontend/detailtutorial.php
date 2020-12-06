<!doctype html>
<html class="no-js" lang="zxx">

<head>
   <meta charset="utf-8">
   <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title> Dokternak.id - Tutorial </title>
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
   <!-- Hero Area Start-->
   <div class="slider-area ">
      <div class="single-slider section-overly slider-height2 d-flex align-items-center" data-background="assets/img/gallery/s2.jpg">
          <div class="container">
              <div class="row">
                  <div class="col-xl-12">
                      <div class="hero-cap text-center">
                          <h2>TUTORIAL</h2>
                      </div>
                  </div>
              </div>
          </div>
      </div>
   </div>
   <!-- Hero Area End -->

        <!-- Support Company Start-->

        <?php
        include "koneksi.php";

        // Disini adalah percabangan if untuk menentukan apakah ada id_tutorial yang dibuka
        // Jika user langsung membuka detailtutorial.php tanpa mengklik judul di daftar tutorial, maka id_tutorial yang ditampilkan otomatis T01 / Tutorial pertama
            if (isset($_GET["id_tutorial"])) {
                $id_tutorial = $_GET["id_tutorial"];
             } else {
                $id_tutorial = $_GET["id_tutorial"] = "T01";
             }

        $query_mysql = mysqli_query($koneksi,"SELECT * FROM tutorial WHERE id_tutorial = '$id_tutorial'");
        
        while ($data = mysqli_fetch_array($query_mysql)) { ?>

        <div class="support-company-area fix section-padding2">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-xl-6 col-lg-6">
                        <div class="right-caption">
                            <!-- Section Tittle -->
                            <div class="section-tittle section-tittle2">
                                <span>TUTORIAL</span>
                                <h2><?= $data['judul_tutorial'] ?></h2>
                            </div>
                            <div class="support-caption">
                                <p class="pera-top">Kami berharap anda dapat memperoleh pengalaman terbaik di website kami. Berikut ini adalah tutorial mengenai <?= $data['judul_tutorial']; ?></p>
                                <p><?= nl2br(str_replace(' ', ' ', htmlspecialchars($data['isi']))); ?> </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-6 col-lg-6">
                        <div class="support-location-img">
                            <img src="gambartutorial.php?id_tutorial=<?php echo $data['id_tutorial']; ?>" alt="">
                        </div>
                    </div>
                </div> 
            </div>
        </div> <?php } ?>
        <!-- Support Company End-->
        <!-- How  Apply Process Start-->
        <div class="apply-process-area apply-bg pt-150 pb-150" data-background="assets/img/gallery/how-applybg.png">
            <div class="container">
                <!-- Section Tittle -->
                <div class="row">
                    <div class="col-lg-12">
                        <div class="section-tittle white-text text-center">
                            <span>Tutorial Lainnya</span>
                        </div>
                    </div>
                </div>
                <!-- Apply Process Caption -->
                <div class="row">
                    <?php 
                    $query_mysql = mysqli_query($koneksi,"SELECT * FROM tutorial");
                    while ($data = mysqli_fetch_array($query_mysql)) { 
                    ?>
                    <div class="col-lg-4 col-md-6">
                        <div class="single-process text-center mb-30">
                            <div class="process-ion">
                            <img src="gambartutorial.php?id_tutorial=<?php echo $data['id_tutorial']; ?>" width="100px">
                                <span class="flaticon-search"></span>
                            </div>
                            <div class="process-cap">
                                <h5><?= $data['judul_tutorial']; ?></h5>
                                <div class="btn_detail">
                            <div class="items-link f-center">
                                <a href="detailtutorial.php?id_tutorial=<?= $data['id_tutorial']; ?>">Detail</a>
                                </div>
                            </div>
                            </div>
                        </div> 
                    </div> <?php } ?>
            
                </div>
            </div>
        </div>
        <!-- How  Apply Process End-->
        
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
        
</body>
</html>