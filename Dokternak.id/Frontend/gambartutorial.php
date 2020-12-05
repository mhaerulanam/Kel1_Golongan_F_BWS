<?php
include('koneksi.php');
if(isset($_GET['id_tutorial'])) 
{
    $query = mysqli_query($koneksi,"select * from tutorial where id_tutorial='".$_GET['id_tutorial']."'");
    $data = mysqli_fetch_array($query);
    header("Content-type: image");
    echo $data["icon"];
}
else
{
    header('location:tutorial.php');
}