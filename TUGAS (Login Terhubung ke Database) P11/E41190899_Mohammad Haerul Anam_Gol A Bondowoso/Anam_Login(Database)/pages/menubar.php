<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
    <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
        <div class="navbar-header">
            <a class="navbar-brand" href="index.php">Akademik</a>
        </div>

        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
        </button>

        <ul class="nav navbar-right navbar-top-links">
            <li class="dropdown navbar-inverse">
            </li>
            <li class="dropdown">
                <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                    <i class="fa fa-user fa-fw"></i>  <?php echo $_SESSION['username'];?> ( <?php echo $_SESSION['level'];?> )<b class="caret"></b>
                </a>
                <ul class="dropdown-menu dropdown-user">
                    <li><a href="logout.php" onclick="return confirm('Apakah anda yakin ingin keluar ?')"><i class="fa fa-sign-out fa-fw"></i> Logout</a>
                    </li>
                </ul>
            </li>
        </ul>

        <!-- /.navbar-top-links -->

        <div class="navbar-default sidebar" role="navigation">
            <div class="sidebar-nav navbar-collapse">
                <ul class="nav" id="side-menu">
                             <li>
                                <a href="index.php"><i class="fa fa-table fa-fw"></i>DASHBOARD</a>
                            </li>
                            <li>
                                <a href="tabel_mahasiswa.php"><i class="fa fa-table fa-fw"></i>Data Mahasiswa</a>
                            </li>
                            <li>
                                <a href="tabel_dosen.php"><i class="fa fa-table fa-fw"></i>Data Dosen</a>
                            </li>
                            <li>
                                <a href="tabel_user.php"><i class="fa fa-table fa-fw"></i>Data User</a>
                            </li>
                </ul>
            </div>
        </div>
    </nav>
</body>
</html>