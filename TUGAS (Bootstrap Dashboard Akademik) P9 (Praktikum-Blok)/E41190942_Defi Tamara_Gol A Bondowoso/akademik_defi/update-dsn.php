<?php
include 'koneksi.php';
// menyimpan data kedalam variabel
$nip            = $_POST['nip'];
$nama           = $_POST['nama'];
$jk             = $_POST['jk'];
$jabatan        = $_POST['jabatan'];
$matkul         = $_POST['matkul'];
$alamat         = $_POST['alamat'];
// query SQL untuk insert data
$query="UPDATE dosen SET nip='$nip',nama='$nama',
jenis_kelamin='$jk',jabatan='$jabatan',matkul='$matkul',alamat='$alamat' where nip='$nip'";


//Mengeksekusi/menjalankan query diatas	
$hasil=mysqli_query($koneksi,$query);

//Kondisi apakah berhasil atau tidak
  if ($hasil) {
	echo "<script>alert('Data berhasil diedit!');
	document.location.href = 'data_dosen.php';
	</script>";
	exit;
  }
else {
	echo "<script>alert('Data gagal diedit!');history.go(-1);</script>";
	exit;
}  

// mengalihkan ke halaman index.php
// header("location:data_dosen.php");
?>