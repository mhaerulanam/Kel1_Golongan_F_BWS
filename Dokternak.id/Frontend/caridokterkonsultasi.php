<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pencarian</title>
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
<body><?php 
    include "koneksi.php";
		$s_kecamatan="";
        $s_keyword="";
        if (isset($_POST['search'])) {
            $s_kecamatan = $_POST['s_kecamatan'];
            $s_keyword = $_POST['s_keyword'];
        }
?>
                        <!-- Search Box -->
                        <div class="row">
                            <div class="col-xl-8">
                                <!-- form -->
                                <form method="POST" action="#" class="search-box">
                                    <div class="input-form">
                                        <input type="text" placeholder="Masukkan Nama Dokter" name="s_keyword" id="s_keyword" value="<?php echo $s_keyword; ?>">
                                    </div>
                                    <div class="select-form">
                                        <div class="select-itms">
                                            <select name="s_kecamatan" class="form-control" id="exampleFormControlSelect1">
                                                <option value="Bondowoso" <?php if ($s_kecamatan=="Bondowoso"){ echo "selected"; } ?>>Bondowoso</option>
                                                <option value="Binakal" <?php if ($s_kecamatan=="Binakal"){ echo "selected"; } ?>>Binakal</option>
                                                <option value="Cermee" <?php if ($s_kecamatan=="Cermee"){ echo "selected"; } ?>>Cermee</option>
                                                <option value="Curahdami" <?php if ($s_kecamatan=="Curahdami"){ echo "selected"; } ?>>Curahdami</option>
                                                <option value="Grujugan" <?php if ($s_kecamatan=="Grujugan"){ echo "selected"; } ?>>Grujugan</option>
                                                <option value="Jambesari" <?php if ($s_kecamatan=="Jambesari"){ echo "selected"; } ?>>Jambesari</option>
                                                <option value="Klabang" <?php if ($s_kecamatan=="Klabang"){ echo "selected"; } ?>>Klabang</option>
                                                <option value="Maesan" <?php if ($s_kecamatan=="Maesan"){ echo "selected"; } ?>>Maesan</option>
                                                <option value="Pakem" <?php if ($s_kecamatan=="Pakem"){ echo "selected"; } ?>>Pakem</option>
                                                <option value="Prajekan" <?php if ($s_kecamatan=="Prajekan"){ echo "selected"; } ?>>Prajekan</option>
                                                <option value="Pujer" <?php if ($s_kecamatan=="Pujer"){ echo "selected"; } ?>>Pujer</option>
                                                <option value="Sempol" <?php if ($s_kecamatan=="Sempol"){ echo "selected"; } ?>>Sempol</option>
                                                <option value="Sukosari" <?php if ($s_kecamatan=="Sukosari"){ echo "selected"; } ?>>Sukosari</option>
                                                <option value="Sumberwringin" <?php if ($s_kecamatan=="Sumberwringin"){ echo "selected"; } ?>>Sumberwringin</option>
                                                <option value="Taman Krocok" <?php if ($s_kecamatan=="Taman Krocok"){ echo "selected"; } ?>>Taman Krocok</option>
                                                <option value="Tamanan" <?php if ($s_kecamatan=="Tamanan"){ echo "selected"; } ?>>Tamanan</option>
                                                <option value="Tapen" <?php if ($s_kecamatan=="Tapen"){ echo "selected"; } ?>>Tapen</option>
                                                <option value="Tegalampel" <?php if ($s_kecamatan=="Tegalampel"){ echo "selected"; } ?>>Tegalampel</option>
                                                <option value="Tenggarang" <?php if ($s_kecamatan=="Tenggarang"){ echo "selected"; } ?>>Tenggarang</option>
                                                <option value="Tlogosari" <?php if ($s_kecamatan=="Tlogosari"){ echo "selected"; } ?>>Tlogosari</option>
                                                <option value="Wonosari" <?php if ($s_kecamatan=="Wonosari"){ echo "selected"; } ?>>Wonosari</option>
                                                <option value="Wringin" <?php if ($s_kecamatan=="Wringin"){ echo "selected"; } ?>>Wringin</option>

                                            </select>
                                        </div>
                                    </div>
                                    <div class="search-form">
                                    <a><button id="search" name="search" class="btn btn-warning">Cari</button></a>
                                        <!-- <a href="tampil.php" id="search" name="search">Cari</a> -->
                                    </div>	
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        <!-- </div> -->




        
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
</html>