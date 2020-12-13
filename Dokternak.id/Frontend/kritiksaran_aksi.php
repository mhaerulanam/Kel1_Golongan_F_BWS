<?php
include "koneksi.php";
$id_ks = $_POST["A"];
$tanggal = $_POST['tanggal'];
$komentar = $_POST['komentar'];
$nama = $_POST['nama'];
$emailHp = $_POST['email_hp'];
$pekerjaan = $_POST['pekerjaan'];

mysqli_query($koneksi,"insert into kritikdansaran values ('$id_ks', '$tanggal', '$komentar', '$nama','$emailHp','$pekerjaan')");

header("location:kritikdansaran.php?pesan=berhasil");

?>