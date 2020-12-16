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
            <!-- Mobile Menu -->
            <!-- <div class="slider-active"> -->
                <div class="single-slider slider-height d-flex align-items-center" data-background="assets/img/gallery/s2.jpg">
                    <div class="container">
                        <div class="row">
                            <div class="col-xl-6 col-lg-9 col-md-10">
                                <div class="hero__caption">
                                    <span id="title-ajakan">Temukan Dokter Hewan <br> di Lingkungan Terdekatmu <br>  <br> </span>
                                </div>
                            </div>
                        </div>
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
    
    <section class="featured-job-area feature-padding">
            <div class="container">
                <!-- Section Tittle -->
                <div class="row">
                    <div class="col-lg-12">
                        <div class="section-tittle text-center">
                        <span>Kabupaten Bondowoso</span>
                            <h2>Daftar Dokter</h2> 
                        </div>
                    </div>
                </div>
                <div class="row justify-content-center">
                    <div class="col-xl-10">
                    <?php
                        include 'koneksi.php';
                        //Penampilan daftar data dokter dan dibatasi 2 halaman
                        $jumPage = 3;
                        $result = mysqli_query($koneksi, "SELECT * FROM dokter");
                        $jum = mysqli_num_rows($result);
                        $jumHlmn = ceil($jum / $jumPage);
                        $hlmnAktif = ( isset($_GET["hal"]) ) ? $_GET["hal"] : 1;
                        $awalData = ( $jumPage * $hlmnAktif ) - $jumPage;
                        $ambilData=mysqli_query($koneksi, "SELECT * FROM dokter, jabatan WHERE dokter.id_jabatan=jabatan.id_jabatan order by id_dokter LIMIT $awalData,$jumPage");

                        //pencarian berdasarkan kategori kecamatan
                        $search_kecamatan = '%'. $s_kecamatan .'%';
                        $search_keyword = '%'. $s_keyword .'%';
                        $no = 1;
                        $query = "SELECT * FROM dokter, jabatan WHERE dokter.id_jabatan=jabatan.id_jabatan AND alamat LIKE ? AND (nama LIKE ? OR tempat LIKE ? OR email LIKE ?) ORDER BY id_dokter DESC";
                        $dewan1 = $koneksi->prepare($query);
                        $dewan1->bind_param('ssss', $search_kecamatan, $search_keyword, $search_keyword, $search_keyword);
                        $dewan1->execute();
                        $res1 = $dewan1->get_result();
                                
                        if ($res1->num_rows > 0) {
                        while ($row = $res1->fetch_assoc()) {
                            $id_dokter = $row['id_dokter'];
                            $nama = $row['nama'];
                            $email = $row['email'];
                            $jenis_kelamin = $row['jenis_kelamin'];
                            $alamat = $row['alamat'];
                            $tempat = $row['tempat'];
                            $telpon = $row['telpon'];
                            $foto = $row['foto'];
                            $id_jabatan = $row['id_jabatan'];
                            if ($search_kecamatan = $s_kecamatan){
                                ?>
                                <div class="single-job-items mb-30">
                                <div class="job-items">
                                    <div class="company-img">
                                  
                                        <a href="#"><img src="profil.php?id_dokter=<?php echo $id_dokter; ?>"  class="rounded-circle z-depth-0"
                                            alt="fotoakun" height="100"></a>
                                    </div>
                                    <div class="job-tittle">
                                        <a href="#"><h4><?php echo $nama; ?></a></h4></a>
                                        <ul>
                                            <li><?php echo $row['jabatan']; ?></li>
                                            <li><i class="fas fa-map-marker-alt"></i><?php echo $tempat; ?></li>
                                            <li><?php echo $telpon; ?></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="items-link f-right">
                                    <a href="detaildokter.php?id_dokter=<?= $id_dokter; ?>">Detail</a>
                                </div>
                            </div>
                            <?php
                            }
                            else{
                                while ($data = mysqli_fetch_array($ambilData)) {  ?>                             
                                    <!-- single-job-content -->
                                    <div class="single-job-items mb-30">
                                        <div class="job-items">
                                            <div class="company-img">
                                                <a href="#"><img src="profil.php?id_dokter=<?php echo $data['id_dokter']; ?>"   class="rounded-circle z-depth-0"
                                            alt="fotoakun" height="100"></a>
                                            </div>
                                            <div class="job-tittle">
                                                <a href="#"><h4><?php echo $data['nama']; ?></a></h4></a>
                                                <ul>
                                                    <li><?php echo $data['jabatan']; ?></li>
                                                    <li><i class="fas fa-map-marker-alt"></i><?php echo $data['tempat']; ?></li>
                                                    <li><?php echo $data['telpon']; ?></li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="items-link f-right">
                                            <a href="detaildokter.php?id_dokter=<?= $data['id_dokter']; ?>">Detail</a>
                                        </div>
                                    </div>
                                    <?php
                                }
                            }                                                    
                    ?>
                        <?php }}
                    else {?>
                        <center><img src="assets/img/icon/error.png" alt=""></center>
                        <?php        
                    } 
                    ?>
                    
                    </div>
                </div>
            </div>
        </section>

        <?php
    if(isset($_POST['s_keyword'])) :
    
    else : ?>
         <!--Pagination Start  -->
         <div class="pagination-area pb-115 text-center">
            <div class="container">
                <div class="row">
                    <div class="col-xl-12">
                        <div class="single-wrap d-flex justify-content-center">
                            <nav aria-label="Page navigation example">
                            <ul class="pagination justify-content-start">

                                    <!-- Memberi tombol prev -->
                                    <?php if( $hlmnAktif > 1) : ?>
                                        <li class="page-item">
                                        <a class="page-link" href="?hal=<?= $hlmnAktif - 1; ?>">&lt; Sebelumnya</a></h4>
                                        </li>
                                    <?php endif; ?>

                                    <!-- Navigasi Pages -->
                                    <?php for($i = 1; $i <= $jumHlmn; $i++) : ?>
                                        <?php if ($i == $hlmnAktif ) : ?>
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
                                    <?php if( $hlmnAktif < $jumHlmn) : ?>
                                        <li class="page-item">
                                        <a class="page-link" href="?hal=<?= $hlmnAktif + 1; ?>">Selanjutnya &gt;</span></a>
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
</html>