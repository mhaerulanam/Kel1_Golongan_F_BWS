<?php
// Start the session
session_start();
?>
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


        $file_name = $_FILES['gambar']['name'];
        $file_size = $_FILES['gambar']['size'];
        $file_type = $_FILES['gambar']['type'];
        $tanggal = $_POST['tanggal'];
        $judul = $_POST['judul'];
        $isi = $_POST['isi'];
        $sumber = $_POST['Sumber'];
        $status ="notampil";
        // $id_artikel= "A";
        // $id_ktg= "KAT01";
        $nama = $_SESSION['nama'];
        if ($file_size < 2048000 and ($file_type =='image/jpeg' or $file_type == 'image/png'))
        {
            $image   = addslashes(file_get_contents($_FILES['gambar']['tmp_name']));
            mysqli_query($koneksi,"insert into artikel (id_ktg,tanggal,nama_penulis,judul,isi,gambar,sumber,status) values ('$id_ktg','$tanggal','$nama','$judul','$isi','$image','$sumber','$status')");
            header("location:tulis_artikel.php?pesan=berhasil");
        }
        else
        {
            echo '<span style="color:red"><b><u><i>Ukuruan File / Tipe File Tidak Sesuai</i></u></b></span>';
        }
    }
}
?>