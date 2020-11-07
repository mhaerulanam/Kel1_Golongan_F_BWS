<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>SB Admin 2 - Dashboard</title>

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

    <!-- Content Wrapper -->
    <div id="content-wrapper" class="d-flex flex-column">

      <!-- Main Content -->
      <div id="content">

        <!-- Topbar -->
        <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">

          <!-- Sidebar Toggle (Topbar) -->
          <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
            <i class="fa fa-bars"></i>
          </button>

          <!-- Topbar Search -->
          <form class="d-none d-sm-inline-block form-inline mr-auto ml-md-3 my-2 my-md-0 mw-100 navbar-search">
            <div class="input-group">
              <input type="text" class="form-control bg-light border-0 small" placeholder="Search for..." aria-label="Search" aria-describedby="basic-addon2">
              <div class="input-group-append">
                <button class="btn btn-primary" type="button">
                  <i class="fas fa-search fa-sm"></i>
                </button>
              </div>
            </div>
          </form>

          <!-- Topbar Navbar -->
          <ul class="navbar-nav ml-auto">

            <!-- Nav Item - Search Dropdown (Visible Only XS) -->
            <li class="nav-item dropdown no-arrow d-sm-none">
              <a class="nav-link dropdown-toggle" href="#" id="searchDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <i class="fas fa-search fa-fw"></i>
              </a>
              <!-- Dropdown - Messages -->
              <div class="dropdown-menu dropdown-menu-right p-3 shadow animated--grow-in" aria-labelledby="searchDropdown">
                <form class="form-inline mr-auto w-100 navbar-search">
                  <div class="input-group">
                    <input type="text" class="form-control bg-light border-0 small" placeholder="Search for..." aria-label="Search" aria-describedby="basic-addon2">
                    <div class="input-group-append">
                      <button class="btn btn-primary" type="button">
                        <i class="fas fa-search fa-sm"></i>
                      </button>
                    </div>
                  </div>
                </form>
              </div>
            </li>

            <!-- Nav Item - Alerts -->
            <li class="nav-item dropdown no-arrow mx-1">
              <a class="nav-link dropdown-toggle" href="#" id="alertsDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <i class="fas fa-bell fa-fw"></i>
                <!-- Counter - Alerts -->
                <span class="badge badge-danger badge-counter">3+</span>
              </a>
              <!-- Dropdown - Alerts -->
              <div class="dropdown-list dropdown-menu dropdown-menu-right shadow animated--grow-in" aria-labelledby="alertsDropdown">
                <h6 class="dropdown-header">
                  Alerts Center
                </h6>
                <a class="dropdown-item d-flex align-items-center" href="#">
                  <div class="mr-3">
                    <div class="icon-circle bg-primary">
                      <i class="fas fa-file-alt text-white"></i>
                    </div>
                  </div>
                  <div>
                    <div class="small text-gray-500">December 12, 2019</div>
                    <span class="font-weight-bold">A new monthly report is ready to download!</span>
                  </div>
                </a>
                <a class="dropdown-item d-flex align-items-center" href="#">
                  <div class="mr-3">
                    <div class="icon-circle bg-success">
                      <i class="fas fa-donate text-white"></i>
                    </div>
                  </div>
                  <div>
                    <div class="small text-gray-500">December 7, 2019</div>
                    $290.29 has been deposited into your account!
                  </div>
                </a>
                <a class="dropdown-item d-flex align-items-center" href="#">
                  <div class="mr-3">
                    <div class="icon-circle bg-warning">
                      <i class="fas fa-exclamation-triangle text-white"></i>
                    </div>
                  </div>
                  <div>
                    <div class="small text-gray-500">December 2, 2019</div>
                    Spending Alert: We've noticed unusually high spending for your account.
                  </div>
                </a>
                <a class="dropdown-item text-center small text-gray-500" href="#">Show All Alerts</a>
              </div>
            </li>

            <!-- Nav Item - Messages -->
            <li class="nav-item dropdown no-arrow mx-1">
              <a class="nav-link dropdown-toggle" href="#" id="messagesDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <i class="fas fa-envelope fa-fw"></i>
                <!-- Counter - Messages -->
                <span class="badge badge-danger badge-counter">7</span>
              </a>
              <!-- Dropdown - Messages -->
              <div class="dropdown-list dropdown-menu dropdown-menu-right shadow animated--grow-in" aria-labelledby="messagesDropdown">
                <h6 class="dropdown-header">
                  Message Center
                </h6>
                <a class="dropdown-item d-flex align-items-center" href="#">
                  <div class="dropdown-list-image mr-3">
                    <img class="rounded-circle" src="https://source.unsplash.com/fn_BT9fwg_E/60x60" alt="">
                    <div class="status-indicator bg-success"></div>
                  </div>
                  <div class="font-weight-bold">
                    <div class="text-truncate">Hi there! I am wondering if you can help me with a problem I've been having.</div>
                    <div class="small text-gray-500">Emily Fowler · 58m</div>
                  </div>
                </a>
                <a class="dropdown-item d-flex align-items-center" href="#">
                  <div class="dropdown-list-image mr-3">
                    <img class="rounded-circle" src="https://source.unsplash.com/AU4VPcFN4LE/60x60" alt="">
                    <div class="status-indicator"></div>
                  </div>
                  <div>
                    <div class="text-truncate">I have the photos that you ordered last month, how would you like them sent to you?</div>
                    <div class="small text-gray-500">Jae Chun · 1d</div>
                  </div>
                </a>
                <a class="dropdown-item d-flex align-items-center" href="#">
                  <div class="dropdown-list-image mr-3">
                    <img class="rounded-circle" src="https://source.unsplash.com/CS2uCrpNzJY/60x60" alt="">
                    <div class="status-indicator bg-warning"></div>
                  </div>
                  <div>
                    <div class="text-truncate">Last month's report looks great, I am very happy with the progress so far, keep up the good work!</div>
                    <div class="small text-gray-500">Morgan Alvarez · 2d</div>
                  </div>
                </a>
                <a class="dropdown-item d-flex align-items-center" href="#">
                  <div class="dropdown-list-image mr-3">
                    <img class="rounded-circle" src="https://source.unsplash.com/Mv9hjnEUHR4/60x60" alt="">
                    <div class="status-indicator bg-success"></div>
                  </div>
                  <div>
                    <div class="text-truncate">Am I a good boy? The reason I ask is because someone told me that people say this to all dogs, even if they aren't good...</div>
                    <div class="small text-gray-500">Chicken the Dog · 2w</div>
                  </div>
                </a>
                <a class="dropdown-item text-center small text-gray-500" href="#">Read More Messages</a>
              </div>
            </li>

            <div class="topbar-divider d-none d-sm-block"></div>

            <!-- Nav Item - User Information -->
            <li class="nav-item dropdown no-arrow">
              <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <span class="mr-2 d-none d-lg-inline text-gray-600 small">velina luna</span>
                <img class="img-profile rounded-circle" src="https://source.unsplash.com/QAB-WJcbgJk/60x60">
              </a>
              <!-- Dropdown - User Information -->
              <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in" aria-labelledby="userDropdown">
                <a class="dropdown-item" href="#">
                  <i class="fas fa-user fa-sm fa-fw mr-2 text-gray-400"></i>
                  Profile
                </a>
                <a class="dropdown-item" href="#">
                  <i class="fas fa-cogs fa-sm fa-fw mr-2 text-gray-400"></i>
                  Settings
                </a>
                <a class="dropdown-item" href="#">
                  <i class="fas fa-list fa-sm fa-fw mr-2 text-gray-400"></i>
                  Activity Log
                </a>
                <div class="dropdown-divider"></div>
                <a class="dropdown-item" href="#" data-toggle="modal" data-target="#logoutModal">
                  <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                  Logout
                </a>
              </div>
            </li>

          </ul>

        </nav>
        <!-- End of Topbar -->

      <!-- Begin page content -->
      <div class="container-fluid">
        
        <!-- Page Heading -->
        <div class="d-sm-flex align-items-center justify-content-between mb-4">
          <h1 class="h3 mb-0 text-gray-800">DATA MAHASISWA</h1>
        </div>

        <!-- Content Row -->
        <div class="row">

          <!-- Area chart -->
          <div class="col-xl-12 col-lg-7">
            <div class="card shadow mb-4">
              <!-- Card Header Dropdown -->
              <div class="card-header py-3 d-flex flex-row align-item-center justify-content-between">
                <h6 class="m-0 font-weight-bold text-primary">Input Data</h6>
                <div class="dropdown no-arrow">
                  <a href="#" class="dropdown-toggle" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true"
                  aria-expanded="false">
                    <i class="fas fa-ellipsis-v fa-sm fa-fw text-gray-400"></i>
                  </a>
                </div>
              </div>

              <div class="card-body">
                <!-- <form action=""> -->
                <form method="post" >
                    <div class="form-group">
                    <tr><td>NIM :</td><td>
                        <input type="text" name="nim" id="nim" class="form-control form-control-user" placeholder="masukkan nim Anda" required>
                    </div>
                    <div class="form-group">
                    <tr><td>Nama :</td><td>
                        <input type="text" name="name" id="name" class="form-control form-control-user" placeholder="masukkan nama Anda" required>
                    </div>
                    <div class="form-group">
                    <tr><td>Jenis Kelamin :</td><td>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="radioOption" id="radioOption1" value="Laki-laki">
                            <label class="form-check-label" for="inlineRadio1">Laki-laki</label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="radioOption" id="radioOption2" value="Perempuan">
                            <label class="form-check-label" for="inlineRadio2">Perempuan</label>
                        </div>
                    <div class="form-group">
                    <tr><td>Tempat Lahir :</td><td>
                    <input type="text" name="tempatlahir" id="tempatlahir" class="form-control form-control-user" placeholder="masukkan tempat lahir anda" required>
                    </div>
                    <div class="form-group">
                    <tr>
                        <td>Tanggal Lahir :</td>
                        <td><input type="date" name="tgl" id="tgl" class="form-control form-control-user" placeholder="masukkan tanggal lahir anda" required></td>

                    </div>
                    <div class="form-group">
                    <tr><td>Jurusan :</td><td>
                        <select class="form-control" name="jurusan">
                            <option value="Teknik Informatika">Teknik Informatika</option>
                            <option value="Sistem Informasi">Sistem Informasi</option>
                            <option value="Teknik Komputer dan Jaringan">Teknik Komputer dan Jaringan</option>
                        </select>
                    </td></tr>
                    </div>
                    <div class="form-group">
                    <tr><td>Agama :</td><td>
                        <select class="form-control" name="selectagama">
                            <option value="Islam">Islam</option>
                            <option value="Kristen">Kristen</option>
                            <option value="Khatolik">Khatolik</option>
                        </select>
                    </div>
                    <div class="form-group">
                                <tr><td>Tahun Masuk :</td><td>
                        <select name="thnmsk" size="1" id="thnmsk">
                        <?php
                        for ($i=2000;$i<=2020;$i++)
                        {
                        echo "<option value=".$i.">".$i."</option>";
                        }
                        ?>
                        </select></td></tr>
                    </div>
                    <div class="form-group-row">
                        <button type="submit" class="btn btn-success" value ="Tambah" name="submit">Tambah</button>
                    </div>
                
                </form>
                <?php
                
                  $nim = $_POST['nim'];
                  $name = $_POST['name'];
                  $jk = $_POST['radioOption'];
                  $tl = $_POST['tempatlahir'];
                  $tgl = $_POST['tgl'];
                  $jurusan = $_POST['jurusan'];
                  $agama = $_POST['selectagama'];
                  $thnmsk = $_POST['thnmsk'];
                  if($nim){
                    echo "<br><br><strong>NIM: </strong> {$nim} <br>";
                  }
                  
                  if($name){
                    echo "<strong>Nama: </strong> {$name} <br>";
                  }

                  if($jk){
                    echo "<strong>Jenis Kelamin: </strong> {$jk} <br>";
                  }

                  if($tl){
                    echo "<strong>Tempat Lahir: </strong> {$tl} <br>";
                  }

                  if($tgl){
                    echo "<strong>Tanggal Lahir: </strong> {$tgl} <br>";
                  }

                  if($jurusan){
                    echo "<strong>Jurusan: </strong> {$jurusan} <br>";
                  }

                  if($agama){
                    echo "<strong>Agama: </strong> {$agama} <br>";
                  }
                  if($thnmsk){
                    echo "<strong>Tahun Masuk: </strong> {$thnmsk} <br>";
                  }

                  include "koneksi.php";
                  // $query="INSERT INTO data_mahasiswa SET  nim='$nim',nama='$name',jenis_kelamin='$jk',tempat_lahir='$tl',tanggal_lahir='$tgl',jurusan='$jurusan',agama='$agama',tahun_masuk='$thnmsk";
                  $result = mysqli_query($koneksi,"INSERT INTO data_mahasiswa VALUES('$nim','$name','$jk','$tl','$tgl','$jurusan','$agama','$thnmsk')"); //di smaain
 

// header("location:query.php");
              if($result){
                echo "<script>alert('Data yang anda Input SUKSES');</script>";
              }else{
                echo "<script>alert('Data yang anda Input GAGAL!!!!!');</script>";
              }
 

                  ?> 
              </div>
            </div>
          </div>
        </div>

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
          <a class="btn btn-primary" href="login.html">Logout</a>
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