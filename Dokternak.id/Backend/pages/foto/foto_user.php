<?php
include('koneksi.php');
if(isset($_GET['id_user'])) 
{
    $query = mysqli_query($koneksi,"select * from user where id_user='".$_GET['id_user']."'");
    $data = mysqli_fetch_array($query);
    header("Content-type: image");
    echo $data["foto"];
}
else
{
    header('location:../tabel_user.php');
}
?>