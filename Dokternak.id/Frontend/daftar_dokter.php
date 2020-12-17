<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<?php
// Start the session
session_start();
?>
<!doctype html>
<html class="no-js" lang="zxx">

<head>
   <meta charset="utf-8">
   <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title> Dokternak.id - Daftar Artikel </title>
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
      <link rel="stylesheet" href="assets/css/style3.css">
<style>
.tabs {
  position: relative;
  margin: 3rem 0;
  background: #ffffff;
  height: 40rem;
}
.tabs::before,
.tabs::after {
  content: "";
  display: table;
}
.tabs::after {
  clear: both;
}
.tab {
  float: left;
}
.tab-switch {
  display: none;
}
.tab-label {
  position: relative;
  display: block;
  line-height: 2.75em;
  height: 3em;
  padding: 0 1.618em;
  background: #e8e8e8;
  /* border: 0.25rem solid #502b00; */
  color: rgb(0, 0, 0);
  cursor: pointer;
  top: 0;
  transition: all 0.25s;
}
.tab-label:hover {
  top: -0.25rem;
  transition: top 0.25s;
}
.tab-content {
  width: 100%;
  height: auto;
  position: absolute;
  z-index: 1;
  top: 2.75em;
  left: 0;
  padding: 1.618rem;
  background: #fff;
  color: #2c3e50;
  border: 0.25rem solid #502b00;
  /* border-bottom: 0.25rem solid #bdc3c7; */
  opacity: 0;
  transition: all 0.35s;
}
.tab-switch:checked + .tab-label {
  background:#502b00;
  color: #fff;
  border-bottom: 0;
  border-right: 0.125rem solid #fff;
  transition: all 0.35s;
  z-index: 1;
  top: -0.0625rem;
}
.tab-switch:checked + label + .tab-content {
  z-index: 2;
  opacity: 1;
  transition: all 0.35s;
}

.tabs-2 {
  position: relative;
  margin: 1rem 0;
  background: #ffffff;
  height: 4rem;
}

.tabs-2::before,
.tabs-2::after {
  content: "";
  display: table;
}
.tabs-2::after {
  clear: both;
}

</style>
</head>

<body>
    <navbar>
    <?php include "modal/login.php"; ?>
    <?php
        include 'navbar.php';
    ?>
    </navbar>
    <?php
        if (isset($_GET['pesan'])){
            $pesan = $_GET['pesan'];
            if ($pesan == 'gagal') {
           ?>
               <div class="alert alert-danger">
                    <center><strong>Peringatan!</strong> Anda Harus Login Terlebih Dahulu</center>
                </div>
            <?php
            }
        }
    ?>
    <!-- Banner Atas Start-->
   
   <div class="slider-area ">
      <div class="single-slider section-overly slider-height2 d-flex align-items-center" data-background="assets/img/gallery/s2.jpg">
          <div class="container">
              <div class="row">
                  <div class="col-xl-12">
                      <div class="hero-cap text-center">
                          <h2>DAFTAR DOKTER</h2>
                      </div>
                  </div>
              </div>
          </div>
      </div>
   </div>
   <!-- Banner End -->
<section class="blog_area section-padding">
    <div class="container">
    <?php 
        include "koneksi.php";
		$s_nama="";
        $search_keyword="";
        if (isset($_POST['search'])) {
            $s_nama = $_POST['nama'];
            $search_keyword = $_POST['cari dokter'];
        }

        $nt="";
        $s_keyword="";
        if (isset($_POST['search'])) {
            $nt = $_POST['nt'];
            $s_keyword = $_POST['s_keyword'];
        }
    ?>

                <form method="POST">
                  
                            
                </form>
    
                            

    <div class="pagination-area pb-200 text-center">
                <div class="blog_right_sidebar">          
                <aside class="single_sidebar_widget search_widget">
                            <form method="POST">
                            <div class="input-group mb-3">
                                <div class="wrapper">
                                <div class="tabs-2">
                                    <div class="tab">
                                    <input type="radio" name="jabatan" id="tab-param" class="tab-switch" value="J01" selected>
                                    <label for="tab-param" class="tab-label">Dokter</label>
                                    </div>
                                    <div class="tab">
                                    <input type="radio" name="jabatan" id="tab-dok" class="tab-switch" value="J02" selected>
                                    <label for="tab-dok" class="tab-label">Paramedis</label>
                                    </div>
                                    <div class="tab">
                                    <input type="radio" name="jabatan" id="tab-ib" class="tab-switch" value="J03" selected>
                                    <label for="tab-ib" class="tab-label">Petugas IB</label>
                                    </div>
                                    <div class="input-group-append">
                                            <button type="submit" name="pilih" class="genric-btn primary">CEK</button> 
                                    </div> 
                                </div>
                                </div>
                            </div>
                                <div class="input-group mb-3">
                                        <input list="nt" class="form-control" placeholder='Masukkan nama Dokter atau lokasi kecamatan Anda ...' name="nt" id="cari dokter" value="<?php echo $search_keyword; ?>"
                                            onfocus="this.placeholder = ''"
                                            onblur="this.placeholder = 'Masukkan nama Dokter atau lokasi kecamatan Anda ... '">
                                            <datalist id="nt">
                                                <option value="Bondowoso" <?php if ($nt=="Bondowoso"){ echo "selected"; } ?>>Bondowoso</option>
                                                <option value="Binakal" <?php if ($nt=="Binakal"){ echo "selected"; } ?>>Binakal</option>
                                                <option value="Cermee" <?php if ($nt=="Cermee"){ echo "selected"; } ?>>Cermee</option>
                                                <option value="Curahdami" <?php if ($nt=="Curahdami"){ echo "selected"; } ?>>Curahdami</option>
                                                <option value="Grujugan" <?php if ($nt=="Grujugan"){ echo "selected"; } ?>>Grujugan</option>
                                                <option value="Jambesari" <?php if ($nt=="Jambesari"){ echo "selected"; } ?>>Jambesari</option>
                                                <option value="Klabang" <?php if ($nt=="Klabang"){ echo "selected"; } ?>>Klabang</option>
                                                <option value="Maesan" <?php if ($nt=="Maesan"){ echo "selected"; } ?>>Maesan</option>
                                                <option value="Pakem" <?php if ($nt=="Pakem"){ echo "selected"; } ?>>Pakem</option>
                                                <option value="Prajekan" <?php if ($nt=="Prajekan"){ echo "selected"; } ?>>Prajekan</option>
                                                <option value="Pujer" <?php if ($nt=="Pujer"){ echo "selected"; } ?>>Pujer</option>
                                                <option value="Sempol" <?php if ($nt=="Sempol"){ echo "selected"; } ?>>Sempol</option>
                                                <option value="Sukosari" <?php if ($nt=="Sukosari"){ echo "selected"; } ?>>Sukosari</option>
                                                <option value="Sumberwringin" <?php if ($nt=="Sumberwringin"){ echo "selected"; } ?>>Sumberwringin</option>
                                                <option value="Taman Krocok" <?php if ($nt=="Taman Krocok"){ echo "selected"; } ?>>Taman Krocok</option>
                                                <option value="Tamanan" <?php if ($nt=="Tamanan"){ echo "selected"; } ?>>Tamanan</option>
                                                <option value="Tapen" <?php if ($nt=="Tapen"){ echo "selected"; } ?>>Tapen</option>
                                                <option value="Tegalampel" <?php if ($nt=="Tegalampel"){ echo "selected"; } ?>>Tegalampel</option>
                                                <option value="Tenggarang" <?php if ($nt=="Tenggarang"){ echo "selected"; } ?>>Tenggarang</option>
                                                <option value="Tlogosari" <?php if ($nt=="Tlogosari"){ echo "selected"; } ?>>Tlogosari</option>
                                                <option value="Wonosari" <?php if ($nt=="Wonosari"){ echo "selected"; } ?>>Wonosari</option>
                                                <option value="Wringin" <?php if ($nt=="Wringin"){ echo "selected"; } ?>>Wringin</option>
                                            </datalist>
                                        <div class="input-group-append">
                                            <button class="btns" type="submit" name="submit"><i class="ti-search"></i></button> 
                                        </div>
                                </div>
                                   
                            </form>
                        </aside>
                </div>
                </div>

    <div class="row blog">
<!-- <h1>
  <div class="animated fadeInLeft">NOS EXPERTS</div><div class="animated fadeInRight">SCIENTIFIQUES</div>
</h1> -->
                <div class="col-md-12">
                    <div id="blogCarousel" class="carousel slide" data-ride="carousel">

                        <!-- <ol class="carousel-indicators">
                            <li data-target="#blogCarousel" data-slide-to="0" class="active"></li>
                            <li data-target="#blogCarousel" data-slide-to="1"></li>
                        </ol> -->
                        <!-- Carousel items -->
                        <!-- <div class="carousel-inner">
                            <div class="carousel-item active"> -->
                                <div class="row">
                                <?php
                                    // Belajar paging : https://www.youtube.com/watch?v=Q1xJdoHrTj4

                                    // Paging - Konfigurasi
                                    $s_nama ="";
                                    $jdataperhalaman = 4;
                                    $result = mysqli_query($koneksi, "SELECT * FROM dokter");
                                    $jumlahData = mysqli_num_rows($result);
                                    $jumlahHalaman = ceil($jumlahData / $jdataperhalaman);
                                    $halamanAktif = ( isset($_GET["halaman"]) ) ? $_GET["halaman"] : 1 ;

                                    // halaman 2, awalDatanya = 2. Dimulai indeks 0,1,2,3, dst
                                    $awalData = ( $jdataperhalaman * $halamanAktif ) - $jdataperhalaman;
                                    // Akhir dari Konfigurasi

                                    // ambilData adalah variabel untuk menampilkan data dari 2 tabel, yaitu artikel dan kategori_artikel. 
                                    // Sehingga kita dapat menampilkan kategorinya, sesuai id_ktg di kedua tabel
                                    $ambilData=mysqli_query($koneksi, "SELECT * FROM dokter, jabatan WHERE dokter.id_jabatan=jabatan.id_jabatan order by id_dokter LIMIT $awalData,$jdataperhalaman");
                                    if (ISSET($_POST['submit'])){
                                        include 'koneksi.php';
                                        $cari = $_POST['nt'];
                                        // echo $cari;
                                        $dewan1 = "SELECT * FROM dokter, jabatan WHERE dokter.id_jabatan=jabatan.id_jabatan AND (nama LIKE '%$cari%' OR alamat LIKE '%$cari%' OR tempat LIKE '%$cari%') ORDER BY id_dokter LIMIT $awalData,$jdataperhalaman";
                                        $dewan = mysqli_query($koneksi, $dewan1);
                                        // $dewan1 = $koneksi->prepare($query);
                                        // $dewan1->bind_param('sss', $cari, '%$cari%', $cari);
                                        // $dewan1->execute();
                                        // $res1 = $dewan1->get_result(); 
                                        while ($row = mysqli_fetch_array($dewan)) {
                                        ?>
                                            <div class="col-lg-3 col-md-6 col-sm-6">
                                                <div class="our-team">
                                                <div class="pic">
                                                    <img src="profil.php?id_dokter=<?php echo $row['id_dokter']; ?>">
                                                </div>
                                                <div class="team-content">
                                                    <h4 class="title"><?php echo $row['nama']; ?></h4>
                                                    <span class="post"><?php echo $row['jabatan']; ?></span>
                                                    <span class="post"><?php echo $row['tempat']; ?></span>
                                                    <span class="post"><?php echo $row['telpon']; ?></span><br>

                                                </div>
                                                <ul class="social"> 
                                                    <li>
                                                    <a href="detaildokter.php?id_dokter=<?php echo $dat['id_dokter']; ?>"><b>Detail</b></a>
                                                    </li>
                                                </ul>
                                                </div>
                                            </div>
                                            <?php }?>
                                    <?php
                                    }elseif(ISSET($_POST['pilih'])){
                                        if (ISSET($_POST['jabatan'])):
                                        include 'koneksi.php';
                                        $kat = $_POST['jabatan'];
                                        $dataa = mysqli_query($koneksi, "SELECT dokter.*, jabatan.jabatan FROM dokter LEFT JOIN jabatan ON dokter.id_jabatan=jabatan.id_jabatan WHERE dokter.id_jabatan = '$kat' LIMIT $awalData,$jdataperhalaman ");
                                        while ($dat = mysqli_fetch_array($dataa)) {
                                            ?>
                                            <div class="col-lg-3 col-md-6 col-sm-6">
                                                <div class="our-team">
                                                <div class="pic">
                                                    <img src="profil.php?id_dokter=<?php echo $dat['id_dokter']; ?>">
                                                </div>
                                                <div class="team-content">
                                                    <h4 class="title"><?php echo $dat['nama']; ?></h4>
                                                    <span class="post"><?php echo $dat['jabatan']; ?></span>
                                                    <span class="post"><?php echo $dat['tempat']; ?></span>
                                                    <span class="post"><?php echo $dat['telpon']; ?></span><br>

                                                </div>
                                                <ul class="social"> 
                                                    <li>
                                                    <a href="detaildokter.php?id_dokter=<?php echo $dat['id_dokter']; ?>"><b>Detail</b></a>
                                                    </li>
                                                </ul>
                                                </div>
                                            </div>
                                            <?php                       
                                            }?><?php
                                        else:
					                        echo "<script>alert('Maaf!, Pilih Jabatan terlebih dahulu'); window.location='daftar_dokter.php'</script>"; 
                                        endif;
                                    }else{ 
                                    while ($dt = mysqli_fetch_array($ambilData)) { ?>
                                            <div class="col-lg-3 col-md-6 col-sm-6">
                                                <div class="our-team">
                                                <div class="pic">
                                                    <img src="profil.php?id_dokter=<?php echo $dt['id_dokter']; ?>">
                                                </div>
                                                <div class="team-content">
                                                    <h4 class="title"><?php echo $dt['nama']; ?></h4>
                                                    <span class="post"><?php echo $dt['jabatan']; ?></span>
                                                    <span class="post"><?php echo $dt['tempat']; ?></span>
                                                    <span class="post"><?php echo $dt['telpon']; ?></span><br>

                                                </div>
                                                <ul class="social"> 
                                                    <li>
                                                    <a href="detaildokter.php?id_dokter=<?php echo $dt['id_dokter']; ?>"><b>Detail</b></a>
                                                    </li>
                                                </ul>
                                                </div>
                                            </div>
                                            <?php }} ?>
                                </div>
                            <!--.row-->
                            </div>
                <!--.carousel-inner-->
                </div>
            <!--.Carousel-->
            </div>
        </div>   
    </div>
</section>
<?php
    if(isset($_POST['submit'])) :
    else  :?>
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
		
		<!-- Scrollup, nice-select, sticky -->
        <script src="./assets/js/jquery.scrollUp.min.js"></script>
        <script src="./assets/js/jquery.nice-select.min.js"></script>
		<script src="./assets/js/jquery.sticky.js"></script>
        <script src="./assets/js/jquery.magnific-popup.js"></script>

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