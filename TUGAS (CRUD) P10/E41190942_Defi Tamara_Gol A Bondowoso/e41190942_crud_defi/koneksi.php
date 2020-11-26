<?php
$koneksi = mysqli_connect("localhost","root","","tugas_crud_defi");

if(mysqli_connect_error()){
	echo "Koneksi database gagal : " + mysqli_connect_error();
}
?>
