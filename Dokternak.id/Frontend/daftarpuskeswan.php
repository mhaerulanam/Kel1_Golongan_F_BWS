<?php
// Start the session
session_start();
?>
<!doctype html>
<html class="no-js" lang="zxx">

<head>
   <meta charset="utf-8">
   <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title> Dokternak.id - Daftar Puskeswan </title>
   <meta name="description" content="">
   <meta name="viewport" content="width=device-width, initial-scale=1">
   <link rel="shortcut icon" type="image/x-icon" href="assets/img/favicon.png">
  
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
<navbar>
    <?php include "modal/login.php"; ?>
    <?php include "modal/ubah_password.php"; ?>
    <?php
        include 'navbar.php';
    ?>
    </navbar>
 <!-- Banner Atas Start-->
 <div class="slider-area ">
      <div class="single-slider section-overly slider-height2 d-flex align-items-center" data-background="assets/img/gallery/s2.jpg">
          <div class="container">
              <div class="row">
                  <div class="col-xl-12">
                      <div class="hero-cap text-center">
                          <h2>DAFTAR PUSKESWAN</h2>
                      </div>
                  </div>
              </div>
          </div>
      </div>
   </div>
   <!-- Banner End -->
    
  <!-- Our Services Start -->
  <div class="our-services section-pad-t30">
            <div class="container">

              <?php 
                        include "koneksi.php";
		                $s_nama="";
                        $search_keyword="";
                        if (isset($_POST['search'])) {
                        $s_nama = $_POST['s_nama'];
                        $search_keyword = $_POST['cari puskeswan'];
                        }
                        ?>            
            <div class="pagination-area pb-200 text-center">
                <div class="blog_right_sidebar">          
                <aside class="single_sidebar_widget search_widget">
                            <form method="POST">
                                <div class="input-group mb-3">
                                        <input type="text" class="form-control" placeholder='cari puskeswan' name="nt" id="cari puskeswan" value="<?php echo $search_keyword; ?>"
                                            onfocus="this.placeholder = ''"
                                            onblur="this.placeholder = 'search_keyword'">
                                        <div class="input-group-append">
                                            <button class="btns" type="submit" name="submit"><i class="ti-search"></i></button> 
                                        </div>
                                   </div>      
                            </form>
                        </aside>
                </div>
                </div>
                <?php
                include 'koneksi.php';
                ?>
                <div class="row d-flex justify-contnet-center"> 
                <?php
                    if (ISSET($_POST['submit'])){
                        $cari = $_POST['nt'];
                    
                        $query2 = " SELECT * FROM puskeswan WHERE nama_puskeswan LIKE '%$cari%' OR alamat LIKE'%$cari%'";

                        $sql = mysqli_query($koneksi, $query2);
                        while ($data = mysqli_fetch_array($sql)) {?>
                
                            <div class="col-lg-4 col-md-6">
                            <div class="single-services text-center mb-30">
                                    <div class="services-ion">
                                    <img src="gambarpuskeswan.php?id_puskeswan=<?php echo $data['id_puskeswan']; ?>"width="200px"><br>
                                   
                                    </div>
                                    <div class="services-cap">
                                        <h5><?= $data['nama_puskeswan']; ?></h5>
                                        <?= $data['alamat']; ?><br><br>
                                        <div class="btn_detail">
                                    <div class="services-cap">
                                        <a href="detailpuskeswan.php?id_puskeswan=<?= $data['id_puskeswan']; ?>" class="genric-btn primary radius">Detail</a>
                                        </div>
                                    </div>
                                    </div>
                                </div> 
                            </div> 
                            <?php }
                    }else{
                $datapuskeswan=mysqli_query($koneksi, "SELECT * FROM puskeswan");
                ?> 
                <?php while ($data = mysqli_fetch_array($datapuskeswan)) {?>
                
                    <div class="col-lg-4 col-md-6">
                    <div class="single-services text-center mb-30">
                            <div class="services-ion">
                            <img src="gambarpuskeswan.php?id_puskeswan=<?php echo $data['id_puskeswan']; ?>"width="200px"><br>
                           
                            </div>
                            <div class="services-cap">
                                <h5><?= $data['nama_puskeswan']; ?></h5>
                                <?= $data['alamat']; ?><br><br>
                                <div class="btn_detail">
                            <div class="services-cap">
                                <a href="detailpuskeswan.php?id_puskeswan=<?= $data['id_puskeswan']; ?>" class="genric-btn primary radius">Detail</a>
                                </div>
                            </div>
                            </div>
                        </div> 
                    </div> 
                    <?php } }?>
                </div> 
            </div>
  </div>
  
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
        <footer>
            <?php 
                include 'footer.php';
            ?>
        </footer>
</html>