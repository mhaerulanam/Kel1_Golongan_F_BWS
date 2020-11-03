<?php
echo "Membuat Fungsi <br>";
function berhasil($nilai)//isi didalam kurung itu bebas yg penting harus terisi dan isinya harus sama dengan yang di echo
{
    echo "Selamat Anda Berhasil $nilai";// parameter nilai harur sama denga yg di atas
}
function gagal($nilai)
{
    echo "Maaf Anda Gagal $nilai";
}
//Ketika menggunakan $nilai maka dibawah juga nilai
$nilai = 10;
if ($nilai>=75)
{berhasil($nilai); }
else { gagal($nilai); };
echo "<br>";
echo "FUNGSI DENGAN PARAMETER<br>";
function jumlah($a,$b)
{ return $a+$b; }// rnilai kembali
$nilai1=10;
$nilai2=15;
echo jumlah($nilai1,$nilai2);
echo "<br>";
echo "FUNGSI BAWAAN<br>";
$sekarang = getdate();
print_r ($sekarang);
echo "<br>";
echo "Sekarang Tanggal :".$sekarang{"mday"};
?>