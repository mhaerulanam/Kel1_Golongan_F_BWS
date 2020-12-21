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
    <div class="slider-active">
        <div class="section-top-border">
            <div class="kotak">
                <div class="row">
                    <?php
                   
                    
                    // Query 2
                    // if(isset($_SESSION['username'])){
                    // $nama = $_SESSION['username'];
                    // $id_peternak = $_SESSION['id'];

                    // $query_p = mysqli_query($koneksi,"SELECT * FROM peternak
                    // WHERE id_peternak = '$id_peternak'");
                    // } else {
                    // }
                    $s_nama="";
                    $search_keyword="";
                    if (isset($_POST['search'])) {
                        $s_nama = $_POST['nama'];
                        $search_keyword = $_POST['nama'];
                    }
                    ?>

                    <div class="col-lg-12 ">
                        <form method="POST" action="konsultasi_aksi.php">
                            
                                <input type="hidden" name="id_peternak" required class="single-input"
                                value="<?php echo $_SESSION['id']; ?>">
                            
                                
                                <input type="hidden" name="tanggal" value="<?php echo date("d-m-Y"); ?>">
                                <!-- <input type="hidden" name="komentar" value=""> -->
                                

                            <div class="mt-30">
                            <h5 class="mb-15">Kepada</h5>
                            <input list="id_dokter" class="form-control" placeholder='Masukkan nama Dokter tujuan' value="<?php echo $search_keyword; ?>" name="id_dokter">
                            <datalist id="id_dokter" name="id_dokter">
                                <?php 
                                $query_dok = mysqli_query($koneksi,"SELECT * FROM dokter");
                                while ($dok = mysqli_fetch_array($query_dok)) { ?>
                                    
                                <option value="<?= $dok['id_dokter']; ?>" ><?php echo $dok['nama']; ?></option>
                            
                                <?php } ?>
                                </datalist>
                            </div>
                            <div class="mt-30">
                                <h5 class="mb-15">Kategori Hewan</h5>
                                <select name="id_kategori" class="form-select" id="default-select">
                                    <option disabled selected> Pilih </option>
                                    <?php 
                                    $sql = mysqli_query($koneksi, "SELECT * FROM kategori_hewan");
                                    while ($kat = mysqli_fetch_array($sql)) { ?>
                                    <option value="<?=$kat['id_kategori']?>"><?=$kat['kategori_hewan']?></option> 
                                    <?php } ?>
                                </select><br>
                                <!-- https://www.maribelajarcoding.com/2019/05/menampilkan-dropdown-select-option-dari.html -->
                            </div>
                            <div class="mt-30">
                                <h5 class="mb-15">Jenis Hewan</h5>
                                <select name="id_ktg" class="form-select" id="default-select">
                                    <option disabled selected> Pilih </option>
                                    <?php 
                                    $sql_2 = mysqli_query($koneksi, "SELECT * FROM kategori_artikel");
                                    while ($kat_2 = mysqli_fetch_array($sql_2)) { ?>
                                    <option value="<?=$kat_2['id_ktg']?>"><?=$kat_2['kategori_artikel']?></option> 
                                    <!-- Menggunakan tabel kategori artikel, karena isinya adalah jenis hewan, jadi bisa dipake di form ini juga selain di tulis artikel -->
                                    <?php } ?>
                                </select><br>
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