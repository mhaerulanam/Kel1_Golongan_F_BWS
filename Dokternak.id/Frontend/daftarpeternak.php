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
</style>
</head>
<body>

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
            <center><h2>Registrasi Akun Peternak</h2></center>
          <div class="form-group">
            <label for="namadpn"><span class="glyphicon glyphicon-user"></span> Nama Depan</label>
            <input type="text" class="form-control" id="namadpn" placeholder="Masukkan Nama Depan">
          </div>
          <div class="form-group">
            <label for="namablkng"><span class="glyphicon glyphicon-user"></span> Nama Belakang</label>
            <input type="text" class="form-control" id="namablkng" placeholder="Masukkan Nama Belakang">
          </div>
          <div class="form-group">
            <label for="username"><span class="glyphicon glyphicon-eye-open"></span> Username</label>
            <input type="text" class="form-control" id="username" placeholder="Username Harus Terdiri Dari 6-16 Karakter">
          </div>
          <div class="form-group">
            <label for="email"><span class="glyphicon glyphicon-eye-open"></span> Email</label>
            <input type="email" class="form-control" id="email" placeholder="Masukkan Email Dengan Benar">
          </div>
          <div class="form-group">
            <label for="psw"><span class="glyphicon glyphicon-eye-open"></span> Password</label>
            <input type="password" class="form-control" id="psw" placeholder="Enter password">
          </div>
          <div class="form-group">
            <label for="psw"><span class="glyphicon glyphicon-eye-open"></span> Ketik Ulang Password</label>
            <input type="password" class="form-control" id="psw" placeholder="Enter password">
          </div>
          <div class="form-group">
            <label for="jk"><span class="glyphicon glyphicon-eye-open"></span> Jenis Kelamin</label>
            <br>
            <input type="radio" id="cowok" name="jk" value="cowok">
            <label for="laki">Laki - Laki</label><br>
            <input type="radio" id="cewek" name="jk" value="cewek">
            <label for="laki">Perempuan</label><br>
          </div>

          <div class="form-group">
          <label for="upload"><span class="glyphicon glyphicon-eye-open"></span> Foto Profil</label>
          <form method="post" enctype="multipart/form-data" action="upload.php">
          <input type="file" name="gambar">
          <input type="submit" value="Upload">
          </form>
          </div>
         
          <div class="form-group">
            <label for="alamat"><span class="glyphicon glyphicon-user"></span> Alamat Lengkap</label>
            <input type="text" class="form-control" id="alamat" placeholder="Masukkan Alamat Lengkap">
          </div>
          <div class="checkbox">
            <label><input type="checkbox" value="" checked>Menerima Persyaratan Yang Berlaku</label>
          </div>
            <button type="submit" class="btn btn-success btn-block"><span class=""></span> Daftar</button>
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
