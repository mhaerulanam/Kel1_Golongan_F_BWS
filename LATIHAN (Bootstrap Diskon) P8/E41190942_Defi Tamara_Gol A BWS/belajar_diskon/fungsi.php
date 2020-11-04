<?php
echo "MEMBUAT FUNGSI <br>";
function berhasil($ayam) {
    echo "SELAMAT ANDA BERHASIL DENGAN NILAI : " .$ayam;
    // untuk menampilkan nilai, maka fungsi yang dibuat harus ada parameternya
    // parameter fungsi dan echo harus sama. Meski parameter berbeda dengan di if tidak papa. 
    // karena nilai yang ada di parameter if akan dimasukkan ke fungsi berhasil dan menggantikan parameter ayam
}
function gagal() {
    echo "MAAF ANDA GAGAL";
}

$nilai = 90;
if ($nilai>=75) {
    berhasil($nilai);
    // parameter nilai dan di fungsi harus sama.
} else { gagal(); }

echo "<br>";
echo "FUNGSI DENGAN PARAMETER<br>";
function jumlah($a,$b) //fungsi dengan 2 parameter
{ return $a+$b; } //nilai kembali(return value)
$nilai1=10;
$nilai2=15;
echo jumlah($nilai1,$nilai2); //passing parameter
echo "<br";
echo "FUNGSI BAWAAN <br>";
$sekarang = getdate();
print_r($sekarang); //hasilnya berupa array
echo "<br>"; //ambil eleme untuk menampilkan tanggal
echo "Sekarang Tanggal : ".$sekarang["mday"]."<br>";
echo "Sekarang Bulan : ".$sekarang["mon"]."<br>";
echo "Sekarang Tahun : ".$sekarang["year"]."<br>"; // kata kunci bisa dilihat di array
?>