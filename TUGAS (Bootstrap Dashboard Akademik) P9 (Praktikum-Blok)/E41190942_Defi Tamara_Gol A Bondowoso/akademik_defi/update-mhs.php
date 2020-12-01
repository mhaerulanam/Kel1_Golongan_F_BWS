<?php
include 'koneksi.php';
// menyimpan data kedalam variabel
$nim            = $_POST['nim'];
$nama           = $_POST['nama'];
$tmplahir       = $_POST['tmplahir'];
$tgllahir       = $_POST['tgllahir'];
$jk             = $_POST['jk'];
$prodi          = $_POST['prodi'];
$telpon         = $_POST['telpon'];
$alamat         = $_POST['alamat'];
// query SQL untuk insert data
$query="UPDATE mahasiswa SET nim='$nim',nama='$nama',tempat_lahir='$tmplahir',tgllahir='$tgllahir',
jenis_kelamin='$jk',prodi='$prodi',telpon='$telpon',alamat='$alamat' where nim='$nim'";


//Mengeksekusi/menjalankan query diatas	
$hasil=mysqli_query($koneksi,$query);

//Kondisi apakah berhasil atau tidak
  if ($hasil) {
	echo "<script>
	alert('Data berhasil diedit!');
	document.location.href = 'data_mahasiswa.php';
	</script>";
	exit;
  }
else {
	echo "<script>alert('Data gagal diedit!');history.go(-1);</script>";
	exit;
}  

// mengalihkan ke halaman index.php
// header("location:data_mahasiswa.php");
?>