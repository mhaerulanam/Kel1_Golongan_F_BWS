<?php
include('../koneksi.php');
if(isset($_GET['id_admin'])) 
{
    $query = mysqli_query($koneksi,"select * from admin where id_admin='".$_GET['id_admin']."'");
    $data = mysqli_fetch_array($query);
    header("Content-type: image");
    echo $data["foto"];
}
else
{
    header('location:../tabel_dokter.php');
}
?>