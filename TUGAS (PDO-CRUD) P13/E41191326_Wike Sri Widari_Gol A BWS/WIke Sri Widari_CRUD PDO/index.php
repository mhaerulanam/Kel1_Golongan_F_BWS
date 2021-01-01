<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PDO MySQL - Wike Sri Widari</title>
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
$data_brg = $lib->show();
 
if(isset($_GET['hapus_barang']))
{
    $kd_barang = $_GET['hapus_barang'];
    $status_hapus = $lib->delete($kd_barang);
    if($status_hapus)
    {
        header('Location: index.php');
    }
}
?>
    <div class="container">
        <div class="card">
            <div class="card-header">
                <center><h3>Data Barang <b>(Wike Sri Widari)</b></h3></center>
            </div>
            <div class="card-body">
                <a href="tambah.php" class="btn btn-success">Tambah</a>
                <hr/>
                <table class="table table-bordered" width="60%">
                    <thead class="thead-dark">
                        <th>No</th>
                        <th>KD Barang</th>
                        <th>Nama Barang</th>
                        <th>Satuan Barang</th>
                        <th>Stok</th>
                        <th>Harga</th>
                        <th>Action</th>
                    </thead>
                    <?php 
                    $no = 1;
                    foreach($data_brg as $row)
                    {
                        echo "<tr>";
                        echo "<td>".$no."</td>";
                        echo "<td>".$row['kd_barang']."</td>";
                        echo "<td>".$row['nama_barang']."</td>";
                        echo "<td>".$row['satuan_barang']."</td>";
                        echo "<td>".$row['stok_barang']."</td>";
                        echo "<td>".$row['harga_barang']."</td>";
                        echo "<td><a class='btn btn-info' href='edit.php?kd_barang=".$row['kd_barang']."'>Update</a>
                        <a class='btn btn-danger' href='index.php?hapus_barang=".$row['kd_barang']."'>Hapus</a></td>";
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