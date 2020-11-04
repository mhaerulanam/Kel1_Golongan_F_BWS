<?php
    echo "membuat fungsi <br>";
    function berhasil($ayam)
    {
        echo "selamat anda berhasil karena nilai anda " .$ayam. "<br>";
    }
    function gagal($ayam)
    {
        echo "maaf anda gagal karena nilai anda" .$ayam. "<br>";
    }


    $nilai = 80;
    if ($nilai>=75)
    {
        berhasil($nilai);
    }
    else { gagal($nilai); };
    echo "<br>";
    echo "fungsi dengan parameter <br>";
    function jumlah ($a,$b)
    {return $a+$b;}
    $nilai1 =10;
    $nilai2 =15;

    echo jumlah ($nilai1,$nilai2);
    echo "<br>";
    echo "fungsi bawaan <br>";

    $sekarang = getdate();
    print_r($sekarang);
    echo "<br>";
    echo "Sekarang tanggal : " .$sekarang["mday"], "<br>";
    echo "Sekarang bulan : " .$sekarang["month"], "<br>";
    echo "Sekarang tahun : " .$sekarang["year"], "<br>";
    
?>