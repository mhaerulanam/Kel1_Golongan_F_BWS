<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dokternak.id-Dashboard</title>
    <style>
            .avatar{
                width: 30px;
                height: 30px;
                border-radius: 100%;
                background-color: black;
                border:1px solid white;
            }
            #logo{
                margin-left: 10%;
            }
    </style>
</head>
<body>
    
    <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
        <div class="navbar-header">
        <a href="Dashboard.php" class="logo"><img src="../assets/img/logo1.png" alt=""></a>
        </div>

        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
        </button>
        <ul class="nav navbar-right navbar-top-links">
            <li class="dropdown">
                <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                     <img src="foto/foto_admin.php?id_admin=<?php echo $_SESSION['id']; ?>" class="Avatar"
                        alt="fotoakun" height="35"></img>
                    <span><?php echo $_SESSION['nama'];?> <span> (</span><?php echo $_SESSION['id_role'];?>)</span>
                </a>
                <ul class="dropdown-menu dropdown-user">
                    <li><a href="logout.php" onclick="return confirm('Apakah anda yakin ingin keluar ?')"><i class="fa fa-sign-out fa-fw"></i> Keluar Akun</a>
                    </li>
                </ul>
            </li>
        </ul>

        <!-- /.navbar-top-links -->

        <div class="navbar-default sidebar" role="navigation">
            <div class="sidebar-nav navbar-collapse">
                <ul class="nav" id="side-menu">
                             <li>
                                <a href="Dashboard.php"><i class="fa fa-table fa-fw"> </i> DASHBOARD</a>
                            </li>
                            <li>
                                <a><i class="fa fa-table fa-fw"> </i> Data User</a>
                                <ul>
                                    <li><a href="tabel_useradmin.php">Data User Admin</a></li>
                                    <li><a href="tabel_userdokter.php">Data User Dokter</a></li>
                                    <li><a href="tabel_userpeternak.php">Data User Peternak</a></li>
                                </ul>
                            </li>
                            <li>
                                <a href="tabel_peternak.php"><i class="fa fa-table fa-fw"> </i> Data Peternak</a>
                            </li>
                            <li>
                                <a><i class="fa fa-table fa-fw"> </i> Data Dokter</a>
                                <ul>
                                <li><a href="tabel_dokter.php"> Data Dokter</a></li>
                                <li><a href="tabel_dokterpuskeswan.php"> Data Dokter Puskeswan</a></li>
                                </ul>
                            </li>
                            <li>
                                <a href="tabel_artikel.php"><i class="fa fa-table fa-fw"> </i> Data Artikel</a>
                            </li>
                            <li>
                                <a href="tabel_tutorial.php"><i class="fa fa-table fa-fw"> </i> Data Tutorial</a>
                            </li>
                            <li>
                                <a href="tabel_puskeswan.php"><i class="fa fa-table fa-fw"> </i> Data Puskeswan</a>
                            </li>
                            <li>
                                <a><i class="fa fa-table fa-fw"> </i> Data Dokumentasi</a>
                                <ul>
                                    <li><a href="tabel_dokumentasi.php">Data Dokumentasi</a></li>
                                    <li><a href="tabel_dokumentasipuskeswan.php">Data Dokumentasi Puskeswan</a></li>
                                </ul>
                            </li>
                            <li>
                                <a><i class="fa fa-table fa-fw"> </i> Data Konsultasi</a>
                                <ul>
                                    <li><a href="tabel_keluhan.php">Data Konsultasi</a></li>
                                    <li><a href="tabel_respon.php">Data Respon Konsultasi</a></li>
                                    <li><a href="tabel_riwayat.php">Data Riwayat Konsultasi</a></li>
                                </ul>
                            </li>
                            <li>
                                <a href="tabel_kritikdansaran.php"><i class="fa fa-table fa-fw"> </i> Kritik dan Saran</a>
                            </li>
                            
                </ul>
            </div>
        </div>
    </nav>
</body>
</html>