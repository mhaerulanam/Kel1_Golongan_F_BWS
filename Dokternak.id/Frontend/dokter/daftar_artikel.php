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
   <link rel="shortcut icon" type="image/x-icon" href="../assets/img/favicon.png">
  
   <!-- CSS here -->
      <link rel="stylesheet" href="../assets/css/bootstrap.min.css">
      <link rel="stylesheet" href="../assets/css/owl.carousel.min.css">
      <link rel="stylesheet" href="../assets/css/slicknav.css">
      <link rel="stylesheet" href="../assets/css/price_rangs.css">
      <link rel="stylesheet" href="../assets/css/animate.min.css">
      <link rel="stylesheet" href="../assets/css/magnific-popup.css">
      <link rel="stylesheet" href="../assets/css/fontawesome-all.min.css">
      <link rel="stylesheet" href="../assets/css/themify-icons.css">
      <link rel="stylesheet" href="../assets/css/slick.css">
      <link rel="stylesheet" href="../assets/css/nice-select.css">
      <link rel="stylesheet" href="../assets/css/style.css">
      <link rel="stylesheet" href="../assets/css/responsive.css">
</head>

<body>
    <navbar>
    <?php include "../modal/login.php"; ?>
    <?php include "../modal/ubah_password.php"; ?>
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
      <div class="single-slider section-overly slider-height2 d-flex align-items-center" data-background="../assets/img/gallery/s2.jpg">
          <div class="container">
              <div class="row">
                  <div class="col-xl-12">
                      <div class="hero-cap text-center">
                          <h2>DAFTAR ARTIKEL</h2>
                      </div>
                  </div>
              </div>
          </div>
      </div>
   </div>
   <!-- Banner End -->
<section class="blog_area section-padding">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 mb-5 mb-lg-0">
                    <div class="blog_left_sidebar">
                    <?php
                include "../koneksi.php";

                // Belajar paging : https://www.youtube.com/watch?v=Q1xJdoHrTj4

                // Paging - Konfigurasi
                $jdataperhalaman = 3;
                $result = mysqli_query($koneksi, "SELECT * FROM artikel");
                $jumlahData = mysqli_num_rows($result);
                $jumlahHalaman = ceil($jumlahData / $jdataperhalaman);
                $halamanAktif = ( isset($_GET["halaman"]) ) ? $_GET["halaman"] : 1 ;

                // halaman 2, awalDatanya = 2. Dimulai indeks 0,1,2,3, dst
                $awalData = ( $jdataperhalaman * $halamanAktif ) - $jdataperhalaman;
                // Akhir dari Konfigurasi

                // ambilData adalah variabel untuk menampilkan data dari 2 tabel, yaitu artikel dan kategori_artikel. 
                // Sehingga kita dapat menampilkan kategorinya, sesuai id_ktg di kedua tabel
                $ambilData=mysqli_query($koneksi, "SELECT * FROM artikel, kategori_artikel where artikel.id_ktg=kategori_artikel.id_ktg order by id_artikel DESC
                LIMIT $awalData,$jdataperhalaman");

                $datakat=mysqli_query($koneksi, "SELECT *, COUNT( * ) as total FROM artikel inner join kategori_artikel on artikel.id_ktg=kategori_artikel.id_ktg GROUP BY kategori_artikel");
                $jumlahkat = mysqli_num_rows($datakat);
                if (ISSET($_POST['submit'])){
                    $cari = $_POST['nt'];
                   
                    $query2 = " SELECT * FROM artikel, kategori_artikel where artikel.id_ktg=kategori_artikel.id_ktg AND judul LIKE '%$cari%' AND isi LIKE'%$cari%'";
                    // $query2 = "SELECT * FROM artikel WHERE judul LIKE '%$cari%'";

                    $sql = mysqli_query($koneksi, $query2);

                    while ($dt = mysqli_fetch_array($sql)) { ?>
                        <?php
                        $isi = $dt['isi'];
                        $num_char  = 250;
                        $isibts = substr($isi,0,$num_char)."...";
                        ?>    
                        <article class="blog_item">
                                <div class="blog_item_img">
                                            <img class="card-img rounded-0" src="../gambar.php?id_artikel=<?php echo $dt['id_artikel']; ?>" alt="">
                                            <a href="#" class="blog_item_date">
                                                <h3><?php echo $dt['nama_penulis']; ?></h3>
                                            </a>
                                </div>
                                <div class="blog_details">
                                    <a class="d-inline-block" href="single-blog.html">
                                        <h2><a href="detailartikel.php?id_artikel=<?php echo $dt['id_artikel']; ?>"><?php echo $dt['judul']; ?></a></h2>
                                    </a>
                                    <p><?php echo $isibts ?><a href="detailartikel.php?id_artikel=<?php echo $dt['id_artikel']; ?>" class="more-btn">  <strong> Read more » </strong></a></p>
                                    <ul class="blog-info-link">
                                        <li><a>Kategori : <?php echo $dt['kategori_artikel'];?></a></li>
                                        <li><a><?php echo $dt['tanggal'];?></a></li>
                                    </ul>
                                </div>
                        </article>
                        <?php }
                }elseif(isset($_GET["tampil"])){
                $ktg = $_GET["tampil"];
                $kat=mysqli_query($koneksi, "SELECT * FROM artikel, kategori_artikel where artikel.id_ktg=kategori_artikel.id_ktg AND artikel.id_ktg='$ktg'");      
                while ($dat = mysqli_fetch_assoc($kat)) { ?>
                <?php
                $isi = $dat['isi'];
                $num_char  = 250;
                $isibts = substr($isi,0,$num_char)."...";
                ?>
                 <article class="blog_item">
                            <div class="blog_item_img">
                                        <img class="card-img rounded-0" src="../gambar.php?id_artikel=<?php echo $dat['id_artikel']; ?>" alt="">
                                        <a href="#" class="blog_item_date">
                                            <h3><?php echo $dat['nama_penulis']; ?></h3>
                                        </a>
                            </div>
                                    <div class="blog_details">
                                        <a class="d-inline-block" href="single-blog.html">
                                            <h2><a href="detailartikel.php?id_artikel=<?php echo $dat['id_artikel']; ?>"><?php echo $dat['judul']; ?></a></h2>
                                        </a>
                                        <p><?php echo $isibts ?><a href="detailartikel.php?id_artikel=<?php echo $dat['id_artikel']; ?>" class="more-btn">  <strong> Read more » </strong></a></p>
                                        <ul class="blog-info-link">
                                            <li><a>Kategori : <?php echo $dat['kategori_artikel'];?></a></li>
                                            <li><a><?php echo $dat['tanggal'];?></a></li>
                                        </ul>
                                    </div>
                    </article>
                        <?php } ?><?php
                }else{ 
                while ($data = mysqli_fetch_array($ambilData)) { ?>
                    <?php
                    $isi = $data['isi'];
                    $num_char  = 250;
                    $isibts = substr($isi,0,$num_char)."...";
                    ?>    
                    <article class="blog_item">
                            <div class="blog_item_img">
                                        <img class="card-img rounded-0" src="../gambar.php?id_artikel=<?php echo $data['id_artikel']; ?>" alt="">
                                        <a href="#" class="blog_item_date">
                                            <h3><?php echo $data['nama_penulis']; ?></h3>
                                        </a>
                            </div>
                            <div class="blog_details">
                                <a class="d-inline-block" href="single-blog.html">
                                    <h2><a href="detailartikel.php?id_artikel=<?php echo $data['id_artikel']; ?>"><?php echo $data['judul']; ?></a></h2>
                                </a>
                                <p><?php echo $isibts ?><a href="detailartikel.php?id_artikel=<?php echo $data['id_artikel']; ?>" class="more-btn">  <strong> Read more » </strong></a></p>
                                <ul class="blog-info-link">
                                    <li><a>Kategori : <?php echo $data['kategori_artikel'];?></a></li>
                                    <li><a><?php echo $data['tanggal'];?></a></li>
                                </ul>
                            </div>
                    </article>
                    <?php }} ?>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="blog_right_sidebar">
                    <form method="POST">
                    <div class="btn_tulis">
                            <div class="items-link f-center">
                                <a href="tulis_artikel.php" class="genric-btn primary">++ TULIS ARTIKEL</a>
                                </div>
                            </div>
                            <?php 
                        include "../koneksi.php";
		                $s_judul="";
                        $search_keyword="";
                        if (isset($_POST['search'])) {
                        $s_judul = $_POST['s_judul'];
                        $search_keyword = $_POST['cari artikel'];
                        }
                        ?>                   
                        <aside class="single_sidebar_widget search_widget">
                                <div class="input-group mb-3">
                                        <input type="text" class="form-control" placeholder='cari artikel' name="nt" id="cari artikel" value="<?php echo $search_keyword; ?>"
                                            onfocus="this.placeholder = ''"
                                            onblur="this.placeholder = 'search_keyword'">
                                        <div class="input-group-append">
                                            <button class="btns" type="submit" name="submit"><i class="ti-search"></i></button>
                                        </div>
                                   </div>
                                
                                
                            </form>
                        </aside>

                        <aside class="single_sidebar_widget post_category_widget">
                            <h4 class="widget_title">KATEGORI</h4>
                            <ul class="list cat-list">
                            <?php while ($kategori = mysqli_fetch_array($datakat)) { ?>
                                <li>
                                    <a href="?tampil=<?=$kategori['id_ktg']; ?>" class="d-flex">
                                        <p><?php echo $kategori['kategori_artikel']; ?> </p>
                                        <p>(<?php echo $kategori['total']; ?>)</p>
                                    </a>
                                </li>
                            <?php } ?>
                            </ul>
                        </aside>
                    </div>
                </div>
            </div>
        </div>
    </section>
<?php
    if(isset($_POST['submit'])||isset($_GET['tampil'])) :
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
        <script src="../assets/js/vendor/modernizr-3.5.0.min.js"></script>
		<!-- Jquery, Popper, Bootstrap -->
		<script src="../assets/js/vendor/jquery-1.12.4.min.js"></script>
        <script src="../assets/js/popper.min.js"></script>
        <script src="../assets/js/bootstrap.min.js"></script>
	    <!-- Jquery Mobile Menu -->
        <script src="./assets/js/jquery.slicknav.min.js"></script>

		<!-- Jquery Slick , Owl-Carousel Plugins -->
        <script src="../assets/js/owl.carousel.min.js"></script>
        <script src="../assets/js/slick.min.js"></script>
        <script src="../assets/js/price_rangs.js"></script>

		<!-- One Page, Animated-HeadLin -->
        <script src="../assets/js/wow.min.js"></script>
		<script src="../assets/js/animated.headline.js"></script>
		
		<!-- Scrollup, nice-select, sticky -->
        <script src="../assets/js/jquery.scrollUp.min.js"></script>
        <script src="../assets/js/jquery.nice-select.min.js"></script>
		<script src="../assets/js/jquery.sticky.js"></script>
        <script src="../assets/js/jquery.magnific-popup.js"></script>

        <!-- contact js -->
        <script src="../assets/js/contact.js"></script>
        <script src="../assets/js/jquery.form.js"></script>
        <script src="../assets/js/jquery.validate.min.js"></script>
        <script src="../assets/js/mail-script.js"></script>
        <script src="../assets/js/jquery.ajaxchimp.min.js"></script>
        
		<!-- Jquery Plugins, main Jquery -->	
        <script src="../assets/js/plugins.js"></script>
        <script src="../assets/js/main.js"></script>
        
        <footer>
            <?php 
                include 'footer.php';
            ?>
        </footer>
</body>
</html>