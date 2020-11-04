<?php
$nilai=70;
echo "CONTOH IF ELSE <br>";
if($nilai>80) { echo "Selamat Anda mendapat grade A <br>";}
else if($nilai>=70 && $nilai<=80) { echo "Selamat Anda mendapat grade B <br>";}
// jangan lupa untuk membuat operasi <= agar nilai yang dijadikan perbandingan juga masuk ke bari itu.
else { echo "Maaf Anda belum dapat grade A atau B<br>";};
echo "CONTOH SWITCH <br>";
switch($nilai) {
    case 100 : echo "Nilai yang dipilih 100 <br>";
    break;
    case 90 : echo "Nilai yang dipilih 90 <br>";
    break;
    default : echo "Anda memilih nilai selain 90 dan 100 <br>";
    break; // else dari switch adalah default
} echo "CONTOH FOR <br>";
for($i=5;$i>=1;$i--) {
    echo "Looping FOR ke : ".$i."<br>";
}
echo "CONTOH WHILE <br>";
$j=5;
while($j>=1) {
    echo "Looping While ke : ".$j."<br>";
    $j--;
}

// untuk membalikkan indeks perulangan maka i diganti angka terbesar, dan perbandingannya >=, kemudian i-- 
// agar berulang secara menurun
?>