<?php
include 'koneksi.php';

// menyimpan data kedalam variabel
$nim = $_POST['nim'];
$nama = $_POST['nama'];
$tmplahir = $_POST['tmplahir'];
$tgllahir = $_POST['tgllahir'];
$jk = $_POST['jk'];
$prodi = $_POST['prodi'];
$telpon = $_POST['telpon'];
$alamat = $_POST['alamat'];

	

// query SQL untuk insert data
$query="INSERT INTO mahasiswa (nim,nama,tempat_lahir,tgllahir,jenis_kelamin,prodi,telpon,alamat) values ('$nim','$nama','$tmplahir','$tgllahir','$jk','$prodi','$telpon','$alamat')";

// mysqli_query($koneksi, $query);

//Mengeksekusi/menjalankan query diatas	
$hasil=mysqli_query($koneksi,$query);

//Kondisi apakah berhasil atau tidak
  if ($hasil) {
	echo "<script>
	alert('Data berhasil di tambahkan!');
	document.location.href = 'form_mahasiswa.php';
	</script>";
	exit;
  }
else {
	echo "<script>alert('Gagal di tambahkan!');history.go(-1);</script>";
	exit;
}  

// mengalihkan ke halaman mahasiswa.php
header("location:data_mahasiswa.php");
?>