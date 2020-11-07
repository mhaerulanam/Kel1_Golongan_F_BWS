<?php
include 'koneksi.php';

// menyimpan data id kedalam variabel
$nip   = $_GET['nip'];

// query SQL untuk insert data
$query="DELETE from dosen where nip='$nip'";
$hasil=mysqli_query($koneksi, $query);

//Kondisi apakah berhasil atau tidak
if ($hasil) {
	echo "<script>alert('Data berhasil dihapus!');history.go(-1);</script>";
	exit;
  }
else {
	echo "<script>alert('Gagal menghapus data!');history.go(-1);</script>";
	exit;
}  

// mengalihkan ke halaman index.php
header("location:data_dosen.php");
?>