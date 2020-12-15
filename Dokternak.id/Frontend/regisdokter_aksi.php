<?php
include "koneksi.php";

// include('koneksi.php');

if(isset($_POST['daftar']))
{
    if(!isset($_FILES['file_foto']['tmp_name'])) { 
        header("location:registrasi_dokter.php?pesan=kurang-foto");
    }
    elseif(!isset($_FILES['file_sertifikat']['tmp_name'])) { 
        header("location:registrasi_dokter.php?pesan=kurang-foto");
    }
    else
    {
        // $datadokter = mysqli_query($koneksi, "SELECT max(id_dokter) from dokter");
        // $id_tertinggi = mysqli_fetch_array($datadokter);

        $kode = date('H:i:s'); //tanggal, bulan, detik
        $id_dokter= "Doc $kode";
        $fp_name = $_FILES['file_foto']['name'];
        $fp_size = $_FILES['file_foto']['size'];
        $fp_type = $_FILES['file_foto']['type'];
        $nama = $_POST['nama'];
        $email = $_POST['email'];
        $jk = $_POST['jk'];
        $alamat = $_POST['alamat'];
        $tempat = $_POST['kec'];
        $telpon = $_POST['telpon'];
        $jabatan = $_POST['jabatan'];
        $jadwal_kerja = $_POST['jadwal_kerja'];
        $username = $_POST['username'];
        $password = $_POST['password'];

        if ($fp_size < 2048000 and ($fp_type =='image/jpeg' or $fp_type == 'image/png'))
        {
            $fp = addslashes(file_get_contents($_FILES['file_foto']['tmp_name']));
            $sertif = addslashes(file_get_contents($_FILES['file_sertifikat']['tmp_name']));
            mysqli_query($koneksi,"insert into dokter values ('$id_dokter','$nama','$email','$jk','$alamat','$tempat','$telpon', '$fp', '$sertif', '$jabatan', '$jadwal_kerja', '$username', '$password')");
            echo $jadwal_kerja, $username, $password,$id_dokter, $nama, $email, $jk, $alamat, $tempat, $telpon, $fp, $sertif, $jabatan ;
            // header("location:registrasi_dokter.php?pesan=berhasil");
        }
        else
        {
            header("location:registrasi_dokter.php?pesan=gagal");
        }
    }
}
?>
<!-- (id_dokter, nama, email, jenis_kelamin, alamat, tempat, telpon, foto, sertifikasi, id_jabatan, jadwal_kerja, username, password)  -->