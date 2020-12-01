<?php
echo "MEMBUAT FUNGSI <br>";
function berhasil($ayam) //isi yg di dalam kurung($ayam) yg penting diisi ,
{
    echo "SELAMAT ANDA BERHASIL $ayam "; //tapi harus sama dengan echo berhasil yg disini ,harus $ayam juga

    
}
function gagal($nilai)
{                           //walaupun function yg diatas parameternya tidak sama dengan if else yg di bawah tidak apa"
    echo "MAAF ANDA GAGAL $nilai";   //yg penting function dan echo yg di atas sama ,dan yg bawah jg harus sama    
}
$nilai = 90; //harus sama jika $nilai,
if ($nilai>=75) //maka if juga harus $nilai
{berhasil($nilai); } //harus sama dengan if jadi $nilai
else{ gagal($nilai); }; //harus sama dengan if jadi $nilai
echo"<br>";
echo"FUNGSI DENGAN PARAMETER <br>";
function jumlah ($a,$b)
{return $a+$b; }
$nilai1=10;
$nilai2=15;
echo jumlah ($nilai1,$nilai2);
echo "<br>";
echo "FUNGSI BAWAAN <br>";
$sekarang =getdate();
print_r ($sekarang);
echo "<br>";
echo "Sekarang Tanggal :".$sekarang{"mday"};
?>