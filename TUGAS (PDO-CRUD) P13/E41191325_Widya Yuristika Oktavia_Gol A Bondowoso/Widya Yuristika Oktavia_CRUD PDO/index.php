<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PDO MySQL - Widya Yuristika Oktavia</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <style>
        .container {
            margin-top: 50px;
        }
    </style>
</head>
<body>
<?php
// print_r(PDO::getAvailableDrivers());

include('library.php');
$lib = new Library();
$data_mk = $lib->show();
 
if(isset($_GET['hapus_mk']))
{
    $kode_mk = $_GET['hapus_mk'];
    $status_hapus = $lib->delete($kode_mk);
    if($status_hapus)
    {
        header('Location: index.php');
    }
}
?>
    <div class="container">
        <div class="card">
            <div class="card-header">
                <center><b><h3>Data Matakuliah</h3></b></center>
                <center><h5>Widya Yuristika Oktavia - E41191325</h5></center>
            </div>
            <div class="card-body">
                <a href="tambah.php" class="btn btn-success">Tambah</a>
                <hr/>
                <table class="table table-bordered" width="60%">
                    <thead class="thead-dark">
                        <th>No</th>
                        <th>Kode Matakuliah</th>
                        <th>Nama Matakuliah</th>
                        <th>SKS</th>
                        <th>Semester</th>
                        <th>Action</th>
                        
                    </thead>
                    <?php 
                    $no = 1;
                    foreach($data_mk as $row)
                    {
                        echo "<tr>";
                        echo "<td>".$no."</td>";
                        echo "<td>".$row['kode_mk']."</td>";
                        echo "<td>".$row['nama_mk']."</td>";
                        echo "<td>".$row['SKS']."</td>";
                        echo "<td>".$row['semester']."</td>";
                        echo "<td><a class='btn btn-info' href='edit.php?kode_mk=".$row['kode_mk']."'>Update</a>
                        <a class='btn btn-danger' href='index.php?hapus_mk=".$row['kode_mk']."'>Hapus</a></td>";
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