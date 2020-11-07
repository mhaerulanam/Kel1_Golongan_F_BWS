<?php

$host="localhost";
$user="root";
$password="";
$db="polije";

$koneksi = mysqli_connect($host,$user,$password);
if ($koneksi){
	// echo "<script>alert('Database Terhubung');history.go(+1);</script>";
}else {
	echo"<script>alert('Koneksi Database Gagal!');history.go(+1);</script>";
}

$hasil=mysqli_select_db($koneksi,$db);
// if ($hasil){
// 	echo "Database $db berhasil dipilih";
// }else {
// 	echo "Database $db gagal dipilih";
// }


?>