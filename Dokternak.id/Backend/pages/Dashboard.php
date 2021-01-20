<?php
// Start the session
session_start();

if (!isset($_SESSION["username"])) {
	echo "Anda harus login dulu <br><a href='login.php'>Klik disini</a>";
	exit;
}
// $level=$_SESSION["level"];
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="description" content="">
        <meta name="author" content="">

        <title>Dokternak.id-Dashboard</title>

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

        <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/html5shiv/3.7.3/html5shiv.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/respond.js/1.4.2/respond.min.js"></script>
        <![endif]-->
    </head>
    <body>

        <div id="wrapper">

            <?php 
            include "navbar.php";
            include 'koneksi.php';
                // mengambil data user
                $a = mysqli_query($koneksi,"SELECT * FROM tutorial");
                 
                // menghitung data user
                $data_tutorial = mysqli_num_rows($a);

                // mengambil data dokter
                $b = mysqli_query($koneksi,"SELECT * FROM dokter");
                 
                // menghitung data dokter
                $data_dokter = mysqli_num_rows($b);

                // mengambil data Peternak
                $c = mysqli_query($koneksi,"SELECT * FROM peternak");
                 
                // menghitung data Peternak
                $data_peternak = mysqli_num_rows($c);

                 // mengambil data Artikel
                 $d = mysqli_query($koneksi,"SELECT * FROM artikel");
                 
                 // menghitung data Peternak
                 $data_artikel = mysqli_num_rows($d);

                // mengambil data Puskeswan
                $e = mysqli_query($koneksi,"SELECT * FROM puskeswan");
                 
                // menghitung data Puskeswan
                $data_puskeswan = mysqli_num_rows($e);

                // mengambil data User Admin
                $f = mysqli_query($koneksi,"SELECT * FROM admin,user where admin.id_user=user.id_user order by admin.id_admin");
                 
                // menghitung data User Admin
                $data_useradmin = mysqli_num_rows($f);

                // mengambil data User Dokter
                $g = mysqli_query($koneksi,"SELECT * FROM dokter_user, dokter, user  where  dokter_user.id_user=user.id_user and  dokter_user.id_dokter=dokter.id_dokter  order by  dokter_user.id_dokteruser");
                 
                // menghitung data User Dokter
                $data_userdokter = mysqli_num_rows($g);

                // mengambil data User Peternak
                $h = mysqli_query($koneksi,"SELECT * FROM peternak,user where peternak.id_user=user.id_user order by peternak.id_peternak");
                 
                // menghitung data Peternak
                $data_userpeternak = mysqli_num_rows($h);

                // mengambil data Dokumentasi
                $i = mysqli_query($koneksi,"SELECT * FROM dokumentasi");
                 
                // menghitung data Dokumentasi
                $data_dokumentasi = mysqli_num_rows($i);
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
                                            <div class="huge"><?php echo $data_dokter;?></div>
                                            <div>Data Dokter</div>
                                        </div>
                                    </div>
                                </div>
                                <a href="tabel_dokter.php">
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
                                            <div class="huge"><?php echo $data_peternak;?></div>
                                            <div>Data Peternak</div>
                                        </div>
                                    </div>
                                </div>
                                <a href="tabel_peternak.php">
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
                                            <div class="huge"><?php echo $data_tutorial;?></div>
                                            <div>Data Tutorial</div>
                                        </div>
                                    </div>
                                </div>
                                <a href="tabel_tutorial.php">
                                    <div class="panel-footer">
                                        <span class="pull-left">View Details</span>
                                        <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>

                                        <div class="clearfix"></div>
                                    </div>
                                </a>
                            </div>
                        </div>

                        <div class="col-lg-3 col-md-6">
                            <div class="panel panel-green">
                                <div class="panel-heading">
                                    <div class="row">
                                        <div class="col-xs-3">
                                            <i class="fa fa-tasks fa-5x"></i>
                                        </div>
                                        <div class="col-xs-9 text-right">
                                            <div class="huge"><?php echo $data_artikel;?></div>
                                            <div>Data Artikel</div>
                                        </div>
                                    </div>
                                </div>
                                <a href="tabel_artikel.php">
                                    <div class="panel-footer">
                                        <span class="pull-left">View Details</span>
                                        <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>

                                        <div class="clearfix"></div>
                                    </div>
                                </a>
                            </div>
                        </div>

                        <div class="col-lg-3 col-md-6">
                            <div class="panel panel-primary">
                                <div class="panel-heading">
                                    <div class="row">
                                        <div class="col-xs-3">
                                            <i class="fa fa-tasks fa-5x"></i>
                                        </div>
                                        <div class="col-xs-9 text-right">
                                            <div class="huge"><?php echo $data_puskeswan;?></div>
                                            <div>Data Puskeswan</div>
                                        </div>
                                    </div>
                                </div>
                                <a href="tabel_puskeswan.php">
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
                                            <div class="huge"><?php echo $data_useradmin;?></div>
                                            <div>Data User Admin</div>
                                        </div>
                                    </div>
                                </div>
                                <a href="tabel_useradmin.php">
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
                                            <div class="huge"><?php echo $data_userdokter;?></div>
                                            <div>Data User Dokter</div>
                                        </div>
                                    </div>
                                </div>
                                <a href="tabel_userdokter.php">
                                    <div class="panel-footer">
                                        <span class="pull-left">View Details</span>
                                        <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>

                                        <div class="clearfix"></div>
                                    </div>
                                </a>
                            </div>
                        </div>

                        <div class="col-lg-3 col-md-6">
                            <div class="panel panel-green">
                                <div class="panel-heading">
                                    <div class="row">
                                        <div class="col-xs-3">
                                            <i class="fa fa-tasks fa-5x"></i>
                                        </div>
                                        <div class="col-xs-9 text-right">
                                            <div class="huge"><?php echo $data_userpeternak;?></div>
                                            <div>Data User Peternak</div>
                                        </div>
                                    </div>
                                </div>
                                <a href="tabel_userpeternak.php">
                                    <div class="panel-footer">
                                        <span class="pull-left">View Details</span>
                                        <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>

                                        <div class="clearfix"></div>
                                    </div>
                                </a>
                            </div>
                        </div>

                        <div class="col-lg-3 col-md-6">
                            <div class="panel panel-primary">
                                <div class="panel-heading">
                                    <div class="row">
                                        <div class="col-xs-3">
                                            <i class="fa fa-tasks fa-5x"></i>
                                        </div>
                                        <div class="col-xs-9 text-right">
                                            <div class="huge"><?php echo $data_dokumentasi;?></div>
                                            <div>Data Dokumentasi</div>
                                        </div>
                                    </div>
                                </div>
                                <a href="tabel_dokumentasi.php">
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
