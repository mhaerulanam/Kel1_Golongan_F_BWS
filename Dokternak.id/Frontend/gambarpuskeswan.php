<?php
include('koneksi.php');
if(isset($_GET['id_puskeswan'])) 
{
    $query = mysqli_query($koneksi,"select * from puskeswan where id_puskeswan='".$_GET['id_puskeswan']."'");
    $data = mysqli_fetch_array($query);
    header("Content-type: image");
    echo $data["gambar"];
}
else
{
    header('location:daftarpuskeswan.php');
}
?>