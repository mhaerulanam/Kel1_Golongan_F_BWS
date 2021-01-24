<?php
include "koneksi.php";


        $kode = date('His'); //Hour,minutes,second

        $id_konsultasi = "KONS$kode";
        $id_peternak = $_POST['id_peternak'];

        if (isset($_POST['id_dokter'])){
                $dokter = $_POST['id_dokter'];
                $query = mysqli_query($koneksi,"select * from dokter where nama='$dokter'");
                $data = mysqli_fetch_assoc($query);
                $id_dokter = $data['id_dokter'];
         }else{
                 echo 'no value';
        }

        // aksi jenis hewan
        if (isset($_POST['id_ktg'])){
        $kategori = $_POST['id_ktg'];
        $query = mysqli_query($koneksi,"select * from kategori_artikel where kategori_artikel='$kategori'");
        $data = mysqli_fetch_assoc($query);
        // menghitung data
        $jumlah_data1 = mysqli_num_rows($query);
                if ( $jumlah_data1 > 0) { 
                $id_ktg = $data['id_ktg'];
                }else{
                $kode = date('His'); //Hour,minutes,second
                $id_ktg  = "KAT$kode";
                mysqli_query($koneksi,"insert into kategori_artikel  values ('$id_ktg','$kategori')");
                }
        
        }else{
                echo 'no value';
        }

        // $id_dokter = $_POST['id_dokter'];
        $id_kategori = $_POST['id_kategori']; // ternak atau pets
        $id_ktg = $_POST['id_ktg']; //Dengan kata lain, ktg disini adalah jenis hewan seperti kucing, kambing, dll
        $nama_hewan = $_POST['nama_hewan'];
        $keluhan = $_POST['keluhan'];
        $tanggal = $_POST['tanggal'];
        $status_kirim = "norespon";

        mysqli_query($koneksi,"insert into konsultasi values 
        ('$id_konsultasi','$id_peternak','$id_dokter','$id_kategori','$id_ktg','$nama_hewan','$keluhan','$tanggal','$status_kirim')");
        
        // echo $id_konsultasi, $id_peternak, $id_dokter, $id_kategori, $id_ktg, $nama_hewan, $keluhan, $tanggal;

        header("location:riwayat_konsultasi.php?pesan=berhasil");
?>

