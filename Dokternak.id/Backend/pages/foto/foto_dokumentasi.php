<?php
include('../koneksi.php');
if(isset($_GET['id_dokumentasi'])) 
{
    $query = mysqli_query($koneksi,"select * from dokumentasi where id_dokumentasi='".$_GET['id_dokumentasi']."'");
    $data = mysqli_fetch_array($query);
    header("Content-type: image");
    echo $data["dokumentasi"];
}
else
{
    header('location:../tabel_dokumentasi.php');
}
?>