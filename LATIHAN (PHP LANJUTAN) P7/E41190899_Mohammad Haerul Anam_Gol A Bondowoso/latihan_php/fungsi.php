<?php

echo "MEMBUAT FUNGSI<br>";

function berhasil($a)
{
    echo "SELAMAT ANDA BERHASIL dengan nilai $a";
}

function gagal($nilai)
{
    echo "MAAF ANDA GAGAL dengan nilai " .$nilai;
    echo "MAAF ANDA GAGAL dengan nilai " +$nilai;
    return $nilai;
}

$nilai= 90;
if ($nilai>=75)
{
    berhasil($nilai);
}
else
{
    gagal($nilai);
}
echo"<br><hr>";

echo "FUNGSI DENGAN PARAMETER <br>";

function jumlah ($a,$b) //fungsi dengan 2 parameter
{
    return $a+$b; //nilai kembali (return value)
}

$nilai1=10;
$nilai2=15;
echo jumlah($nilai1,$nilai2); //passing parameter

echo "<br><hr";
echo "FUNGSI TAMBAH <br>";
$sekarang = getdate();
print_r($sekarang); //hasilnya berupa array
echo "<br>";
echo "<hr>Sekarang Tanggal : ".$sekarang["weekday"]. ", ".$sekarang["mday"]. " ".$sekarang["month"]. " " .$sekarang["year"] ;
echo "<hr>Sekarang Jam : ".$sekarang["seconds"]. ":".$sekarang["minutes"]. ":" .$sekarang["hours"] ;
echo "<hr><br> Tanggal : ".$sekarang["mday"];
echo " <br> Bulan : ".$sekarang["mon"];
echo " <br> tahun : ".$sekarang["year"];

$jam=date("H : i : s");

?>