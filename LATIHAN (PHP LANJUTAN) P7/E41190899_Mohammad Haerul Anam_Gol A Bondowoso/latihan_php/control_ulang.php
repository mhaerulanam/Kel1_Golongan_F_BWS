<?php

$nilai=72;
echo "<hr>CONTOH IF ELSE <br>";

if ($nilai>80)
    { echo "Selamat Anda mendapat grade A <br>";} 
elseif ($nilai>=70 && $nilai<=80)
    { echo "Selamat Anda mendapat nilai ".$nilai." <br>";}  
else
    { echo "Maaf Anda belum dapat grade A <br>";}

switch($nilai){
    case 100; echo "Nilai yang dipilih 100 <br>";
    break;
    case 90; echo "Nilai yang dipilih 90 <br>";
    break;
    default: echo "Nilai tidak terdeteksi <br>";
} 

echo "<hr>CONTOH FOR <br>";

for ($i=5;$i>=1;$i--) {
    echo "Looping FOR ke : " .$i. "<br>";
}
echo "<hr>CONTOH WHILE <br>";

$j=1;
while ($j<=5) {
    echo "Lopping While ke : " .$j. "<br>";
    $j++;
}

?>