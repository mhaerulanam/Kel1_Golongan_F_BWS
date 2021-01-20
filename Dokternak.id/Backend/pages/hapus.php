<?php 
// koneksi database

$koneksi = mysqli_connect("localhost","root","","db_dokternak");

$id = $_GET['id_puskeswan'];
mysqli_query($koneksi, "DELETE FROM puskeswan WHERE id_puskeswan='".$id."'")or die(mysql_error());

header("location:tabel_puskeswan.php");
// $id = $_GET['id_puskeswan'];
// $hapus = "DELETE FROM puskeswan WHERE id_puskeswan='$id'";
// $sql = mysqli_query ($hapus);
// if ($sql) {        
//     ?>
         <!-- <script language="JavaScript">
//         alert('Seluruh Data <//?=$id_puskeswan?> Berhasil dihapus!');
//         document.location='tabel_puskeswan.php';
//         </script> -->
      <?php       
// }

?>