<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>Cari Mahasiswa</title>

  <!-- Custom fonts for this template-->
  <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

  <!-- Custom styles for this template-->
  <link href="css/sb-admin-2.min.css" rel="stylesheet">

</head>

<body id="page-top">

  <!-- Page Wrapper -->
  <div id="wrapper">

  <?php include "./sidebar.php" ?>
  

        <!-- Begin Page Content -->
        <div class="container-fluid">

          <div class="row">

          <!-- Area chart -->
          <div class="col-xl-12 col-lg-7">
            <div class="card shadow mb-4">
              <!-- Card Header - Dropdown -->
              <div class="card-header py-3 d-flex flex-row align-item-center justify-content-between">
                <a class="m-0 font-weight-bold text-primary" href="data_mahasiswa.php"> <= Kembali</a>
                <div class="dropdown no-arrow">
                  <a href="#" class="dropdown-toggle" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true"
                  aria-expanded="false">
                    <i class="fas fa-ellipsis-v fa-sm fa-fw text-gray-400"></i>
                  </a>
                </div>
              </div>
              <!-- Card Body-->
              <div class="card-body">
                
               <?php 
                include 'koneksi.php';
                ?>
                
                <h5>Form Pencarian</h5>

                <form class="form-inline mr-auto w-100 navbar-search" action="cari_mahasiswa.php">
                  <div class="input-group">
                    <input type="text" class="form-control bg-light border-0 small" name="cari" placeholder="Masukkan nama..." aria-label="Search" aria-describedby="basic-addon2">
                    <div class="input-group-append">
                      <button class="btn btn-primary" type="submit">
                        <i class="fas fa-search fa-sm"></i>
                      </button>
                      <button class="btn btn-primary" type="submit" onClick="document.location.reload(true)">Ulangi</button>
                    </div>
                  </div>
                </form>
                <br>
                
                <form action="cari-mahasiswa.php" method="get">
                <!-- <label>Cari :</label>
                <input type="text" name="cari" class="form-control bg-light border-0 small" placeholder="Masukkan Nama Mahasiswa">
                <input type="submit" value="Cari" class="btn btn-success">
                <input type="reset" value="Hapus" class="btn btn-success">
                </form> -->
                
                <?php 
                if(isset($_GET['cari'])){
                $cari = $_GET['cari'];
                echo "<b>Hasil pencarian : ".$cari."</b><br>";
                }
                ?>
                <br>
                
                <table class="table table-sm">
                <thead>
                <tr>
                  <th>No</th>
                  <th>NIM</th>
                  <th>Nama</th>
                  <th>Tempat Lahir</th>
                  <th>Tgl Lahir</th>
                  <th>Jenis Kelamin</th>
                  <th>Prodi</th>
                  <th>Telpon</th>
                  <th>Alamat</th>
                </tr>
                </thead>
                
                <?php 
                
                if(isset($_GET['cari'])){
                    $cari = $_GET['cari'];
                    $data = mysqli_query($koneksi,"select * from mahasiswa where nama like '%".$cari."%'");    
                }else{
                  $data = mysqli_query($koneksi,"select * from mahasiswa");  
                }
                $no = 1;
                while($d = mysqli_fetch_array($data)){
                ?>
                <tr>
                  <td><?php echo $no++; ?></td>
                  <td><?php echo $d['nim']; ?></td>
                  <td><?php echo $d['nama']; ?></td>
                  <td><?php echo $d['tempat_lahir']; ?></td>
                  <td><?php echo $d['tgllahir']; ?></td>
                  <td><?php echo $d['jenis_kelamin']; ?></td>
                  <td><?php echo $d['prodi']; ?></td>
                  <td><?php echo $d['telpon']; ?></td>
                  <td><?php echo $d['alamat']; ?></td>
                <?php } ?>
                </table>
                  

                </form>
              </div>
            </div>
          </div>
          <!-- Pie Chart -->
        </div>
      </div>
      <!-- /.container-fluid -->              

      </div>
      <!-- End of Main Content -->

      <!-- Footer -->
      <footer class="sticky-footer bg-white">
        <div class="container my-auto">
          <div class="copyright text-center my-auto">
            <span>Copyright &copy; Your Website 2020</span>
          </div>
        </div>
      </footer>
      <!-- End of Footer -->

    </div>
    <!-- End of Content Wrapper -->

  </div>
  <!-- End of Page Wrapper -->

  <!-- Scroll to Top Button-->
  <a class="scroll-to-top rounded" href="#page-top">
    <i class="fas fa-angle-up"></i>
  </a>

  <!-- Logout Modal-->
  <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
          <button class="close" type="button" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">×</span>
          </button>
        </div>
        <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
        <div class="modal-footer">
          <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
          <a class="btn btn-primary" href="login.php">Logout</a>
        </div>
      </div>
    </div>
  </div>

  <!-- Bootstrap core JavaScript-->
  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  <!-- Core plugin JavaScript-->
  <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

  <!-- Custom scripts for all pages-->
  <script src="js/sb-admin-2.min.js"></script>

  <!-- Page level plugins -->
  <script src="vendor/chart.js/Chart.min.js"></script>

  <!-- Page level custom scripts -->
  <script src="js/demo/chart-area-demo.js"></script>
  <script src="js/demo/chart-pie-demo.js"></script>

</body>

</html>
