<!DOCTYPE html>
<html>
<head>
<title>Dokternak.id - Registrasi</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">

<!-- Font -->
<link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i,800,800i" rel="stylesheet">

<!-- Script JS -->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>

<style>
body {font-family: Arial, Helvetica, sans-serif;}
/* The Modal (background) */
.modal {
  display: none; /* Hidden by default */
  position: fixed; /* Stay in place */
  z-index: 1; /* Sit on top */
  padding-top: 100px; /* Location of the box */
  left: 0;
  top: 0;
  width: 100%; /* Full width */
  height: 100%; /* Full height */
  overflow: auto; /* Enable scroll if needed */
  background-color: rgb(0,0,0); /* Fallback color */
  background-color: rgba(0,0,0,0.4); /* Black w/ opacity */
}

/* Modal Content */
.modal-content {
  background-color: #fefefe;
  margin: auto;
  padding: 20px;
  border: 1px solid #888;
  width: 80%;
  height: fit-content;
}

/* The Close Button */
.close {
  color: #000000;
  float: right;
  font-size: 28px;
  font-weight: bold;
}

.close:hover,
.close:focus {
  color: #000;
  text-decoration: none;
  cursor: pointer;
}
    * {
  box-sizing: border-box;
}
body {
  font-family: "Open Sans";
  background: #2c3e50;
  color: #ecf0f1;
  line-height: 1.618em;
}
.wrapper {
  max-width: auto;
  width: 100%;
  margin: 0 auto;
}
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

/* FORM */
form {
  display: grid;
  grid-template-columns: 1fr 1fr;
  grid-gap: 20px;

.left{
  position: absolute;
  top: 0;
  left: 0;
  box-sizing: border-box;
  padding: 40px;
  width: 300px;
  height: 400px;
}
.right{
  position: absolute;
  top: 0;
  right: 0;
  box-sizing: border-box;
  padding: 40px;
  width: 300px;
  height: 400px;
} 

/* Choose File Style */

.input-group {
  position: relative;
  margin: 0;
}

.label--desc {
  font-size: 20px;
  color: #999;
  margin-top: 10px;
}

.input-file {
  display: none;
}  

</style>
</head>
<body>

<!-- <h2>Modal Example</h2> -->

<!-- Trigger/Open The Modal -->
<!-- <button id="myBtn">Open Modal</button> --> 


<!-- The Modal -->
<div id="myModal" data-toggle="modal" class="modal">

  <!-- Modal content -->
  <div class="modal-content">
    <span class="close">&times;</span>
    <div class="wrapper">
      <div class="tabs">
        <div class="tab">
          <input type="radio" name="css-tabs" id="tab-1" class="tab-switch">
          <label for="tab-1" class="tab-label">Peternak</label>
        <div class="tab-content">
          <div class="modal-body" style="padding:40px 50px;">
        <form role="form">
          <div class="form-group">
            <label for="usrname"><span class="glyphicon glyphicon-user"></span> Username</label>
            <input type="text" class="form-control" id="usrname" placeholder="Enter email">
          </div>
          <div class="form-group">
            <label for="psw"><span class="glyphicon glyphicon-eye-open"></span> Password</label>
            <input type="text" class="form-control" id="psw" placeholder="Enter password">
          </div>
          <div class="checkbox">
            <label><input type="checkbox" value="" checked>Remember me</label>
          </div>
            <button type="submit" class="btn btn-success btn-block"><span class="glyphicon glyphicon-off"></span> Login</button>
        </form>
      </div>
        </div>
        </div>

        <!-- ************************************************************************************************************* -->
        <!-- Form Registrasi Dokter -->
        <!-- ************************************************************************************************************* -->

        <!-- Script Pemberitahuan -->
        <?php
        if (isset($_GET['pesan'])){
            $pesan = $_GET['pesan'];
                if ($pesan == 'berhasil') {
        ?>
                  <div class="alert alert-success">
                    <center>Pendaftaran berhasil! Selanjutnya dimohon untuk menunggu verifikasi dari Admin via Gmail.
                    <a href="registrasi_dokter.php"><b>Kembali</b></a>
                    </center>
                  </div>
        <?php
                }elseif($pesan == 'kurang-foto'){
        ?>
                  <div class="alert alert-danger">
                    <center>Mohon untuk mengupload foto profil/scan sertifikat.
                    <a href="registrasi_dokter.php"><b>Ulangi Mendaftar</b></a>
                    </center>
                  </div>
        <?php
                }elseif($pesan == 'gagal'){
        ?>
                  <div class="alert alert-danger">
                    <center>Mohon maaf, pendaftaran anda gagal! Silahkan mendaftar ulang atau hubungi kami via gmail.
                    <a href="registrasi_dokter.php"><b>Ulangi Mendaftar</b></a>
                    </center>
                  </div>
        <?php
          }
        }
        ?>
        <!-- End acript -->

        

        <div class="tab">
          <input type="radio" name="css-tabs" id="tab-2" class="tab-switch">
          <label for="tab-2" class="tab-label">Dokter</label>
        <div class="tab-content">
          <div class="modal-body" style="padding:40px 50px;">

        <form method="post" action="regisdokter_aksi.php" enctype="multipart/form-data">

        <!-- Kiri Bang **************************************************************************************-->
        <div id="left">
          <div class="form-group">
            <label for="nama"><span class="glyphicon glyphicon-user"></span> Nama Lengkap</label>
            <input type="text" class="form-control" name="nama" placeholder="Masukkan nama lengkap (disertai gelar)" required>
          </div>
          <div class="form-group">
            <label for="email"><span class="glyphicon glyphicon-envelope"></span> Akun Email</label>
            <input type="email" class="form-control" name="email" placeholder="Masukkan email" required>
          </div>
          <div class="form-group">
            <label for="jk"><span class="glyphicon glyphicon-star"></span> Jenis Kelamin</label>

            <!-- Tab memilih jenis kelamin -->
            <div class="wrapper">
            <div class="tabs-2">
                <div class="tab">
                  <input type="radio" name="jk" id="tab-l" class="tab-switch" value="Laki-Laki" selected>
                  <label for="tab-l" class="tab-label">Laki-Laki</label>
                </div>
                <div class="tab">
                  <input type="radio" name="jk" id="tab-p" class="tab-switch" value="Perempuan" selected>
                  <label for="tab-p" class="tab-label">Perempuan</label>
                </div>
            </div>
            </div>
          </div>

          <div class="form-group">
            <label for="alamat"><span class="glyphicon glyphicon-road"></span> Alamat</label><br>
            <textarea name="alamat" name="alamat" class="form-control" placeholder="Masukkan alamat" required></textarea>
          </div>
          <div class="form-group">
            <label for="kec"><span class="glyphicon glyphicon-road"></span> Kecamatan (Tempat Dinas/Praktek)</label><br>
            <input type="text" name="kec" name="kec" class="form-control" placeholder="Masukkan kecamatan" required>
          </div>
          <div class="form-group">
            <label for="telpon"><span class="glyphicon glyphicon-envelope"></span> No. Telpon / WhatsApp</label>
            <input type="number" class="form-control" name="telpon" placeholder="Masukkan nomor telpon" required>
          </div>

          </div>
          <!-- Akhir dari kiri **************************************************************************************-->

          <!-- Kanan Bang **************************************************************************************-->
          <div id="right">

          <!-- Kolom Upload File -->
          <div class="form-group">
            <label for="fp"><span class="glyphicon glyphicon-upload"></span> Upload Foto Profil</label>
                            <div class="value">
                                <div class="input-group js-input-file">
                                    <input class="input-file" type="file" name="file_foto" id="file_foto">
                                </div>
                                <div class="label--desc">Upload foto profil dengan ukuran maksimal 10 MB</div>
                            </div>
          </div>
          <div class="form-group">
            <label for="sertif"><span class="glyphicon glyphicon-file"></span> Upload Sertifikat Profesi</label>
                            <div class="value">
                                <div class="input-group js-input-file">
                                    <input class="input-file" type="file" name="file_sertifikat" id="file_sertifikat">
                                </div>
                                <div class="label--desc">Upload scan sertifikat dengan ukuran maksimal 10 MB</div>
                            </div>
          </div>

          <!-- TAB untuk memilih pekerjaan -->
          
                <!-- Tab memilih jenis kelamin -->
            <div class="wrapper">
            <div class="tabs-2">
                <div class="tab">
                <input type="radio" name="jabatan" id="tab-param" class="tab-switch" value="J02" selected>
                <label for="tab-param" class="tab-label">Paramedis</label>
                </div>
                <div class="tab">
                <input type="radio" name="jabatan" id="tab-dok" class="tab-switch" value="J01" selected>
                <label for="tab-dok" class="tab-label">Dokter</label>
                </div>
                <div class="tab">
                <input type="radio" name="jabatan" id="tab-ib" class="tab-switch" value="J03" selected>
                <label for="tab-ib" class="tab-label">Petugas IB</label>
                </div>
            </div>
            <div class="form-group">
                    <label for="telpon"><span class="glyphicon glyphicon-briefcase"></span> Jadwal Kerja</label>
                    <textarea class="form-control" name="jadwal_kerja" placeholder="Masukkan jadwal kerja anda"></textarea>
                  </div>
                  <div class="form-group">
                    <label for="telpon"><span class="glyphicon glyphicon-user"></span> Username</label>
                    <input type="text" class="form-control" name="username" placeholder="Masukkan username">
                  </div>
                  <div class="form-group">
                    <label for="telpon"><span class="glyphicon glyphicon-asterisk"></span> Password</label>
                    <input type="password" class="form-control" name="password" placeholder="Masukkan password">
                  </div>
            </div>
          </div>  
          <!--akhir dari kanan **************************************************************************************-->

          <div class="checkbox">
            <label><input type="checkbox" value="" checked>Dengan ini saya menyetujui segala ketentuan dalam website Dokternak.id</label>
          </div>
            <button type="submit" class="btn btn-success btn-block" name="daftar"><span class="glyphicon glyphicon-check"></span> Daftar</button>
        </form>
      </div>
        </div>
        </div>
      </div>
      </div>

      <!-- ************************************************************************************************************* -->
      <!-- Akhir dari Registrasi Dokter -->
      <!-- ************************************************************************************************************* -->
  </div>

</div>

<script>
// Get the modal
var modal = document.getElementById("myModal");

// Get the button that opens the modal
// var btn = document.getElementById("myBtn");

// Get the <span> element that closes the modal
var span = document.getElementsByClassName("close")[0];

// When the user clicks the button, open the modal 
// btn.onclick = function() {
//   modal.style.display = "block";
// }

var tab1 = document.getElementById("tab-1");
// Buka Modal langsung setelah user menekan tombol daftar
modal.style.display = "block";


// When the user clicks on <span> (x), close the modal
span.onclick = function() {
  modal.style.display = "none";
}

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
  if (event.target == modal) {
    modal.style.display = "none";
  }
}
</script>

</body>
</html>
