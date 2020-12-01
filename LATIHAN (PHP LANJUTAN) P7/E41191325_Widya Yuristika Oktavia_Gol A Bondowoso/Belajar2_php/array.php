<?php
$punakawan = array("Semar", "Goreng", "Petruk", "Bagong");
echo $punakawan[0];
echo "<br>";
echo $punakawan[3];

$punakawan[1]="Semar";
$punakawan[2]="Goreng";
$punakawan[3]="Petruk";
$punakawan[4]="Bagong";
echo $punakawan[3];

$indeks=1;
while ($indeks <count($punakawan)){
    echo $punakawan [$indeks]. "<br>";
    $indeks++;
}
?>