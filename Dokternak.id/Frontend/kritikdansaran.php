<!doctype html>
<html class="no-js" lang="zxx">

<head>
   <meta charset="utf-8">
   <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Dokternak.id - Kritik dan Saran</title>
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
</head>

<body>
   <!-- Banner-->
   <div class="slider-area ">
      <div class="single-slider section-overly slider-height2 d-flex align-items-center" data-background="assets/img/gallery/s2.jpg">
          <div class="container">
              <div class="row">
                  <div class="col-xl-12">
                      <div class="hero-cap text-center">
                          <h2>Kritik dan Saran</h2>
                      </div>
                  </div>
              </div>
          </div>
      </div>
   </div>
   <!-- Banner End-->
   <!--================Kritik saran =================-->
   <section class="blog_area single-post-area section-padding">
      <div class="container">
         <div class="row">
            <div class="col-lg-8 posts-list">
               

            <!-- Pesan Konfirmasi -->
            <?php
                if (isset($_GET['pesan'])){
                    $pesan = $_GET['pesan'];
                        if ($pesan == 'berhasil') {
            ?>
                        <div class="alert alert-success">
                            <center>Terkirim. Terima kasih atas saran dan kritik anda!</center>
                        </div>
            <?php
                        }elseif($pesan == 'gagal'){
            ?>
                        <div class="alert alert-danger">
                            <center>Oops! Ada kesalahan, saran dan kritik anda gagal terkirim.</center>
                        </div>
            <?php
                        }
                }
            ?>
            <!-- Akhir dari pesan konfirmasi -->

               <div class="comment-form">
                   <h4>Hai, apakah ada sesuatu yang menyulitkan anda di website ini? Mungkin kami bisa membantu anda.</h4>
                  <p>Silahkan tulis kritik / saran anda disini.</p>
                  <form class="form-contact comment_form" action="kritiksaran_aksi.php" id="commentForm" method="POST">
                     <div class="row">
                        <div class="col-12">
                           <div class="form-group">
                               <input type="hidden" name="tanggal" value="<?php echo date("d-m-Y"); ?>">
                              <textarea class="form-control w-100" name="komentar" id="komentar" cols="30" rows="9"
                                 placeholder="Tuliskan komentar anda disini"></textarea>
                           </div>
                        </div>
                        <div class="col-sm-6">
                           <div class="form-group">
                              <input class="form-control" name="nama" id="nama" type="text" placeholder="Nama">
                           </div>
                        </div>
                        <div class="col-sm-6">
                           <div class="form-group">
                              <input class="form-control" name="email_hp" id="email_hp" type="text" placeholder="Email / No.HP">
                           </div>
                        </div>
                        <div class="col-12">
                           <div class="form-group">
                              <input class="form-control" name="pekerjaan" id="pekerjaan" type="text" placeholder="Pekerjaan">
                           </div>
                        </div>
                     </div>
                     <div class="form-group">
                        <button type="submit" class="button button-contactForm btn_1 boxed-btn">Kirim</button>
                     </div>
                  </form>
               </div>
            </div>
            <!-- Akhir dari kritik dan saran -->
</body>
</html>