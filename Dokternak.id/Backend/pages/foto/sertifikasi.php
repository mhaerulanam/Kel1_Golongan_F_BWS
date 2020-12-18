<?php
include('koneksi.php');
if(isset($_GET['id_dokter'])) 
{
    $query = mysqli_query($koneksi,"select * from dokter where id_dokter='".$_GET['id_dokter']."'");
    $data = mysqli_fetch_array($query);
    header("Content-type: image");
    echo $data["sertifikasi"];
}
else
{
    header('location:../tabel_dokter.php');
}
?>