<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Membuat SRUD dengan PHP dan MYSQL - Menampilkan data dari Database (Anam)</title>
    <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
    <div class="judul">
        <h1>Membuat CRUD dengan PHP dan MYSQL</h1>
        <h2>Menampilkan data dari Database</h2>
    </div>
    <br>
    <?php
    if (isset($_GET['pesan'])){
        $pesan = $_GET['pesan'];
        if ($pesan == "input"){
            echo "<script>alert('Data berhasil di simpan');</script>";
        } elseif ($pesan == "update"){
            echo "<script>alert('Data berhasil di update');</script>";
        } elseif ($pesan == "hapus"){
            echo "<script>alert('Data berhasil di hapus');</script>";
        }
    }
    ?>
    <br>
    <div class="box">
    <a href="input.php" class="tombol"> ++ Tambah Data Baru</a>

    <h3>Data User</h3>
    <table  class="table">
        <tr>
            <th>No</th>
            <th>Nama</th>
            <th>Alamat</th>
            <th>Pekerjaan</th>
            <th>Opsi</th>
        </tr>
        <?php
        include "koneksi.php";
        $query_mysql = mysqli_query($koneksi, "SELECT * FROM user");
        $nomor = 1;
        while ($data = mysqli_fetch_array($query_mysql)){
        ?>
            <tr>
                <td><?php echo $nomor++; ?></td>
                <td><?php echo $data['nama']; ?></td>
                <td><?php echo $data['alamat']; ?></td>
                <td><?php echo $data['pekerjaan']; ?></td>
                <td>
                    <a href="edit.php?id=<?php echo $data['id']; ?>" class="edit">Edit</a>
                    <a href="hapus.php?id=<?php echo $data['id']; ?>" class="edit">Hapus</a>
                </td>
            </tr>
            <?php
        }
        ?>

    </table>
    </div>
</body>
</html>