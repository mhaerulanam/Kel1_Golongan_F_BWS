<?php 
// mengaktifkan session php
session_start();
 
// menghubungkan dengan koneksi
include 'koneksi.php';
 
// menangkap data yang dikirim dari form
$username = $_POST['username'];
$password = $_POST['password'];
 
// menyeleksi data login dengan username dan password yang sesuai
$data = mysqli_query($koneksi,"select * from login where username='$username' and password='$password'");
 
// menghitung jumlah data yang ditemukan
$cek = mysqli_num_rows($data);
 
if($cek > 0){
    $_SESSION['username'] = $username;
    $_SESSION['password'] = $password;
    $_SESSION['status'] = "login";
    echo "<script> alert('Selamat, Anda berhasil Login!');</script>";
    echo "<script> window.location.href = 'dashboard.php' </script>";
    $_SESSION['username'] = $_POST['username'];
}else{
    echo "<script> alert('Username atau Password Tidak Benar');</script>";
    echo "<script> window.location.href = 'login.php' </script>";
}
?>
