<?php
$koneksi = mysqli_connect("localhost","root","","db_dokternak");

if(mysqli_connect_error()){
	echo "Koneksi database gagal : " + mysqli_connect_error();
}
?>