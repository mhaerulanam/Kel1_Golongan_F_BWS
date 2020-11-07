<?php
include 'koneksi.php';
 
// menyimpan data kedalam variabel
$nim = $_POST['nim'];
$name = $_POST['nama'];
$jk = $_POST['jenis_kelamin'];
$tl = $_POST['tempat_lahir'];
$tgl = $_POST['tanggal_lahir'];
$jurusan = $_POST['jurusan'];
$agama = $_POST['agama'];
$thnmsk = $_POST['tahun_masuk'];
 
if($nim=="nim")
{
  echo "NIM kosong belum diisi, ";
  echo "<script>alert('NIM Belum diisi');history.go(-1);</script>";
}
 
if($nama=="nama")
{
  echo "<script>alert('Nama Belum diisi');history.go(-1);</script>";
}
 
if($tmptlahir=="tl")
{
  echo "<script>alert('Tempat Lahir Belum diisi');history.go(-1);</script>";
}
  else
{
 
/* cek input NIM apakah sudah ada nim yang digunakan */
   $pilih="select * from data_mahasiswa where nim='$nim'";
   $cek=mysqli_query($koneksi, $pilih);
 
   $jumlah_data = mysqli_num_rows($cek);
   if ($jumlah_data >= 1 ) 
   {
 
  echo "<script>alert('NIM yang sama sudah digunakan');history.go(-1);</script>";
    }
   else
{
 
// query untuk insert data mahasiswa
   $query="INSERT INTO data_mahasiswa SET  nim='$nim',nama='$name',jenis_kelamin='$jk',tempat_lahir='$tl',tanggal_lahir='$tgl',jurusan='$jurusan',agama='$agama',tahun_masuk='$thnmsk";
mysqli_query($koneksi, $query); //di smaain
 
echo " Input Data yang anda masukkan sukses berhasil";
header("location:query.php");
 
echo "<script>alert('Data yang anda Input sukses');window.location='query.php'</script>";
    }
 }
?>