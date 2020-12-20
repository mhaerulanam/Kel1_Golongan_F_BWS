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
            <link rel="stylesheet" href="assets/scss/input.scss">
</head>
<body>
    <?php
    include "koneksi.php";
    include "navbar.php";
    
    ?>
    <h1>Konsultasi</h1>
    <p align="center">Temukan jawaban atas masalahmu, dengan berkonsultasi kepada dokter ahli.</p>
    <?php
        if (isset($_GET['pesan'])){
            $pesan = $_GET['pesan'];
                if ($pesan == 'berhasil') {
    ?>
                <div class="alert alert-success">
                    <center>Konsultasi terkirim, mohon bersabar karena dokter akan membalasnya setelah membuka website.</center>
                </div>
    <?php
                }elseif($pesan == 'gagal'){
    ?>
                <div class="alert alert-danger">
                    <center>Mohon maaf, konsultasi anda gagal terkirim.</center>
                </div>
    <?php
                }
        }
    ?>
    <div class="slider-active">
        <div class="section-top-border">
            <div class="kotak">
                <div class="row">

                    <?php 
                    if (isset($_GET["id_dokter"])) {
                        $id_dokter = $_GET["id_dokter"];
                    } else {
                        $id_dokter = $_GET["id_dokter"] = "DOC001";
                    }

                    $query_dok = mysqli_query($koneksi,"SELECT * FROM dokter 
                    where id_dokter = '$id_dokter' ");
                    
                    // Query 2
                    // if(isset($_SESSION['username'])){
                    // $nama = $_SESSION['username'];
                    // $id_peternak = $_SESSION['id'];

                    // $query_p = mysqli_query($koneksi,"SELECT * FROM peternak
                    // WHERE id_peternak = '$id_peternak'");
                    // } else {
                    // }
                    ?>

                    <div class="col-lg-12 ">
                        <form method="POST" action="konsultasi_aksi.php">
                            
                                <input type="hidden" name="id_peternak" required class="single-input"
                                value="<?php echo $_SESSION['id_peternak']; ?>">
                            
                                
                                <input type="hidden" name="tanggal" value="<?php echo date("y-m-d"); ?>">
                                <input type="hidden" name="komentar" value="">
                                

                            <div class="mt-30">
                                <?php while ($dok = mysqli_fetch_array($query_dok)) { ?>
                                    <input type="hidden" name="id_dokter" value="<?= $dok['id_dokter']; ?>">
                                    <h5 class="mb-15">Kepada</h5>
                                    <input type="text" name="kepada" placeholder="Masukkan Nama Dokter Tujuan"
                                        required class="single-input-primary" value="<?php echo $dok['nama']; ?>" disabled>
                                    <a href="daftar_dokter.php" class="genric-btn info radius">Ganti Dokter</a>
                                <?php } ?>
                            </div>
                            <div class="mt-30">
                                <h5 class="mb-15">Kategori Hewan</h5>
                                <select class="form-select" id="default-select">
                                    <option disabled selected> Pilih </option>
                                    <?php 
                                    $sql = mysqli_query($koneksi, "SELECT * FROM kategori_hewan");
                                    while ($kat = mysqli_fetch_array($sql)) { ?>
                                    <option name="id_kategori" value="<?=$kat['id_kategori']?>"><?=$kat['kategori_hewan']?></option> 
                                    <?php } ?>
                                </select><br>
                                <!-- https://www.maribelajarcoding.com/2019/05/menampilkan-dropdown-select-option-dari.html -->
                            </div>
                            <div class="mt-30">
                                <h5 class="mb-15">Nama Hewan</h5>
                                <input type="text" name="nama_hewan" placeholder="Masukkan Nama Hewan (Nama hewan asli / Nama panggilan)"
                                    required class="single-input-primary">
                            </div>
                            <div class="mt-30">
                                <h5 class="mb-15">Keluhan</h5>
                                <textarea name="keluhan" placeholder="Tulis Keluhan" required class="single-input-primary"></textarea>
                            </div>
                            <div class="mt-30">
                                <button type="submit" class="genric-btn primary">KIRIM</button>             
                                <!-- <a href="#" class="genric-btn default">BATAL</button> -->
                            </div>
                        </form>
                    </div> 
                </div> 
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

        <!-- Link Js CkEditor -->
        <!-- <script type="text/javascript" src="./assets/ckeditor/ckeditor.js"></script> -->

    <?php
    include "footer.php";
    
    ?>
</body>
</html>