<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PDO MySQL - Mohammad Haerul Anam</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <style type="text/css">
        .container {
            margin-top: 50px;
        }
    </style>
</head>
<body>
<?php

include('library.php');
$lib = new Library();
$data_siswa = $lib->show();
 
if(isset($_GET['hapus_mahasiswa']))
{
    $nim = $_GET['hapus_mahasiswa'];
    $status_hapus = $lib->delete($nim);
    if($status_hapus)
    {
        header('Location: index.php');
    }
}
?>
    <div class="container">
        <div class="card">
            <div class="card-header">
                <center><b><h3>Data Mahasiswa</h3></b></center>
                <center><h5>Defi Tamara - E41190942</h5></center>
            </div>
            <div class="card-body">
                <a href="tambah-data.php" class="btn btn-success">Tambah Data</a>
                <hr/>
                <table class="table table-bordered table-striped" width="60%">
                    <thead class="thead-dark" align="center">
                        <th>No</th>
                        <th>NIM</th>
                        <th>Nama Lengkap</th>
                        <th>Prodi</th>
                        <th>Alamat</th>
                        <th>Action</th>
                    </thead>
                    <?php 
                    $no = 1;
                    foreach($data_siswa as $row)
                    {
                        echo "<tr>";
                        echo "<td>".$no."</td>";
                        echo "<td>".$row['nim']."</td>";
                        echo "<td>".$row['nama_mhs']."</td>";
                        echo "<td>".$row['prodi']."</td>";
                        echo "<td>".$row['alamat']."</td>";
                        echo "<td><a class='btn btn-info' href='edit-data.php?nim=".$row['nim']."'>Edit</a>
                        <a class='btn btn-danger' href='index.php?hapus_mahasiswa=".$row['nim']."'>Hapus</a></td>";
                        echo "</tr>";
                        $no++;
                    }
                    ?>
                </table>
            </div>
        </div>
    </div>
</body>
</html>