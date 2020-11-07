<?php
include 'koneksi.php';

// menyimpan data id kedalam variabel
$nim   = $_GET['nim'];

// query SQL untuk insert data
$query="DELETE from mahasiswa where nim='$nim'";
$hasil=mysqli_query($koneksi, $query);


//Kondisi apakah berhasil atau tidak
if ($hasil) {
	echo "<script>alert('Data berhasil dihapus!');
	document.location.href = 'data_mahasiswa.php';
	</script>";
	exit;
  }
else {
	echo "<script>alert('Gagal menghapus data!');history.go(-1);</script>";
	exit;
}  

// mengalihkan ke halaman index.php
// header("location:data_mahasiswa.php");
?>