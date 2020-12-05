<?php
// include "koneksi.php";

include('koneksi.php');
if(isset($_POST['tombol']))
{
    if(!isset($_FILES['gambar']['tmp_name'])){
        echo '<span style="color:red"><b><u><i>Pilih file gambar</i></u></b></span>';
    }
    else
    {
        $file_name = $_FILES['gambar']['name'];
        $file_size = $_FILES['gambar']['size'];
        $file_type = $_FILES['gambar']['type'];
        $id_ktg = $_POST['s_kategori'];
        $tanggal = $_POST['tanggal'];
        $judul = $_POST['judul'];
        $isi = $_POST['isi'];
        $sumber = $_POST['Sumber'];
        $id_artikel= "A";
        // $id_ktg= "KAT01";
        $nama = "Admin";
        if ($file_size < 2048000 and ($file_type =='image/jpeg' or $file_type == 'image/png'))
        {
            $image   = addslashes(file_get_contents($_FILES['gambar']['tmp_name']));
            mysqli_query($koneksi,"insert into artikel (id_ktg,tanggal,nama_penulis,judul,isi,gambar,sumber) values ('$id_ktg','$tanggal','$nama','$judul','$isi','$image','$sumber')");
            header("location:tulis_artikel.php?pesan=berhasil");
        }
        else
        {
            echo '<span style="color:red"><b><u><i>Ukuruan File / Tipe File Tidak Sesuai</i></u></b></span>';
        }
    }
}
?>