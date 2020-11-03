<?php
$nilai = 80;
echo "contoh if else <br>";
if ($nilai>80) { echo "selamat anda mendapatkan A";}

else if ($nilai>=70 && $nilai <=80) { echo "selamat anda mendapatkan " .$nilai;}

else {echo "Maaf nilai anda belum A <br>";};
echo "<br> contoh switch <br>";
switch($nilai){
    case 100 :echo  "Nilai yang dipilih 100 <br>";
break;
    case 90 :echo "Nilai yang dipilih 90 <br>";
break;
    default : echo "nilai anda tidak ada <br>";
}
   echo "Contoh For <br>";

for ($i=1;$i<=5; $i++) {
    echo "Looping for ke ;" .$i. "<br>";
}
echo "Contoh While <br>";
$j=$i;
while ($j>=1) {
    echo "Loping while ke :" .$j. "<br>";
    $j--;
}
?>