<?php
//Koneksi
include 'koneksi.php';

//Ambil data dari tabel mahasiswa
$result = mysqli_query($koneksi,"SELECT * FROM dokter");

//ambil data (fetch) mahasiswa dari object $result
//mysqli_fetch_row() = mengembalikan array numerik
//mysqli_fetch_assoc() = mengembalikan array asosisatif
//mysqli_fetch_array() = mengembalikan dengan keduanya (numerik dan asosiatif)
//mysqli_fetch_object() =

// while ($mhs = mysqli_fetch_assoc($result)){ 
// var_dump($mhs["nama"]);
// }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Halaman Admin</title>
</head>
<body>
    <h1>Daftar Mahasiswa</h1>

    <table border="1" cellpadding="10" cellspacing="1">

    <tr>
        <th>No.</th>
        <th>Nama</th>
        <th>Foto</th>
        <th>Jenis Kelamin</th>
        <th>Daerah Bekerja</th>
        <th>No Telepon</th>
        <th>Jam Kerja</th>
        <th>Alamat</th>
        <th>Jabatan</th>
        <th>Sertifikat</th>
    <tr>
    <?php $i = 1 ?>
    <?php while ($row = mysqli_fetch_assoc($result) ) : ?>
    <tr>
        <td><?php echo $i  ?></td>
        <td><?php echo $row["nama"] ?></td>
        <td><img src="gambar_dokter_hewan.php?id_dokter=<?php echo $row['id_dokter']; ?>" alt="Image" width="80"/></td>
        <td><?php echo $row["jenis_kelamin"]?></td>
        <td><?php echo $row["tempat"]?></td>
        <td><?php echo $row["telpon"]?></td>
        <td><?php echo $row["jadwal_kerja"]?></td>
        <td><?php echo $row["alamat"]?></td>
        <td><?php echo $row["id_jabatan"]?></td>
        <td><?php echo $row["sertifikasi"]?></td>
    </tr>
    <?php $i++; ?>
    <?php endwhile; ?>

    </table>
</body>
</html>