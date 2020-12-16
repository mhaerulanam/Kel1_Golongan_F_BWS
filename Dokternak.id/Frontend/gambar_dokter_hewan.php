<?php
include('koneksi.php');
if(isset($_GET['id_dokter'])) 
{
    $query = mysqli_query($koneksi,"SELECT * FROM dokter WHERE id_dokter='".$_GET['id_dokter']."'");
    $data = mysqli_fetch_array($query);
    header("Content-type: image");
    echo $data["foto"];
}
else
{
    header('location:daftardokter.php');
}
?>