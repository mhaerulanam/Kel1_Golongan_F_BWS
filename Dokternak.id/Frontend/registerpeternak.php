<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
<style>
body {font-family: Arial, Helvetica, sans-serif;}

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
/* The alert message box */
.alert {
  padding: 20px;
  background-color: #f44336; /* Red */
  color: white;
  margin-bottom: 15px;
}

/* The close button */
.closebtn {
  margin-left: 15px;
  color: white;
  font-weight: bold;
  float: right;
  font-size: 22px;
  line-height: 20px;
  cursor: pointer;
  transition: 0.3s;
}

/* When moving the mouse over the close button */
.closebtn:hover {
  color: black;
}
</style>
</head>
<body>
<?php include 'koneksi.php';?>
<?php
if(isset($_POST["daftarpeternak"])) {

      $namadepan_peternak = $_POST["namadepan_peternak"];
      $namabelakang_peternak = $_POST["namabelakang_peternak"];
      $email_peternak = $_POST["email_peternak"];
      $no_hp = $_POST['no_hp'];
      $no_wa = $_POST['no_wa'];
      $jenis_kelamin = $_POST["jenis_kelamin"];
      $alamat = $_POST["alamat"];
      $fp_name = $_FILES['foto_ternak']['name'];
      $fp_size = $_FILES['foto_ternak']['size'];
      $fp_type = $_FILES['foto_ternak']['type'];
      $foto_peternak = $_POST["foto_peternak"];
      $username_peternak = $_POST["username_peternak"];
      $password_peternak = $_POST["password_peternak"];
      if ($fp_size < 2048000 and ($fp_type =='image/jpeg' or $fp_type == 'image/png'))
      {
        
          $fp = addslashes(file_get_contents($_FILES['file_foto']['tmp_name']));
      $query = "INSERT INTO peternak VALUES('','$namadepan_peternak','$namabelakang_peternak','$email_peternak','$no_hp','$no_wa','$jenis_kelamin','$alamat','$foto_peternak','$username_peternak','$password_peternak')";
      mysqli_query($koneksi,$query);
      //cek keberhasilan
      if(mysqli_affected_rows($koneksi) > 0){
         echo"Berhasil";
      } else {
        echo "gagal";
      }

      }
      else
      {
        header("location:registrasi_dokter.php?pesan=gagal");
      }
  }

?>

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
        <form role="form" action="" method="post" action="uploadfotopeternak.php">
            <center><h2>Registrasi Akun Peternak</h2></center>
          <div class="form-group">
            <label for="namadepan_peternak"><span class="glyphicon glyphicon-user"></span> Nama Depan</label>
            <input type="text" class="form-control" name="namadepan_peternak" placeholder="Masukkan Nama Depan">
          </div>
          <div class="form-group">
            <label for="namabelakang_peternak"><span class="glyphicon glyphicon-user"></span> Nama Belakang</label>
            <input type="text" class="form-control" name="namabelakang_peternak" placeholder="Masukkan Nama Belakang">
          </div>
          <div class="form-group">
            <label for="username_peternak"><span class="glyphicon glyphicon-user"></span> Username</label>
            <input type="text" class="form-control" name="username_peternak" placeholder="Username Harus Terdiri Dari 6-16 Karakter">
          </div>
          <div class="form-group">
            <label for="email_peternak"><span class="glyphicon glyphicon-envelope"></span> Email</label>
            <input type="email" class="form-control" name="email_peternak" placeholder="Masukkan Email Dengan Benar">
          </div>
          <div class="form-group">
            <label for="password_peternak"><span class="glyphicon glyphicon-eye-open"></span> Password</label>
            <input type="password" class="form-control" name="password_peternak" placeholder="Masukkan angka dan huruf">
          </div>
          <div class="form-group">
            <label for="psws"><span class="glyphicon glyphicon-eye-open"></span> Ketik Ulang Password</label>
            <input type="password" class="form-control" name="" placeholder="Ketik ulang password Anda">
          </div>

        <!-- Kanan Bang **************************************************************************************-->
        <div id="right">
          <div class="form-group">
            <label for="no_hp"><span class="glyphicon glyphicon-earphone"></span> No Handphone</label>
            <input type="number" class="form-control" name="no_hp" placeholder="Masukkan Nomer Handphone">
          </div>
          <div class="form-group">
            <label for="no_wa"><span class="glyphicon glyphicon-earphone"></span> No Whatsapp</label>
            <input type="number" class="form-control" name="no_wa" placeholder="Masukkan Nomer Whatsapp">
          </div>
          <div class="form-group">
            <label for="jenis_kelamin"><span class="glyphicon glyphicon-star"></span> Jenis Kelamin</label>
            <br>
            <input type="radio" name="jenis_kelamin" value="Laki-Laki">
            <label for="laki">Laki - Laki</label><br>
            <input type="radio" name="jenis_kelamin" value="Perempuan">
            <label for="laki">Perempuan</label><br>
          </div>

          <div class="form-group">
            <label for="alamat"><span class="glyphicon glyphicon-road"></span> Alamat Lengkap</label>
            <input type="text" class="form-control" name="alamat" placeholder="Masukkan Alamat Lengkap">
          </div>

          <div class="form-group">
            <label for="foto_peternak"><span class="glyphicon glyphicon-upload"></span> Upload Foto Profil</label>
            <input type="file" class="form-control" name="foto_peternak">
          </div>
      </div>

          <div class="form-group">
          
          
          <!-- <div class="checkbox">
            <label><input type="checkbox" value="" checked>Menerima Persyaratan Yang Berlaku</label>
          </div> -->
          <button type="submit" name ="daftarpeternak" class="btn btn-success btn-block"> Daftar</button>
          </form>
          </div>
        </form>
      </div>
        </div>
        </div>
        <div class="tab">
          <input type="radio" name="css-tabs" id="tab-2" class="tab-switch">
          <label for="tab-2" class="tab-label">Dokter</label>
        <div class="tab-content">
          <div class="modal-body" style="padding:40px 50px;">
        <form role="form">
          <div class="form-group">
            <label for="usrname"><span class="glyphicon glyphicon-user"></span> Nama Dokter</label>
            <input type="text" class="form-control" id="usrname" placeholder="Enter email">
          </div>
          <div class="checkbox">
            <label><input type="checkbox" value="" checked>Remember me</label>
          </div>
            <button type="submit" class="btn btn-success btn-block"><span class="glyphicon glyphicon-off"></span>Daftar</button>
        </form>
      </div>
        </div>
        </div>
      </div>
      </div>
  </div>

</div>

<script>
// Get the modal
var modal = document.getElementById("myModal");

// Get the button that opens the modal
var btn = document.getElementById("myBtn");

// Get the <span> element that closes the modal
var span = document.getElementsByClassName("close")[0];

// When the user clicks the button, open the modal 
btn.onclick = function() {
  modal.style.display = "block";
}

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
