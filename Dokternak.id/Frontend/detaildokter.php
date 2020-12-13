<!DOCTYPE html>
<html lang="en-US">
  <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Dokternak.id - Detail Dokter</title>
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

            if (isset($_GET["id_dokter"])) {
               $id_dokter = $_GET["id_dokter"];
            } else {
               $id_dokter = $_GET["id_dokter"] = "doc001";
            }
         

            $query_mysql = mysqli_query($koneksi,"SELECT * FROM dokter,jabatan WHERE id_dokter = '$id_dokter'
            AND dokter.id_jabatan=jabatan.id_jabatan");
            while ($data = mysqli_fetch_array($query_mysql)) { ?>

<div class="profile-page">
  <div class="wrapper">
    <div class="page-header page-header-small" filter-color="green">
      <div class="page-header-image" data-parallax="true" style="background-image: url('./assets/img/gallery/s2.jpg');"></div>
      <div class="container">
        <div class="content-center">
          <div class="cc-profile-image"><a href="#"><img src="gambardokter.php?id_dokter=<?php echo $data['id_dokter']; ?>" alt="Image"/></a></div>
          <div class="h2 title"><?= $data['nama']; ?></div>
          <p class="category text-white"><?= $data['jabatan']; ?></p>
          <a class="btn btn-primary smooth-scroll mr-2" href="https://api.whatsapp.com/send?phone=<?= $data['telpon']; ?>" data-aos="zoom-in" data-aos-anchor="data-aos-anchor">WhatsApp</a>
          <a class="btn btn-primary" href="konsultasi.php" data-aos="zoom-in" data-aos-anchor="data-aos-anchor">Konsultasi</a>
        </div>
      </div>
      <div class="section">
        <div class="container">
          <div class="button-container"><a class="btn btn-default btn-round btn-lg btn-icon" href="#" rel="tooltip" title="Follow me on Facebook"><i class="fa fa-facebook"></i></a><a class="btn btn-default btn-round btn-lg btn-icon" href="#" rel="tooltip" title="Follow me on Twitter"><i class="fa fa-twitter"></i></a><a class="btn btn-default btn-round btn-lg btn-icon" href="#" rel="tooltip" title="Follow me on Google+"><i class="fa fa-google-plus"></i></a><a class="btn btn-default btn-round btn-lg btn-icon" href="#" rel="tooltip" title="Follow me on Instagram"><i class="fa fa-instagram"></i></a></div>
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
            <div class="h4 mt-0 title">Jadwal Kerja</div>
            <p><?= nl2br(str_replace(' ', ' ', htmlspecialchars($data['jadwal_kerja']))); ?></p>
            <div class="h4 mt-0 title">Sertifikasi</div>
            <p><?= $data['sertifikasi']; ?></p>
          </div>
        </div>
        <div class="col-lg-6 col-md-12">
          <div class="card-body">
            <div class="h4 mt-0 title">Profil</div>
            <div class="row">
              <div class="col-sm-4"><strong class="text-uppercase">Wilayah Kerja</strong></div>
              <div class="col-sm-8"><?= $data['tempat']; ?></div>
            </div>
            <div class="row mt-3">
              <div class="col-sm-4"><strong class="text-uppercase">Jenis Kelamin</strong></div>
              <div class="col-sm-8"><?= $data['jenis_kelamin']; ?></div>
            </div>
            <div class="row mt-3">
              <div class="col-sm-4"><strong class="text-uppercase">Telepon</strong></div>
              <div class="col-sm-8"><?= $data['telpon']; ?></div>
            </div>
            <div class="row mt-3">
              <div class="col-sm-4"><strong class="text-uppercase">Alamat</strong></div>
              <div class="col-sm-8"><?= $data['alamat']; ?></div>
            </div>
            <div class="row mt-3">
              <div class="col-sm-4"><strong class="text-uppercase">Email</strong></div>
              <div class="col-sm-8"><?= $data['email']; ?></div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>

<?php } ?>

    <!-- Java Script -->
    <script src="./css_dokter/js/core/jquery.3.2.1.min.js"></script>
    <script src="./css_dokter/js/core/popper.min.js"></script>
    <script src="./css_dokter/js/core/bootstrap.min.js"></script>
    <script src="./css_dokter/js/now-ui-kit.js?v=1.1.0"></script>
    <script src="./css_dokter/js/aos.js"></script>
    <script src="./css_dokter/scripts/main.js"></script>
  </body>
</html>