<?php
include '../koneksi.php';
    if(isset($_POST['balas']))
    {
        $kode = date('His'); //Hour,minutes,second
        $id_respon = "RES$kode";
        $id = $_POST['id'];
        $idk = $_POST['idk'];
        $respon = $_POST['respon'];
        $tanggal = $_POST['tanggal'];
        $status = "on";
            

        // $query1 = "INSERT INTO user VALUES('','$username_peternak','$password_peternak','$id_role')";
        // mysqli_query($koneksi,$query1);

        $kirim1 = " insert into respon_konsultasi values 
        ('$id_respon','$id','$respon','$tanggal')";
        mysqli_query($koneksi,$kirim1);

        $kirim2 = " insert into riwayat_konsultasi values 
        ('','$idk','$id_respon','$status')";
        mysqli_query($koneksi,$kirim2);

        $ambildata=mysqli_query($koneksi, "SELECT * FROM  riwayat_konsultasi where id_respon = '$id_respon'");
        $row = mysqli_fetch_array($ambildata);
        $idss = $row['id_konsultasi'];
        mysqli_query($koneksi,"update konsultasi set status_kirim='terespon' where id_konsultasi='$idss'");            

        
        // echo $id_respon, $id, $respon, $tanggal, $idk, $status;
        header("location:respon_konsultasi.php?pesan=berhasil");
    }
?>