<?php
include('../koneksi.php');
if(isset($_GET['id_peternak'])) 
{
    $query = mysqli_query($koneksi,"select * from peternak where id_peternak='".$_GET['id_peternak']."'");
    $data = mysqli_fetch_array($query);
    header("Content-type: image");
    echo $data["foto_peternak"];
}
else
{
    header('location:../tabel_userpeternak.php');
}
?>