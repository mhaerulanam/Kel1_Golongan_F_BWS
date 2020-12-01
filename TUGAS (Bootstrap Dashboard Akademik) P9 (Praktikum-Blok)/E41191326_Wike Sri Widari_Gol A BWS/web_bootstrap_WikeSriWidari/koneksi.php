<?php
// buat koneksi dengan database mysql
$dbhost = "localhost";
$dbuser = "root";
$dbpass = "";
$dbname = "mahasiswa_baru";
$koneksi = mysqli_connect($dbhost,$dbuser,$dbpass,$dbname);
 
//periksa koneksi, tampilkan pesan kesalahan jika gagal
// if(!$koneksi){
// die ("Koneksi database gagal: ".mysqli_connect_error().
// " - ".mysqli_connect_error());
//      }
      
     // $query="INSERT INTO data_mahasiswa SET  nim='$nim',nama='$name',jenis_kelamin='$jk',tempat_lahir='$tl',tanggal_lahir='$tgl',jurusan='$jurusan',agama='$agama',tahun_masuk='$thnmsk";
     // mysqli_query($koneksi, $query); //di smaain
      
     // echo " Input Data yang anda masukkan sukses berhasil";
     // header("location:query.php");
     // echo "<script>alert('Data yang anda Input sukses');window.location='query.php'</script>";     

?>