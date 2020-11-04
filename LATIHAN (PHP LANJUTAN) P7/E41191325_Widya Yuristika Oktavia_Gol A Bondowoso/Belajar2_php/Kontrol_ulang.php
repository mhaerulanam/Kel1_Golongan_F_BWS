<?php
$nilai=72;
echo"Contoh IF ELSE <br>";
if($nilai>80) {echo" Selamat Anda Mendapat grade A <br>";}
elseif($nilai>=70 && $nilai<=80) {echo" Selamat Anda Mendapat grade B <br>";}
else { echo"Maaf Anda belum mendapat grade A <br>";}
echo"CONTOH SWITCH <br>";
switch($nilai) {
    case 100 :echo"Nilai yang dipilih 100 <br>";
    break;
    case 100:echo"Nilai yang dipilih 90 <br>";
    break;
}
    echo"CONTOH FOR <br>";
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