<?php
include 'koneksi.php';

// menyimpan data kedalam variabel
$nip = $_POST['nip'];
$nama = $_POST['nama'];
$jk = $_POST['jk'];
$jabatan = $_POST['jabatan'];
$matkul = $_POST['matkul'];
$alamat = $_POST['alamat'];

// query SQL untuk insert data
$query="INSERT INTO dosen (nip,nama,jenis_kelamin,jabatan,matkul,alamat) values ('$nip','$nama','$jk','$jabatan','$matkul','$alamat')";

// mysqli_query($koneksi, $query);

//Mengeksekusi/menjalankan query diatas	
$hasil=mysqli_query($koneksi,$query);

//Kondisi apakah berhasil atau tidak
if ($hasil) {
	echo "<script>alert('Data berhasil di tambahkan!');
	document.location.href= 'form_dosen.php';
	</script>";
	exit;
  }
else {
	echo "<script>alert('Gagal di tambahkan!');history.go(-1);</script>";
	exit;
}  
    
// mengalihkan ke halaman mahasiswa.php
header("location:data_dosen.php");
?>