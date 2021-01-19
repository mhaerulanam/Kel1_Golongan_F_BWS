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
  margin: auto;
  margin-top: 5%;
  padding: 20px;
  border: 1px solid #888;
  width: 600px;
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
  grid-gap: 30px;

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


</style>
</head>
<body>


    <?php include '../koneksi.php';?>

    <?php
      session_start();

      $id = $_SESSION['id'];
      $query = mysqli_query($koneksi,"select * from dokter_user, dokter, user  where dokter_user.id_user=user.id_user AND dokter_user.id_dokter= dokter.id_dokter and dokter_user.id_dokter='$id'");


    ?>

  <!-- Modal content -->
  <div id="editModal">
    <div class="modal-content">
    <a href="LandingPageDokter.php" class="close">&times;</a>
    <!-- <span class="close">&times;</span> -->
      <div class="wrapper">
        <div class="tabs">
          <div class="tab">

            <center><h1> Edit Biodata</h1></center><hr><br>
            <form method="POST" action="editbiodokter_aksi.php">
              <?php while($data = mysqli_fetch_assoc($query)) { ?>

              <input type="hidden" class="form-control" name="id_dokter" value="<?php echo $data['id_dokter']; ?>">
              <input type="hidden" class="form-control" name="id_user" value="<?php echo $data['id_user']; ?>">
              
              <!-- Kiri  **************************************************************************************-->
              <div id="left">
                <div class="form-group">
                  <label for="nama"><span class="glyphicon glyphicon-user"></span> Nama </label>
                  <input type="text" class="form-control" name="nama" value="<?php echo $data['nama']; ?>">
                </div>
                <div class="form-group">
                  <label for="email"><span class="glyphicon glyphicon-user"></span> Email </label>
                  <input type="text" class="form-control" name="email" value="<?php echo $data['email']; ?>">
                </div>

                <div class="form-group">
                  <label for="jenis_kelamin"><span class="glyphicon glyphicon-star"></span> Jenis Kelamin</label>
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
                </div><br><br><br>

                <div class="form-group">
                  <label for="alamat"><span class="glyphicon glyphicon-road"></span> Alamat </label>
                  <input type="text" class="form-control" name="alamat" value="<?php echo $data['alamat'];?>">
                </div>

              </div>

              <!-- Kanan  **************************************************************************************-->

              <div id="right">

                <div class="form-group">
                  <label for="tempat"><span class="glyphicon glyphicon-road"></span> Tempat Dinas</label>
                  <input type="text" class="form-control" name="tempat" value="<?php echo $data['tempat'];?>">
                </div>
                
                <div class="form-group">
                  <label for="jadwal_kerja"><span class="glyphicon glyphicon-briefcase"></span> Jadwal_Kerja</label>
                  <textarea class="form-control" name="jadwal_kerja" rows="9"><?php echo $data['jadwal_kerja'];?></textarea>
                </div>

                <div class="form-group">
                  <label for="telpon"><span class="glyphicon glyphicon-earphone"></span> No Telpon</label>
                  <input type="text" class="form-control" name="telpon" value="<?php echo $data['telpon'];?>">
                </div>

                <div class="form-group">
                  <label for="username_peternak"><span class="glyphicon glyphicon-user"></span> Username</label>
                  <input type="text" class="form-control" name="username" value="<?php echo $data['username'];?>">
                </div>
                <?php } ?>
                <div class="form-group">
                
                
                <div class="checkbox">
                  <!--<label><input type="checkbox" value="" checked>Menerima Persyaratan Yang Berlaku</label>-->
                </div> 
               
                <!-- <input type="reset"  class="btn btn-info" value="Batal" name="edit"> -->
                </div>
              </div>
               <input type="submit" class="btn btn-info" value="Edit" name="edit">
                <a href="LandingPageDokter.php" class="btn btn info-border">Batal</a>
            </form>
          </div> 
        </div>
      </div>
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
