<?php
include "koneksi.php";


        $kode = date('His'); //day, month, minutes

        $id_konsultasi = "KONS$kode";
        $id_peternak = $_POST['id_peternak'];
        $id_dokter = $_POST['id_dokter'];
        $id_kategori = $_POST['id_kategori'];
        $nama_hewan = $_POST['nama_hewan'];
        $keluhan = $_POST['keluhan'];
        $tanggal = $_POST['tanggal'];
        $komentar = $_POST['komentar'];

        mysqli_query($koneksi,"insert into konsultasi values 
        ('$id_konsultasi','$id_peternak','$id_dokter','$id_kategori','$nama_hewan','$keluhan','$tanggal','$komentar')");
        
        header("location:form_konsultasi.php?pesan=berhasil");

?>