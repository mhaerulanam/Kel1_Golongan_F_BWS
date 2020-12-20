<?php
include "koneksi.php";


        $kode = date('His'); //Hour,minutes,second

        $id_konsultasi = "KONS$kode";
        $id_peternak = $_POST['id_peternak'];
        $id_dokter = $_POST['id_dokter'];
        $id_kategori = $_POST['id_kategori']; // ternak atau pets
        $id_ktg = $_POST['id_ktg']; //Dengan kata lain, ktg disini adalah jenis hewan seperti kucing, kambing, dll
        $nama_hewan = $_POST['nama_hewan'];
        $keluhan = $_POST['keluhan'];
        $tanggal = $_POST['tanggal'];

        mysqli_query($koneksi,"insert into konsultasi values 
        ('$id_konsultasi','$id_peternak','$id_dokter','$id_kategori','$id_ktg','$nama_hewan','$keluhan','$tanggal')");
        
        // echo $id_konsultasi, $id_peternak, $id_dokter, $id_kategori, $id_ktg, $nama_hewan, $keluhan, $tanggal;

        header("location:form_konsultasi.php?pesan=berhasil");

?>