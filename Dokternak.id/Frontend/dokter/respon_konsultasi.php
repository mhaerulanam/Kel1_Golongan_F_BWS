<?php
// Start the session
session_start();
if (!isset($_SESSION["username"])) {
    header("location:LandingPagePeternak.php?pesan=gagal");
}
?>
<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<!------ Include the above in your HEAD tag ---------->

<html>
<head>
    <meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css" type="text/css" rel="stylesheet">
    <link rel="stylesheet"  type="text/css" href="../assets/css/style4.css">

	<!-- Bootstrap CSS -->
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.1/css/all.css" integrity="sha384-gfdkjb5BdAXd+lj+gudLWI+BXq4IuLW5IT+brZEZsLFm++aCMlF1V92rMkPaX4PP" crossorigin="anonymous">
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
     <link rel="stylesheet" href="../assets/css/style3.css">
	<title>Dokternak.id - Konsultasi</title>
    <link rel="shortcut icon" type="image/x-icon" href="../assets/img/favicon.ico">

	<style>
		.h7
		{
			font-size: 0.9rem
        }
        .lihat{
            border: 0;
        }
        .tab {
        overflow: hidden;
        /* border: 1px solid #ccc; */
        background-color: #fff;
        }

        /* Style the buttons that are used to open the tab content */
        .tab button {
        background-color: #aa8c70 ;
        float: left;
        border: none;
        outline: none;
        cursor: pointer;
        padding: 14px 16px;
        transition: 0.3s;
        }

        /* Change background color of buttons on hover */
        .tab button:hover {
        background-color: #aa8c70;
        }

        /* Create an active/current tablink class */
        .tab button.active {
        background-color:#291b10;
        }

        /* Style the tab content */
        .tabcontent {
        display: none;
        padding: 6px 12px;
        border: 1px solid #ccc;
        border-top: none;
        }
	</style>

</head>
<body>
<?php
include '../koneksi.php';
include 'navbar.php';
include "../modal/ubah_password.php"; 
?>

<?php
    include '../koneksi.php';
    $id = $_SESSION['id'];
    $query5 = mysqli_query($koneksi,"select * from dokter_user, dokter, user where dokter_user.id_user=user.id_user AND  dokter_user.id_dokter=dokter.id_dokter AND dokter_user.id_dokter='$id'");
    $data1 = mysqli_fetch_assoc($query5);
    $id_dokter = $data1['id_dokter'];
?>

<section>
    <?php
        if (isset($_GET['pesan'])){
            $pesan = $_GET['pesan'];
                if ($pesan == 'berhasil') {
    ?>
                <div class="alert alert-success">
                    <center>Terima kasih atas jawaban solusi keluhannya, Balasan respon keluhan terkirim.</center>
                </div>
    <?php
                }elseif($pesan == 'gagal'){
    ?>
                <div class="alert alert-danger">
                    <center>Mohon maaf, Respon anda gagal terkirim.</center>
                </div>
    <?php
                }
        }
    ?>
    <hr>
        <center><h1>
                <b>Daftar Keluhan</b>
        </h1></center>
    <hr>

                <?php if(isset($_POST['hps'])){
                  include '../koneksi.php';
                  $idds = $_POST['idk'];
                  $sql = "DELETE FROM konsultasi WHERE id_konsultasi = '$idds'";
                  if(mysqli_query($koneksi, $sql)){
                      echo "<script>alert('Pesan Konsultasi Berhasil Dihapus ..');</script>";
                  } 
                  else{
                      echo "ERROR: Could not able to execute $sql. " . mysqli_error($koneksi);
                  }
                } ?>
                
                <?php if(isset($_POST['hapus'])){
                  include '../koneksi.php';
                  $idr = $_POST['idr'];
                  $idp = $_POST['idp'];
                  $sql = "DELETE FROM respon_konsultasi WHERE id_respon = '$idp'";
                  $sql1 = "DELETE FROM riwayat_konsultasi WHERE id_riwayat = '$idr'";
                  if(mysqli_query($koneksi, $sql)){
                      echo "<script>alert('Pesan Konsultasi Berhasil Dihapus ..');</script>";
                  } 
                  else{
                      echo "ERROR: Could not able to execute $sql. " . mysqli_error($koneksi);
                  }
                } ?>  

</section>
<div class="container">
<div class="tab">
    <?php if(isset($_POST['klok'])){?>
        <button class="tablinks" onclick="openCity(event, 'masuk')"  >Kotak Masuk</button>
        <button class="tablinks" onclick="openCity(event, 'terkirim')" id="defaultOpen">Kotak Terkirim</button>
    <?php } 
    else{?>
  <button class="tablinks" onclick="openCity(event, 'masuk')" id="defaultOpen">Kotak Masuk</button>
  <button class="tablinks" onclick="openCity(event, 'terkirim')"  >Kotak Terkirim</button>

  <?php }?>
</div>
</div>

<!-- Tab content -->
<div id="masuk" class="tabcontent">
<div class="container">
<div class="messaging">
      <div class="inbox_msg">
        <div class="inbox_people">
          <div class="headind_srch">
            <div class="recent_heading">
              <h4><b>Kotak Masuk</b></h4>
            </div>
            <div class="srch_bar">
              <div class="stylish-input-group">
                <!-- <a href="form_konsultasi.php" class="genric-btn primary">Konsultasi</a> -->
            </div>
            </div>
          </div>
          <div class="inbox_chat">

          
            <!-- Daftar Pesan yang belum direspon -->
            <?php
            $id = $_SESSION['id'];
            $RData=mysqli_query($koneksi, "SELECT * FROM konsultasi, peternak, dokter WHERE konsultasi.id_peternak=peternak.id_peternak AND konsultasi.id_dokter=dokter.id_dokter AND konsultasi.id_dokter='$id' AND konsultasi.status_kirim='norespon' ORDER by tanggal DESC, id_konsultasi DESC");
            while ($data3 = mysqli_fetch_array($RData)) {
                $ambilData1=mysqli_query($koneksi, "SELECT * FROM riwayat_konsultasi, konsultasi, respon_konsultasi, peternak, dokter WHERE riwayat_konsultasi.id_konsultasi=konsultasi.id_konsultasi AND riwayat_konsultasi.id_respon=respon_konsultasi.id_respon AND konsultasi.id_peternak=peternak.id_peternak AND respon_konsultasi.id_dokter=dokter.id_dokter AND 
                konsultasi.id_dokter='$id' ORDER by respon_konsultasi.tanggal_respon");
                $data2 = mysqli_fetch_array($ambilData1);
                $nmd = $data3['namadepan_peternak'];
                $nmb = $data3['namabelakang_peternak'];
                $nama = "$nmd $nmb";

                $isi = $data3['keluhan'];
                $num_char  =35;
                $isibts = substr($isi,0,$num_char)."...";
            ?>
            <?php if($data3['status_kirim']=='norespon'):?>
                <form method="POST">
                    <a href="#">
                    <input type="hidden" name="idst" value="<?php echo $data3['id_konsultasi']; ?>">
                    <input type="hidden" name="stt" value="off">
                        <div class="chat_list active_chat">
                        <div class="chat_people">
                            <div class="chat_img" name="klik"> <img src="../fotoakun.php?id_peternak=<?php echo $data3['id_peternak']; ?>" class="rounded-circle z-depth-0"
                                                        alt="<?php echo $data3['nama']; ?>" height="50"></img></div>
                            <div class="chat_ib">
                            <h5> Dari : <?php echo $nama; ?> <span class="chat_date" name="klik"><?php echo $data3['tanggal']; ?><br></span></h5>
                            <p name="klik"><?php echo $isibts; ?></p><button name="klik" class="lihat" ><p>Lihat</p></button>
                            </div>
                        </div>
                        </div>
                    </a>
                    </form>
              <?php else:?>
                <form method="POST">
                    <a href="#">
                    <input type="hidden" name="idst" value="<?php echo $data3['id_konsultasi']; ?>">
                    <input type="hidden" name="stt" value="off">
                        <div class="chat_list ">
                        <div class="chat_people">
                            <div class="chat_img" name="klik"> <img src="../fotoakun.php?id_peternak=<?php echo $data3['id_peternak']; ?>" class="rounded-circle z-depth-0"
                                                        alt="<?php echo $data3['nama']; ?>" height="50"></img></div>
                            <div class="chat_ib">
                            <h5> Dari : <?php echo $nama; ?> <span class="chat_date" name="klik"><?php echo $data3['tanggal']; ?><br></span></h5>
                            <p name="klik"><?php echo $isibts; ?></p><button name="klik" class="lihat" ><p>Lihat</p></button>
                            </div>
                        </div>
                        </div>
                    </a>
                    </form>
            <?php
            endif;
            }
            ?>
          </div>
        </div>

        <?php if(isset($_POST['klik'])):
            $st = "";
            $idds = $_POST['idst'];
            $ambilData1=mysqli_query($koneksi, "SELECT * FROM riwayat_konsultasi, konsultasi, respon_konsultasi, peternak, dokter WHERE riwayat_konsultasi.id_konsultasi=konsultasi.id_konsultasi AND riwayat_konsultasi.id_respon=respon_konsultasi.id_respon AND konsultasi.id_peternak=peternak.id_peternak AND respon_konsultasi.id_dokter=dokter.id_dokter AND 
            konsultasi.id_peternak='$id' ORDER by respon_konsultasi.tanggal_respon");
            $data2 = mysqli_fetch_array($ambilData1); 
            $aData=mysqli_query($koneksi, "SELECT * FROM konsultasi,peternak, kategori_hewan, kategori_artikel, dokter WHERE konsultasi.id_peternak=peternak.id_peternak AND konsultasi.id_kategori=kategori_hewan.id_kategori AND konsultasi.id_ktg=kategori_artikel.id_ktg AND konsultasi.id_dokter=dokter.id_dokter AND
            konsultasi.id_konsultasi='$idds'");
            $dt = mysqli_fetch_array($aData);
            $update_pwd=mysqli_query($koneksi,"update konsultasi set status_kirim='terespon' where id_konsultasi='$idds'");
        ?>
        
        
		<!-- <div class="collapse" id="riwayat"> -->
        <div class="mesgs">
          <div class="msg_history">
                <form method="POST" action="">
                <div class="row m-0">
                    <div class="flex-grow-1 pl-3">
                    <h5>Untuk : <?php echo $dt['nama']; ?></h5></h5>
                    </div>
                    <div class="flex-grow-4 pl-1">
                    <input type="hidden" name="idk" value="<?php echo $idds ?>">
                    <input type="submit" name="hps" class="genric-btn second" onclick="return confirm('Apakah Anda yakin ingin menghapus pesan ini?')" value="HAPUS"> 
                    </div>
                </div>
                </form>
				<!-- Post Begins -->
				<section class="card mt-4">
					<div class="border p-2">
						<!-- post header -->
						<div class="row m-0">
							<div class="">
								<a class="text-decoration-none" href="#">
									<img src="../fotoakun.php?id_peternak=<?php echo $dt['id_peternak']; ?>"class="rounded-circle z-depth-0"
                                            alt="fotoakun" height="50">
								</a>
							</div>
							<div class="flex-grow-1 pl-2">
								<!-- <a class="text-decoration-none" href="#"> -->
									<h2 class="text-capitalize h5 mb-0"><b> <?php echo $nama; ?></b></h2>
								<!-- </a>  -->
								<p class="small text-secondary m-0 mt-1"> <?php echo $dt['tanggal']; ?></p>
                            </div>
                            <div class="flex-grow-2 pl-2">
                                <p class="small text-secondary m-0 mt-1"><?php echo $dt['kategori_hewan']; ?> <br><?php echo $dt['kategori_artikel']; ?> : <?php echo $dt['nama_hewan']; ?></p>
                            </div>
						<!-- post body -->
						<div class="">
							<p class="my-2">
                            <?php echo $dt['keluhan']; ?>
							</p>
						</div>
						<hr class="my-1">
                        <!-- post footer begins -->
                        <footer class="">
							<!-- post actions -->
                                   
                                    <div class="card border border-right-0 border-left-0 border-bottom-0 mt-1">

                                </div>
                             
							</div>
							<!-- collapsed comments ends -->
						</footer>
						<!-- post footer ends -->
					</div>
                </section>
                <!-- Post Ends -->
                <section class="card mt-4">
                    <!--- Post Form Begins -->
                    <div class="card-header">
                        <ul class="nav nav-tabs card-header-tabs" id="myTab" role="tablist">
                            <li class="nav-item">
                                <a class="nav-link active" id="posts-tab" data-toggle="tab" href="#posts" role="tab" aria-controls="posts" aria-selected="true">Respon Keluhan</a>
                            </li>
                        </ul>
                    </div>
                    <div class="card-body">
                        <form action="respon_aksi.php" method="POST">
                        <div class="tab-content" id="myTabContent">
                            <div class="tab-pane fade show active" id="posts" role="tabpanel" aria-labelledby="posts-tab">
                                <input type="hidden" name="id" value="<?php echo $dt['id_dokter']; ?>">
                                <input type="hidden" name="idk" value="<?php echo $dt['id_konsultasi']; ?>">
                                <input type="hidden" name="tanggal" value="<?php echo date("y-m-d"); ?>">
                                <div class="form-group">
                                    <textarea class="form-control" id="respon" name="respon" rows="3" placeholder="Masukkan Solusi Keluhan..."></textarea>
                                </div>
                            </div>
                        </div>
                        <div class="text-right">
                        	<button type="submit" name="balas" class="btn btn-primary">KIRIM</button>
                        </div>
                        </form>
                    </div>
                <!--- Post Form Ends -->
                </section>
            </div>
        </div>
<?php endif; ?> 

        </div>
    </div>
</div>
        </div>
      </div>      
    </div>
</div>
          <!-- </div> -->
          
          <!-- Tab content -->
<div id="terkirim" class="tabcontent">
<div class="container">
<div class="messaging">
      <div class="inbox_msg">
        <div class="inbox_people">
          <div class="headind_srch">
            <div class="recent_heading">
              <h4><b>Kotak Masuk</b></h4>
            </div>
            <div class="srch_bar">
              <div class="stylish-input-group">
                <!-- <a href="form_konsultasi.php" class="genric-btn primary">Konsultasi</a> -->
            </div>
            </div>
          </div>
          <div class="inbox_chat">

              <!-- Daftar Pesan yang sudah di respon -->
            <?php
                $ambilData=mysqli_query($koneksi, "SELECT * FROM riwayat_konsultasi, konsultasi, respon_konsultasi, peternak, dokter WHERE riwayat_konsultasi.id_konsultasi=konsultasi.id_konsultasi AND riwayat_konsultasi.id_respon=respon_konsultasi.id_respon AND konsultasi.id_peternak=peternak.id_peternak AND respon_konsultasi.id_dokter=dokter.id_dokter AND 
                konsultasi.id_dokter='$id' ORDER by respon_konsultasi.tanggal_respon DESC, respon_konsultasi.id_respon DESC");
                while ($data = mysqli_fetch_array($ambilData)) {
                    $nmd = $data['namadepan_peternak'];
                    $nmb = $data['namabelakang_peternak'];
                    $nama = "$nmd $nmb"; 
                        $isi = $data['respon'];
                        $num_char  =35;
                        $isibts = substr($isi,0,$num_char)."...";
            ?>
                <form method="POST">
                    <a href="#">
                    <input type="hidden" name="ids" value="<?php echo $data['id_konsultasi']; ?>">
                    <input type="hidden" name="idr" value="<?php echo $data['id_respon']; ?>">
                        <div class="chat_list ">
                        <div class="chat_people">
                            <div class="chat_img" name="klik"> <img src="../fotoakun.php?id_peternak=<?php echo $data['id_peternak']; ?>" class="rounded-circle z-depth-0"
                                                        alt="<?php echo $data['nama']; ?>" height="50"></img></div>
                            <div class="chat_ib">
                            <h5> Kepada : <?php echo $nama; ?> <span class="chat_date" name="klik"><?php echo $data['tanggal_respon']; ?><br></span></h5>
                            <p><?php echo $isibts ?></p>
                            <input type="submit" name="klok" class="lihat" value="Lihat">
                            </div>
                        </div>
                        </div>
                    </a>
                    </form>

            <?php
            }?>
          </div>
        </div>


        <?php if(isset($_POST['klok'])):
            $st = "";
            $idd = $_POST['ids'];
            $idr = $_POST['idr'];
            $aData=mysqli_query($koneksi, "SELECT * FROM riwayat_konsultasi, konsultasi, respon_konsultasi, peternak, dokter, kategori_hewan, kategori_artikel WHERE riwayat_konsultasi.id_konsultasi=konsultasi.id_konsultasi AND riwayat_konsultasi.id_respon=respon_konsultasi.id_respon AND konsultasi.id_peternak=peternak.id_peternak AND respon_konsultasi.id_dokter=dokter.id_dokter AND konsultasi.id_kategori=kategori_hewan.id_kategori AND konsultasi.id_ktg=kategori_artikel.id_ktg AND
            riwayat_konsultasi.id_konsultasi='$idd' AND riwayat_konsultasi.id_respon = '$idr'");
            $dt = mysqli_fetch_array($aData);
            $idr = $dt['id_riwayat'];
            $idp = $dt['id_respon'];
            $update_pwd=mysqli_query($koneksi,"update riwayat_konsultasi set status='$st' where id_konsultasi='$idd'");

            //     $R=mysqli_query($koneksi, "SELECT * FROM konsultasi WHERE id_peternak='$id' AND status_kirim='norespon' ORDER by tanggal DESC");
            //     $dot = mysqli_fetch_array($R);
                      
            // if($dot'status_kirim']=='norespon'):
        ?>
        
		<!-- <div class="collapse" id="riwayat"> -->
        <div class="mesgs">
          <div class="msg_history">
                <form method="POST" action="">
                <div class="row m-0">
                    <div class="flex-grow-1 pl-3">
                    <h5>Untuk : <?php echo $dt['nama']; ?></h5></h5>
                    </div>
                    <div class="flex-grow-4 pl-1">
                    <input type="hidden" name="idr" value="<?php echo $idr ?>">
                    <input type="hidden" name="idp" value="<?php echo $idp ?>">
                    <input type="submit" name="hapus" class="genric-btn second" onclick="return confirm('Apakah Anda yakin ingin menghapus pesan ini?')" value="HAPUS"> 
                    </div>
                </div>
                </form>
				<!-- Post Begins -->
				<section class="card mt-4">
					<div class="border p-2">
						<!-- post header -->
						<div class="row m-0">
							<div class="">
								<a class="text-decoration-none" href="#">
									<img src="../fotoakun.php?id_peternak=<?php echo $dt['id_peternak']; ?>"class="rounded-circle z-depth-0"
                                            alt="fotoakun" height="50">
								</a>
							</div>
							<div class="flex-grow-1 pl-2">
								<!-- <a class="text-decoration-none" href="#"> -->
									<h2 class="text-capitalize h5 mb-0"><b><?php echo $nama; ?></b></h2>
								<!-- </a>  -->
								<p class="small text-secondary m-0 mt-1"> <?php echo $dt['tanggal']; ?></p>
                            </div>
                            <div class="flex-grow-2 pl-2">
                                <p class="small text-secondary m-0 mt-1"><?php echo $dt['kategori_hewan']; ?> <br><?php echo $dt['kategori_artikel']; ?> : <?php echo $dt['nama_hewan']; ?></p>
                            </div>
						</div>
						<!-- post body -->
						<div class="">
							<p class="my-2">
                            <?php echo $dt['keluhan']; ?>
							</p>
						</div>
						<hr class="my-1">
                        <!-- post footer begins -->
                                    <footer class="">
							<!-- post actions -->
                                    <div class="">
                                        <ul class="list-group list-group-horizontal">		
                                            <li class="list-group-item flex-fill text-center p-0 px-lg-2 border border-right-0 border-top-0 border-bottom-0">
                                                <a class="small text-decoration-none" data-toggle="collapse" href="#collapseExample" role="button" aria-expanded="false" aria-controls="collapseExample">
                                                    <h6> <i class="fas fa-comment-alt"></i> Respon Konsultasi</h6>
                                                </a>
                                            </li>	
                                        </ul>
                                    </div>
                                    <div class="card border border-right-0 border-left-0 border-bottom-0 mt-1">
									<!-- comment card bgins -->
									<section>
										<div class="card p-2 mt-3">
											<!-- comment header -->
											<div class="d-flex">
												<div class="">
													<a class="text-decoration-none" href="#">
													<img src="../profil.php?id_dokter=<?php echo $dt['id_dokter']; ?>" class="rounded-circle z-depth-0"
                                                        alt="<?php echo $data['nama']; ?>" height="40"></img>
													</a>
												</div>
												<div class="flex-grow-1 pl-2">
													<a class="text-decoration-none text-capitalize h6 m-0" href="#"><?php echo $dt['nama']; ?></a>
													<p class="small m-0 text-muted"><?php echo $dt['tanggal_respon']; ?></p>
												</div>		
											</div>
											<!-- comment header -->
											<!-- comment body -->
											<div class="card-body p-0">
												<p class="card-text h7 mb-1"><?php echo $dt['respon']; ?></p>		
											</div>
										</div>
									</section>
									<!-- comment card ends -->

                                </div>
                             
							</div>
							<!-- collapsed comments ends -->
						</footer>
						<!-- post footer ends -->
					</div>
				</section>
				<!-- Post Ends -->
            </div>
            <?php endif; ?>
        </div>
        </div>
    </div>
</div>
      </div>
      </div>      
    </div>
<!-- batasan -->
</div>

    
<!-- JS here -->
    

        <script>
            document.getElementById("defaultOpen").click();
            function openCity(evt, cityName) {
            // Declare all variables
            var i, tabcontent, tablinks;

            // Get all elements with class="tabcontent" and hide them
            tabcontent = document.getElementsByClassName("tabcontent");
            for (i = 0; i < tabcontent.length; i++) {
                tabcontent[i].style.display = "";
            }

            // Get all elements with class="tablinks" and remove the class "active"
            tablinks = document.getElementsByClassName("tablinks");
            for (i = 0; i < tablinks.length; i++) {
                tablinks[i].className = tablinks[i].className.replace(" active", "");
            }

            // Show the current tab, and add an "active" class to the button that opened the tab
            document.getElementById(cityName).style.display = "block";
            evt.currentTarget.className += " active";
            }
        </script>

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
        <script src="./assets/js/plugins.js"></script>
        <script src="./assets/js/main.js"></script>
        
        <footer>
            <?php 
                include 'footer.php';
            ?>
        </footer>
    <!-- Optional JavaScript -->
	<!-- jQuery first, then Popper.js, then Bootstrap JS -->
	<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
	<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
    </body>
    </html>