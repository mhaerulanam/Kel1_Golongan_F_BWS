<?php
// Start the session
session_start();
?>
<!DOCTYPE html>
<html>
<head>
<title>Dokternak.id - Edit Profil</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">

<!-- Font -->
<link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i,800,800i" rel="stylesheet">

<!-- Script JS -->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>

<style>
body {font-family: Arial, Helvetica, sans-serif;}

/* Modal Content */
.modal-content {
  background-color: #fefefe;
  margin-top: 50px;
  margin-left: auto;
  margin-right: auto;
  padding: 20px;
  border: 1px solid #888;
  width: 500px;
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
  color: #000000;
  line-height: 1.618em;
}
.tabs {
  /* position: relative;
  margin: 2rem 0;
  background: #ffffff;
  height: 40rem; */
  margin: 0% 10%;
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
  /*float: left;*/
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
.btn btn-info {
  margin-left: auto;
  margin-right: ;
}
</style>
</head>
<body>


<?php include 'koneksi.php';?>

<?php
  session_start();

$id = $_SESSION['id'];
$query = mysqli_query($koneksi,"select * from peternak, user where peternak.id_user=user.id_user AND id_peternak=$id");
$data = mysqli_fetch_assoc($query);
$nmd = $data["namadepan_peternak"];
$nmb = $data["namabelakang_peternak"];
$nama = "$nmd $nmb";
$id_peternak = $data['id_peternak'];
$id_user = $data['id_user'];

?>


<?php
					if(isset($_POST['edit'])){
            $id = $_SESSION['id'];
            // $id_peternak = $_POST['id_peternak'];
            // $id_user = $_POST['id_user'];
            $namadepan = $_POST['namadepan_peternak'];
            $namabelakang = $_POST['namabelakang_peternak'];
            $email = $_POST['email_peternak'];
            $no_telpon = $_POST['no_hp'];
            $jk = $_POST['jenis_kelamin'];
            $alamat = $_POST['alamat'];
            $username = $_POST['username'];
            
            //edit
            // $sql1 = "UPDATE dokter SET nama = '$nama',  email = '$email',  jenis_kelamin = '$jk', alamat = '$alamat', tempat = '$tempat', telpon = '$telpon', jadwal_kerja = '$jadwal_kerja' WHERE id_dokter = '$id_dokter'";
            // $sql = "UPDATE user SET  username = '$username' WHERE id_user = '$id_user'";

						$sql1 = "UPDATE peternak SET namadepan_peternak = '$namadepan', namabelakang_peternak = '$namabelakang', email_peternak = '$email',  no_hp = '$no_telpon', jenis_kelamin = '$jk', alamat = '$alamat' WHERE id_peternak = '$id_peternak'";
            $sql = "UPDATE user SET  username = '$username' WHERE id_user = '$id_user'";
            if(mysqli_query($koneksi, $sql1)){
              if(mysqli_query($koneksi, $sql)){
                $nilaihasil = "Records updated successfully.";
							header("location:profil_akun.php?pesan=berhasil");
						}else{
                header("location:profil_akun.php?pesan=gagal");
              }	
            }else{
							echo "ERROR: Could not able to execute $sql. " . mysqli_error($koneksi);
            } };
          ?>
<section>
  <!-- Modal content -->
  <div class="modal-content">
  <a href="profil_akun.php" class="close">&times;</a>
    <div class="wrapper">
      <div class="tabs">
        <div class="tab">
          <!-- <input type="radio" name="css-tabs" id="tab-1" class="tab-switch">
          <label for="tab-1" class="tab-label">Peternak</label> -->
        <!-- <div class="tab-content">
          <div class="modal-body" style="padding:40px 50px;">
        <form role="form" action="" method="post"> -->

        <center><h1> Edit Profil</h1></center><hr><br>
        <form method="post" action="">
          <div class="form-group">
            <label for="namadepan_peternak"><span class="glyphicon glyphicon-user"></span> Nama Depan</label>
            <input type="text" class="form-control" name="namadepan_peternak" value="<?php echo $nmd; ?>">
          </div>
          <div class="form-group">
            <label for="namabelakang_peternak"><span class="glyphicon glyphicon-user"></span> Nama Belakang</label>
            <input type="text" class="form-control" name="namabelakang_peternak"  value="<?php echo $nmb;?>">
          </div>
          <div class="form-group">
            <label for="email_peternak"><span class="glyphicon glyphicon-envelope"></span> Email</label>
            <input type="email" class="form-control" name="email_peternak" value="<?php echo $data['email_peternak'];?>">
          </div>

        <!-- Kanan Bang **************************************************************************************-->
        <!-- <div id="right"> -->
          <div class="form-group">
            <label for="no_hp"><span class="glyphicon glyphicon-earphone"></span> No Handphone</label>
            <input type="number" class="form-control" name="no_hp" value="<?php echo $data['no_hp'];?>">
          </div>
          <!--<div class="form-group">
            <label for="jenis_kelamin"><span class="glyphicon glyphicon-star"></span> Jenis Kelamin</label>
            <br>
            <input type="radio" name="jenis_kelamin" value="Laki-Laki">
            <label for="laki">Laki - Laki</label><br>
            <input type="radio" name="jenis_kelamin" value="Perempuan">
            <label for="laki">Perempuan</label><br>
          </div> -->
          <div class="form-group">
            <label for="jk"><span class="glyphicon glyphicon-star"></span> Jenis Kelamin</label>
          <div class="wrapper">
            <div class="tabs-2">
                <div class="tab">
                  <input type="radio" name="jenis_kelamin" id="tab-l" class="tab-switch" value="Laki-Laki" <?php if($data['jenis_kelamin']=='Laki-Laki') echo 'checked' ?>>
                  <label for="tab-l" class="tab-label">Laki-Laki</label>
                </div>
                <div class="tab">
                  <input type="radio" name="jenis_kelamin" id="tab-p" class="tab-switch" value="Perempuan" <?php if($data['jenis_kelamin']=='Perempuan') echo 'checked' ?>>
                  <label for="tab-p" class="tab-label">Perempuan</label>
                </div>
            </div>
            </div>
          </div>

          <div class="form-group">
            <label for="alamat"><span class="glyphicon glyphicon-road"></span> Alamat Lengkap</label>
            <textarea class="form-control" name="alamat" rows="5"><?php echo $data['alamat'];?></textarea>
            <!--<input type="text" class="form-control" name="alamat" value="<?php echo $data['alamat'];?>">-->
          </div>
           <div class="form-group">
            <label for="username"><span class="glyphicon glyphicon-user"></span> Username</label>
            <input type="text" class="form-control" name="username" value="<?php echo $data['username'];?>">
          </div>

          <!-- <div class="form-group">
            <label for="foto_peternak"><span class="glyphicon glyphicon-upload"></span> Upload Foto Profil</label>
            <input type="file" class="form-control" name="foto_peternak">
          </div> -->

          <!-- <div class="form-group"> -->
          
          
          <div class="checkbox">
            <!--<label><input type="checkbox" value="" checked>Menerima Persyaratan Yang Berlaku</label>-->
          </div>
          <input type="submit" class="btn btn-info" value="Edit" name="edit">
          <a href="profil_akun.php" class="btn btn info-border" >Batal</a>
          <!-- <input type="reset" class="btn btn-info" value="Batal" name=""> -->
          <!-- </div> -->
        </form>
      </div>
        </div>
        </div>
        </div>
        </section>
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
