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

</head>
<body>
<?php include ('navbar.php'); ?>
    
<?php 
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
                                        <input type="text" placeholder="Keyword" name="s_keyword" id="s_keyword" value="<?php echo $s_keyword; ?>">
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
            <!-- </div> -->
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
                        $ambilData=mysqli_query($koneksi, "SELECT * FROM dokter, jabatan WHERE dokter.id_jabatan=jabatan.id_jabatan order by id_dokter DESC LIMIT $awalData,$jumPage");

                        //pencarian berdasarkan kategori kecamatan
                        $search_kecamatan = '%'. $s_kecamatan .'%';
                        $search_keyword = '%'. $s_keyword .'%';
                        $no = 1;
                        $query = "SELECT * FROM dokter WHERE Tempat  LIKE ? AND (nama LIKE ? OR Tempat LIKE ? OR email LIKE ?) ORDER BY id_dokter DESC";
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
                            $Tempat = $row['Tempat'];
                            $telpon = $row['telpon'];
                            $foto = $row['foto'];
                            $id_jabatan = $row['id_jabatan'];
                            if ($search_kecamatan = $s_kecamatan){?>
                                <div class="single-job-items mb-30">
                                <div class="job-items">
                                    <div class="company-img">
                                        <a href="#"><img src="profil.php?id_dokter=<?php echo $id_dokter; ?>"  alt=""></a>
                                    </div>
                                    <div class="job-tittle">
                                        <a href="#"><h4><?php echo $nama; ?></a></h4></a>
                                        <ul>
                                            <li><i class="fas fa-map-marker-alt"></i><?php echo $Tempat; ?></li>
                                            <li><?php echo $telpon; ?></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="items-link f-right">
                                    <a href="#.html">Detail</a>
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
                                                <a href="#"><img src="profil.php?id_dokter=<?php echo $data['id_dokter']; ?>"  alt=""></a>
                                            </div>
                                            <div class="job-tittle">
                                                <a href="#"><h4><?php echo $data['nama']; ?></a></h4></a>
                                                <ul>
                                                    <li><?php echo $data['jabatan']; ?></li>
                                                    <li><i class="fas fa-map-marker-alt"></i><?php echo $data['Tempat']; ?></li>
                                                    <li><?php echo $data['telpon']; ?></li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="items-link f-right">
                                            <a href="#.html">Detail</a>
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
        
        <section>
        <!-- Tips dan Trik Start -->
        <div class="home-blog-area blog-h-padding">
            <div class="container">
                <!-- Section Tittle -->
                <div class="row">
                    <div class="col-lg-12">
                        <div class="section-tittle text-center">
                            <span>Artikel Terkini</span>
                            <h2>TIPS DAN TRIK</h2>
                        </div>
                    </div>
                </div>
                <div class="row"> 

<!-- Disini adalah konten artikel yang diulang menggunakan while, untuk menampilkan keseluruhan database -->
                <?php
                include "koneksi.php";

                // Belajar paging : https://www.youtube.com/watch?v=Q1xJdoHrTj4

                // Paging - Konfigurasi
                $jumlahDataPerHalaman = 2;
                $result = mysqli_query($koneksi, "SELECT * FROM artikel");
                $jumlahData = mysqli_num_rows($result);
                $jumlahHalaman = ceil($jumlahData / $jumlahDataPerHalaman);
                $halamanAktif = ( isset($_GET["halaman"]) ) ? $_GET["halaman"] : 1;

                // halaman 2, awalDatanya = 2. Dimulai indeks 0,1,2,3, dst
                $awalData = ( $jumlahDataPerHalaman * $halamanAktif ) - $jumlahDataPerHalaman;
                // Akhir dari Konfigurasi

                // ambilData adalah variabel untuk menampilkan data dari 2 tabel, yaitu artikel dan kategori_artikel. 
                // Sehingga kita dapat menampilkan kategorinya, sesuai id_ktg di kedua tabel
                $ambilData=mysqli_query($koneksi, "SELECT * FROM artikel, kategori_artikel where artikel.id_ktg=kategori_artikel.id_ktg order by id_artikel desc
                LIMIT $awalData,$jumlahDataPerHalaman");


                while ($data = mysqli_fetch_array($ambilData)) { ?>

                <div class="col-xl-6 col-lg-6 col-md-6">
                        <div class="home-blog-single mb-30">
                            <div class="blog-img-cap">
                                <div class="blog-img">
                                    <!-- <img src="assets/img/blog/home-blog1.jpg" alt=""> -->
                                    <!-- Baris img src dibawah ini untuk memanggil gambar sesuai syntax di gambar.php -->
                                    <img src="gambar.php?id_artikel=<?php echo $data['id_artikel']; ?>"/>
                                    <div class="blog-date text-center">
                                        <span><?php echo $data['tanggal']; ?></span>
                                        <p>Kategori : <?php echo $data['kategori_artikel']; ?></p>
                                    </div>
                                </div>
                                <div class="blog-cap">
                                    <p>|   <?php echo $data['nama_penulis']; ?></p>
                                    <h3><a href="detailartikel.php?id_artikel=<?php echo $data['id_artikel']; ?>"><?php echo $data['judul']; ?></a></h3>
                                    <a href="detailartikel.php?id_artikel=<?php echo $data['id_artikel']; ?>" class="more-btn">Read more »</a>
                                </div>
                            </div>
                        </div> 
                    </div> <?php } ?>
                </div>
        <!-- Blog Area End -->

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
        <!--Pagination End  -->
        </section>

        <section>
             <!-- Our Services Start -->
        <div class="apply-process-area apply-bg pt-150 pb-150" data-background="assets/img/gallery/how-applybg.png">
            <div class="container">
                <!-- Section Tittle -->
                <div class="row">
                    <div class="col-lg-12">
                        <div class="section-tittle text-center">
                            <span>Panduan Penggunaan Aplikasi</span>
                            <h2>TUTORIAL </h2>
                        </div>
                    </div>
                </div>

                
                <?php
                include 'koneksi.php';
                ?>

                
                <?php
                $jtph = 3;
                $result = mysqli_query($koneksi, "SELECT * FROM tutorial");
                $banyakdata = mysqli_num_rows($result);
                $banyakpage = ceil($banyakdata / $jtph);
                $aktif = ( isset($_GET["hlmn"]) ) ? $_GET["hlmn"] : 1;

                $awalData = ( $jtph * $aktif ) - $jtph;
                
                $datatutorial=mysqli_query($koneksi, "SELECT * FROM tutorial order by id_tutorial ASC
                LIMIT $awalData,$jtph");

                ?>

                <div class="row d-flex justify-contnet-center">
                <?php while ($data = mysqli_fetch_array($datatutorial)) {?>
                    <div class="col-lg-4 col-md-6">
                        <div class="single-process text-center mb-30">
                            <div class="process-ion">
                            <img src="gambartutorial.php?id_tutorial=<?php echo $data['id_tutorial']; ?>"width="120px">
                           
                            </div>
                            <div class="process-cap">
                                <h5><?= $data['judul_tutorial']; ?></h5>
                                <div class="btn_detail">
                            <div class="items-link f-center">
                                <a href="detail_tutorial">Detail</a>
                                </div>
                            </div>
                            </div>
                        </div> 
                    </div> 
                    <?php } ?>
                </div> 
            </div>
        </div>
        </section>

        <footer>
        <?php include 'footer.php'; ?>
        </footer>

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