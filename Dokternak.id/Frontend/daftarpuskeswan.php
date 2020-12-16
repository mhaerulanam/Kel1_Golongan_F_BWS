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
    <style>
.col-md-4{
      padding-bottom:20px;
  }
  
  .white {
    color: #fff !important;
  }
  .mt{float: left;margin-top: -20px;padding-top: 20px;}
  .bg-blue-ui {
    background-color: #708198 !important;
  }
  figure img{width:300px;
  height: 300px;
  }
  
  #blogCarousel {
    padding-bottom: 100px;
  }
  
  .blog .carousel-indicators {
    left: 0;
    top: -50px;
    height: 50%;
  }
  
  
  /* The colour of the indicators */
  
  .blog .carousel-indicators li {
    background: #708198;
    border-radius: 50%;
    width: 8px;
    height: 8px;
  }
  
  .blog .carousel-indicators .active {
    background: #0fc9af;
  }

  .item-carousel-blog-block {
    outline: medium none;
    padding: 15px;
  }
  
  .item-box-blog {
    border: 1px solid #dadada;
    text-align: center;
    z-index: 4;
    height: 560px;
    padding: 20px;
  }
  
  .item-box-blog-image {
    position: relative;
    /* mask-image:; */
  }
  
  .item-box-blog-image figure img {
    width: 100%;
    /* height: auto; */
    height: 270px;
  }
  
  
  .item-box-blog-body {
    padding: 10px;
  }
  
  .item-heading-blog a h5 {
    margin: 0;
    line-height: 1;
    text-decoration:none;
    transition: color 0.3s;
  }
  
  .item-box-blog-heading a {
      text-decoration: none;
  }
  
  .item-box-blog-data p {
    font-size: 13px;
  }
  
  .item-box-blog-data p i {
    font-size: 12px;
  }
  
  .item-box-blog-text {
    max-height: 100px;
    overflow: hidden;
  }
  
  .mt-10 {
    float: left;
    margin-top: -10px;
    padding-top: 10px;
  }
  
  .btn.bg-blue-ui.white.read {
    cursor: pointer;
    padding: 4px 20px;
    float: left;
    margin-top: 10px;
  }
  
  .btn.bg-blue-ui.white.read:hover {
    box-shadow: 0px 5px 15px inset #4d5f77;
  }
    </style>
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
                $jdataperhalaman = 3;
                $result = mysqli_query($koneksi, "SELECT * FROM artikel");
                $jumlahData = mysqli_num_rows($result);
                $jumlahHalaman = ceil($jumlahData / $jdataperhalaman);
                $halamanAktif = ( isset($_GET["halaman"]) ) ? $_GET["halaman"] : 1 ;

                // halaman 2, awalDatanya = 2. Dimulai indeks 0,1,2,3, dst
                $awalData = ( $jdataperhalaman * $halamanAktif ) - $jdataperhalaman;
                $datapuskeswan=mysqli_query($koneksi, "SELECT * FROM puskeswan LIMIT $awalData,$jdataperhalaman");
                ?>
                <div class="row d-flex justify-contnet-center"> 
                <?php
                    if (ISSET($_POST['submit'])){
                        $cari = $_POST['nt'];
                    
                        $query2 = " SELECT * FROM puskeswan WHERE nama_puskeswan LIKE '%$cari%' OR alamat LIKE'%$cari%'";

                        $sql = mysqli_query($koneksi, $query2);
                        while ($data = mysqli_fetch_array($sql)) {?>
                
                            <div class="col-lg-4 col-md-6">
                                <div class="item-box-blog">
                                <div class="item-box-blog-image">
                                    <!--Image-->
                                    <figure> <img alt="" src="gambarpuskeswan.php?id_puskeswan=<?php echo $data['id_puskeswan']; ?>" > </figure>
                                </div>
                                <div class="item-box-blog-body">
                                    <!--Heading-->
                                    <div class="item-box-blog-heading">
                                    <a href="#" tabindex="0">
                                        <h4><b><?= $data['nama_puskeswan']; ?></b></h4>
                                    </a>
                                    </div>
                                
                                    <!--Text-->
                                    <div class="item-box-blog-text">
                                    <p><?= $data['alamat']; ?></p>
                                    </div>
                                    <div class="services-cap">
                                        <a href="detailpuskeswan.php?id_puskeswan=<?= $data['id_puskeswan']; ?>" class="genric-btn primary radius">Detail</a>
                                    </div>
                                </div>
                                </div>
                            </div> 
                            <?php }
                    }else{
                ?> 
                <?php while ($data = mysqli_fetch_array($datapuskeswan)) {?>
                    <div class="col-lg-4 col-md-6">
                                <div class="item-box-blog">
                                <div class="item-box-blog-image">
                                    <!--Image-->
                                    <figure> <img alt="" src="gambarpuskeswan.php?id_puskeswan=<?php echo $data['id_puskeswan']; ?>" > </figure>
                                </div>
                                <div class="item-box-blog-body">
                                    <!--Heading-->
                                    <div class="item-box-blog-heading">
                                    <a href="#" tabindex="0">
                                        <h4><b><?= $data['nama_puskeswan']; ?></b></h4>
                                    </a>
                                    </div>
                                
                                    <!--Text-->
                                    <div class="item-box-blog-text">
                                    <p><?= $data['alamat']; ?></p>
                                    </div>
                                    <div class="services-cap">
                                        <a href="detailpuskeswan.php?id_puskeswan=<?= $data['id_puskeswan']; ?>" class="genric-btn primary radius">Detail</a>
                                    </div>
                                </div>
                                </div>
                            </div>
                    <?php } }?>
                </div> 
            </div>
  </div>
  
  <?php
    if(isset($_POST['submit'])) :
    else  :
        if($jumlahData=3) :
        else:
    ?>
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
        <?php endif; ?>
    <?php endif; ?>

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