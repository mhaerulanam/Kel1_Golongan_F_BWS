<?php
$punakawan = array("Semar", "Goreng", "Petruk", "Bagong");
echo "looping menggunakan while";
$indeks=0;// $indek sama dengan $j
while($indeks < count($punakawan)){
echo $punakawan[$indeks]."<br>";
$indeks++;
}
echo $punakawan[1];//hasilnya Goreng
echo "<br>";
echo $punakawan[3];//hasilnya bagong

$punakawan[1]="Semar";
$punakawan[2]="Goreng";
$punakawan[3]="Petruk";
$punakawan[4]="Bagong";
echo $punakawan[2];//hasilnya Goreng
?>