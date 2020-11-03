<?php
$nilai=70;
echo"Contoh IF ELSE <br>";
if($nilai>80 ) { echo "Selamat Anda mendapat grade A <br>";}
elseif ($nilai>=70 && $nilai<=80){
    echo "Anda Mendapat Nilai B <br>";}
else { echo "Maaf Anda belum mendapat grade A <br>";}
echo"CONTOH SWITCH <br>";
switch($nilai) {
    case 100:echo "Nilai yang dipilih 100 <br>";
    break;
    case 100:echo"Nilai yang dipilih 90 <br>";
    break;
    default : echo "Nilai Anda Belom Memenuhi";
} echo"CONTOH FOR <br>";
for ($i=1;$i<=5;$i++){
    echo"Looping For ke : ".$i."<br>";
}
echo"CONTOH WHILE <br>";
$j=1;
while($i<=5){
    echo"Looping While ke : ".$j."<br>";
    $i++;
}

?>