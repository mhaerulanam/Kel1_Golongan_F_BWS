<!DOCTYPE html>
<html lang="en-US">
  <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Dokternak.id - Detail Puskeswan</title>
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700,200" rel="stylesheet">
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css" rel="stylesheet">
    <link href="./css_dokter/css/aos.css" rel="stylesheet">
    <link href="./css_dokter/css/bootstrap.min.css" rel="stylesheet">
    <link href="./css_dokter/styles/main.css" rel="stylesheet">
  </head>
  <body id="top">
    <div class="page-content">
      <div>

      <!-- Koneksi Database / Pemanggilan Data dari Tabel Dokter -->
      <?php
            include "koneksi.php";
            //Ini nampilin data kubatasi 1, semisal dokternya lebih dari 2, maka dokternya yang tampil tetep 1 (minta fix ya aku ga paham)
            $ambil = mysqli_query($koneksi,"SELECT * FROM puskeswan,dokter LIMIT 1");
		        while($d = mysqli_fetch_assoc($ambil) ) :
            ?>

<div class="profile-page">
  <div class="wrapper">
    <div class="page-header page-header-small" filter-color="green">
      <div class="page-header-image" data-parallax="true" style="background-image: url('./assets/img/gallery/s2.jpg');"></div>
      <div class="container">
        <div class="content-center">
        <div class="cc-profile-image"><a href="#"><img src="gambarpuskeswan.php?id_puskeswan=<?php echo $d['id_puskeswan']; ?>" alt="Image"/></a></div>
          <div class="h2 title"><?= $d['nama_puskeswan']; ?></div>
          <p class="category text-white"><?=$d['alamat']; ?></p>
        </div>
      </div>
    </div>
  </div>
</div>
<div class="section" id="about">
  <div class="container">
    <div class="card" data-aos="fade-up" data-aos-offset="10">
      <div class="row">
        <div class="col-lg-6 col-md-12">
          <div class="card-body">
            <div class="h4 mt-0 title">Jam Kerja</div>
            <p><?= $d['jam_kerja']; ?></p>
            <div class="h4 mt-0 title">Dokumentasi</div>
            <p><img src="gambardokpuskeswan.php?id_puskeswan=<?php echo $d['id_puskeswan']; ?>" alt="Image"/></p>
          </div>
        </div>
        <div class="col-lg-6 col-md-12">
          <div class="card-body">
            <div class="h4 mt-0 title">Informasi</div>
            <div class="row">
              <div class="col-sm-4"><strong class="text-uppercase">Alamat</strong></div>
              <div class="col-sm-8"><?= $d['alamat']; ?></div>
            </div>
            <!-- Terus disini juga direvisi, ini kayanya salah. -->
            <div class="row mt-3">
              <div class="col-sm-4"><strong class="text-uppercase">Tenaga Medis</strong></div>
              <div class="col-sm-8"><?= $d['nama']; ?></div>
            </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>

<?php endwhile; ?>

    <!-- Java Script -->
    <script src="./css_dokter/js/core/jquery.3.2.1.min.js"></script>
    <script src="./css_dokter/js/core/popper.min.js"></script>
    <script src="./css_dokter/js/core/bootstrap.min.js"></script>
    <script src="./css_dokter/js/now-ui-kit.js?v=1.1.0"></script>
    <script src="./css_dokter/js/aos.js"></script>
    <script src="./css_dokter/scripts/main.js"></script>
  </body>
</html>