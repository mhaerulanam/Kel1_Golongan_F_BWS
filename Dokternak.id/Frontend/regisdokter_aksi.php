<?php
include "koneksi.php";

// include('koneksi.php');

if(isset($_POST['daftar'])) {
    // echo $_POST['nama'];
    $lokasiFoto = $_FILES['file_foto']['tmp_name'];
    $lokasiSertif = $_FILES['file_sertifikat']['tmp_name'];
    if($lokasiFoto=="" || $lokasiSertif=="") { 
        header("location:index.php?pesan=kurang-foto");
    } else{

        $kode = date('His'); //jam,menit,detik
        $id_dokter= "DOC$kode";

        $fp_name = $_FILES['file_foto']['name'];
        $fp_size = $_FILES['file_foto']['size'];
        $fp_type = $_FILES['file_foto']['type'];

        // $fs_name = $_FILES['file_sertifikat']['name'];
        // $fs_size = $_FILES['file_sertifikat']['size'];
        // $fs_type = $_FILES['file_sertifikat']['type'];

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
            // echo $jadwal_kerja, $username, $password,$id_dokter, $nama, $email, $jk, $alamat, $tempat, $telpon, $fp, $sertif, $jabatan ;
            header("location:index.php?pesan=berhasil");
        }else{
            header("location:index.php?pesan=gagal");
        }
    }
}
?>
<!-- (id_dokter, nama, email, jenis_kelamin, alamat, tempat, telpon, foto, sertifikasi, id_jabatan, jadwal_kerja, username, password)  -->
<!-- and $fs_size < 10000000 ($fs_type =='image/jpeg' or $fs_type == 'application/pdf') -->