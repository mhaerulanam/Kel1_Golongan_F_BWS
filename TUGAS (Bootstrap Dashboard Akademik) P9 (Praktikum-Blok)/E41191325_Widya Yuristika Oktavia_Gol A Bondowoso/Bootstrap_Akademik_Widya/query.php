<?php
include "koneksi.php";
?>
 
<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
  <title>Data Mahasiswa</title>
   <!-- <link href="css/bootstrap.min.css" rel="stylesheet"> -->
</head>
<body>
 
<h1>Menampilkan Database Mahasiswa</h1>
 
<!-- <p>Menampilkan isi database Mahasiswa </p> -->
<a href="datamahasiswa.php">Input Data Mahasiswa Baru</a><br>
 
<!-- <table class="table table-bordered table-striped table-hover">
<tr>
  <th>NIM</th>
  <th>Nama</th>
  <th>Tanggal Lahir</th>
  <th>Tempat Lahir</th>
  <th>Jurusan</th>
  <th>Tahun Masuk</th>
  <th>Jenis Kelamin</th>
</tr>
<?php
 
// Berdasar Tahun Masuk
$tahun = 2017;
$query ="select * from data_mahasiswa where tahun_masuk= $tahun ";
 
// Berdasar Tempat Lahir
$tempat= "Jakarta";
$query ="select * from data_mahasiswa where tempat_lahir= '$tempat' ";
 
// Berdasar Jurusan
$jurusan= "Sistem Informasi";
$query ="select * from data_mahasiswa where jurusan = '$jurusan' ";
 
// menampilkan seluruh isi database
$query ="select * from data_mahasiswa";
$hasil = mysqli_query($koneksi, $query);
 
$data = mysqli_fetch_row($hasil);
// ambil dan tampilkan 5 baris tabel mahasiswa
for($i=1;$i<=5;$i++)
{
//  $data = mysqli_fetch_row($hasil);
//  echo "$data[0] $data[1] $data[2] $data[3] $data[4] $data[5] $data[6] $data[7]";
//  echo "<br>";
}
 
// ambil dan tampilkan seluruh tabel mahasiswa
while($data = mysqli_fetch_row($hasil))
{
echo "$data[0] $data[1] $data[2] $data[3] $data[4] $data[5] $data[6] $data[7]";
echo "<br>";
}
 
while($data = mysqli_fetch_array($hasil))
{
 
  echo "<tr>";
  echo "<td>$data[nim]</td>";
  echo "<td>$data[nama]</td>";
  echo "<td>$data[jenis_kelamin]</td>";
  echo "<td>$data[tempat_lahir]</td>";
  echo "<td>$data[tanggal_lhr]</td>";
  echo "<td>$data[jurusan]</td>";
  echo "<td>$data[agama]</td>";
  echo "<td>$data[tahun_masuk]</td>";
  echo "</tr>";
}
?>
  </table>
  </body>
</html>