<?php
include('../koneksi.php');
if(isset($_GET['id_artikel'])) 
{
    $query = mysqli_query($koneksi,"select * from artikel where id_artikel='".$_GET['id_artikel']."'");
    $data = mysqli_fetch_array($query);
    header("Content-type: image");
    echo $data["gambar"];
}
else
{
    header('location:../tabel_artikel.php');
}
?>