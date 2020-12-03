<?php
// Start the session
session_start();

if (!isset($_SESSION["username"])) {
	echo "Anda harus login dulu <br><a href='login.php'>Klik disini</a>";
	exit;
}
$level=$_SESSION["level"];
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="description" content="">
        <meta name="author" content="">

        <title>Admin Mohammad Haerul Anam</title>

        <!-- Bootstrap Core CSS -->
        <link href="../css/bootstrap.min.css" rel="stylesheet">

        <!-- MetisMenu CSS -->
        <link href="../css/metisMenu.min.css" rel="stylesheet">

        <!-- Timeline CSS -->
        <link href="../css/timeline.css" rel="stylesheet">

        <!-- Custom CSS -->
        <link href="../css/startmin.css" rel="stylesheet">

        <!-- Morris Charts CSS -->
        <link href="../css/morris.css" rel="stylesheet">

        <!-- Custom Fonts -->
        <link href="../css/font-awesome.min.css" rel="stylesheet" type="text/css">
    </head>
    <body>

        <div id="wrapper">

            <?php 
            include "menubar.php";
            include 'koneksi.php';
                // mengambil data dosen
                $dosen = mysqli_query($mysqli,"SELECT * FROM dosen");
                 
                // menghitung data dosen
                $data_dosen = mysqli_num_rows($dosen);

                // mengambil data user
                $users = mysqli_query($mysqli,"SELECT * FROM user");
                 
                // menghitung data user
                $data_user = mysqli_num_rows($users);
                // mengambil data mahasiswa
                $mhs = mysqli_query($mysqli,"SELECT * FROM mahasiswa");
                 
                // menghitung data barang
                $data_mhs = mysqli_num_rows($mhs);
            ?>
            <div id="page-wrapper">
                <div class="container-fluid">
                    <div class="row">
                    <div class="col-lg-12">
                   
                    <h1 class="page-header">Dashboard</h1>
                         <?php
                            if (isset($_GET['pesan'])){
                            $pesan = $_GET['pesan'];
                                if ($pesan == 'berhasil') {
                        ?>
                                <div class="alert alert-success">
                                    <strong>Success! </strong>Selamat <?php echo $_SESSION['username'];?>, Anda berhasil login Sebagai <?php echo $_SESSION['level'];?> 
                                </div>
                        <?php
                            }
                        }
                        ?>
                        <!-- /.col-lg-12 -->
                    </div>
                    <!-- /.row -->
                    <div class="row">
                        <div class="col-lg-3 col-md-6">
                            <div class="panel panel-primary">
                                <div class="panel-heading">
                                    <div class="row">
                                        <div class="col-xs-3">
                                            <i class="fa fa-tasks fa-5x"></i>
                                        </div>
                                        <div class="col-xs-9 text-right">
                                            <div class="huge"><?php echo $data_mhs;?></div>
                                            <div>Data Mahasiswa</div>
                                        </div>
                                    </div>
                                </div>
                                <a href="tabel_mahasiswa.php">
                                    <div class="panel-footer">
                                        <span class="pull-left">View Details</span>
                                        <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>

                                        <div class="clearfix"></div>
                                    </div>
                                </a>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6">
                            <div class="panel panel-yellow">
                                <div class="panel-heading">
                                    <div class="row">
                                        <div class="col-xs-3">
                                            <i class="fa fa-tasks fa-5x"></i>
                                        </div>
                                        <div class="col-xs-9 text-right">
                                            <div class="huge"><?php echo $data_dosen;?></div>
                                            <div>Data Dosen</div>
                                        </div>
                                    </div>
                                </div>
                                <a href="tabel_dosen.php">
                                    <div class="panel-footer">
                                        <span class="pull-left">View Details</span>
                                        <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>

                                        <div class="clearfix"></div>
                                    </div>
                                </a>
                            </div>
                        </div>
                        
                        <div class="col-lg-3 col-md-6">
                            <div class="panel panel-red">
                                <div class="panel-heading">
                                    <div class="row">
                                        <div class="col-xs-3">
                                            <i class="fa fa-tasks fa-5x"></i>
                                        </div>
                                        <div class="col-xs-9 text-right">
                                            <div class="huge"><?php echo $data_user;?></div>
                                            <div>Data User</div>
                                        </div>
                                    </div>
                                </div>
                                <a href="tabel_user.php">
                                    <div class="panel-footer">
                                        <span class="pull-left">View Details</span>
                                        <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>

                                        <div class="clearfix"></div>
                                    </div>
                                </a>
                            </div>
                        </div>
                        
                    </div>
                </div>
                <!-- /.container-fluid -->
            </div>
            <!-- /#page-wrapper -->

        </div>
        <!-- /#wrapper -->

        <!-- jQuery -->
        <script src="../js/jquery.min.js"></script>

        <!-- Bootstrap Core JavaScript -->
        <script src="../js/bootstrap.min.js"></script>

        <!-- Metis Menu Plugin JavaScript -->
        <script src="../js/metisMenu.min.js"></script>

        <!-- Morris Charts JavaScript -->
        <script src="../js/raphael.min.js"></script>
        <script src="../js/morris.min.js"></script>
        <script src="../js/morris-data.js"></script>

        <!-- Custom Theme JavaScript -->
        <script src="../js/startmin.js"></script>

    </body>
</html>
