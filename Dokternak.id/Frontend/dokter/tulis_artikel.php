<?php
// Start the session
session_start();
if (!isset($_SESSION["username"])) {
    header("location:daftar_artikel.php?pesan=gagal");
}
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
		<link rel="shortcut icon" type="image/x-icon" href="../assets/img/favicon.ico">

		<!-- CSS here -->
            <link rel="stylesheet" href="../assets/css/bootstrap.min.css">
            <link rel="stylesheet" href="../assets/css/owl.carousel.min.css">
            <link rel="stylesheet" href="../assets/css/flaticon.css">
            <link rel="stylesheet" href="../assets/css/price_rangs.css">
            <link rel="stylesheet" href="../assets/css/slicknav.css">
            <link rel="stylesheet" href="../assets/css/animate.min.css">
            <link rel="stylesheet" href="../assets/css/magnific-popup.css">
            <link rel="stylesheet" href="../assets/css/fontawesome-all.min.css">
            <link rel="stylesheet" href="../assets/css/themify-icons.css">
            <link rel="stylesheet" href="../assets/css/slick.css">
            <link rel="stylesheet" href="../assets/css/nice-select.css">
            <link rel="stylesheet" href="../assets/css/style.css">
            <link rel="stylesheet" href="../assets/css/style2.css">
            <link rel="stylesheet" href="../assets/scss/input.scss">
</head>
<body>
    <?php
    $s_kategori="";
    include "../koneksi.php";
    include "navbar.php";
    
    ?>
    <h2>
            <center><b>Tulis Artikel</b></center>
    </h2>
    <?php
        if (isset($_GET['pesan'])){
            $pesan = $_GET['pesan'];
                if ($pesan == 'berhasil') {
    ?>
                <div class="alert alert-success">
                    <center>Artikel berhasil diupload, Selanjutnya dimohon untuk menunggu konfirmasi dari Admin</center>
                </div>
    <?php
                }elseif($pesan == 'gagal'){
    ?>
                <div class="alert alert-danger">
                    <center>Artikel Gagal diupload, Dimohon untuk mengecek dan mengupload ulang</center>
                </div>
    <?php
                }
        }
    ?>
    <div class="slider-active">
        <div class="section-top-border">
            <div class="kotak">
                <div class="row">
	                <div class="col-lg-12 ">
                    <form method="POST" action="../tulis_aksi.php" enctype="multipart/form-data">
                        <!-- <div class="mt-30"> -->
                            <input type="hidden" name="nama_penulis" value="" required class="single-input">
                            <!-- <input type="hidden" name="nama_penulis" value="<?php $_SESSION['nama'];?>" required class="single-input"> -->
                            <input type="hidden" name="tanggal" value="<?php echo date("y-m-d"); ?>">
                        <!-- </div> -->
                        <div class="single-element-widget mt-10">
                        <h5 class="mb-15">Kategori</h5>
                            <div class="form-select" id="default-select"">
                                <select name="s_kategori" class="form-control" id="exampleFormControlSelect1">
                                    <option value="KAT02" <?php if ($s_kategori=="Kambing"){ echo "selected"; } ?>>Kambing</option>
                                    <option value="KAT01" <?php if ($s_kategori=="Kucing"){ echo "selected"; } ?>>Kucing</option>
                                </select>
                            </div>
                        </div>
                        <div class="mt-30">
                            <h5 class="mb-15">Judul Artikel</h5>
                            <input type="text" name="judul" placeholder="Masukkan Judul Artikel"
                                onfocus="this.placeholder = ''" onblur="this.placeholder = 'Masukkan Judul Artikel'" required class="single-input-primary">
                        </div>
                        <div class="mt-30">
                            <h5 class="mb-15">Sumber</h5>
                                <input type="text" name="Sumber" placeholder="Masukkan Sumber"
                                onfocus="this.placeholder = ''" onblur="this.placeholder = 'Masukkan Sumber'" required class="single-input-primary">
                        </div>
                        <div class="mt-30">
                            <h5 class="mb-15">Gambar</h5>
                            <input type="file" name="gambar" id="gambar">
                        </div>
                    </div>
                </div>
            </div>
            <div class="kotak">
            <h5 class="mb-15">Isi Artikel</h5>
                <div>
                    <textarea class="ckeditor" name="isi" id="ckedtor"></textarea>
                </div>
                <br/>
                <div id="container_btn">
                    <input type="submit" name="tombol" class="genric-btn primary" value="POSTING">             
                    <a href="#" class="genric-btn default">BATAL</button>
                </div>
                </form>
            </div>
   </div>
   </div>


  <!-- JS here -->
	
		<!-- All JS Custom Plugins Link Here here -->
        <script src="../assets/js/vendor/modernizr-3.5.0.min.js"></script>
		<!-- Jquery, Popper, Bootstrap -->
		<script src="../assets/js/vendor/jquery-1.12.4.min.js"></script>
        <script src="../assets/js/popper.min.js"></script>
        <script src="../assets/js/bootstrap.min.js"></script>
	    <!-- Jquery Mobile Menu -->
        <script src="../assets/js/jquery.slicknav.min.js"></script>

		<!-- Jquery Slick , Owl-Carousel Plugins -->
        <script src="../assets/js/owl.carousel.min.js"></script>
        <script src="../assets/js/slick.min.js"></script>
        <script src="../assets/js/price_rangs.js"></script>
        
		<!-- One Page, Animated-HeadLin -->
        <script src="../assets/js/wow.min.js"></script>
		<script src="../assets/js/animated.headline.js"></script>
        <script src="../assets/js/jquery.magnific-popup.js"></script>

		<!-- Scrollup, nice-select, sticky -->
        <script src="../assets/js/jquery.scrollUp.min.js"></script>
        <script src="../assets/js/jquery.nice-select.min.js"></script>
		<script src="../assets/js/jquery.sticky.js"></script>
        
        <!-- contact js -->
        <script src="../assets/js/contact.js"></script>
        <script src="../assets/js/jquery.form.js"></script>
        <script src="../assets/js/jquery.validate.min.js"></script>
        <script src="../assets/js/mail-script.js"></script>
        <script src="../assets/js/jquery.ajaxchimp.min.js"></script>
        
		<!-- Jquery Plugins, main Jquery -->	
        <script src="../assets/js/plugins.js"></script>
        <script src="../assets/js/main.js"></script>

        <!-- Link Js CkEditor -->
        <script type="text/javascript" src="../assets/ckeditor/ckeditor.js"></script>
</body>
</html>