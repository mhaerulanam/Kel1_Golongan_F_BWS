<?php

$punakawan = array("Semar", "Gareng", "Petruk", "Bagong");
echo $punakawan[0]; 
echo "<br>";
echo $punakawan[3];

$punakawan[1]= "Semar";
$punakawan[2]= "Gareng";
$punakawan[3]= "Petruk";
$punakawan[4]= "Bagong";
echo "<br><hr>";
echo $punakawan[0]; 
echo "<br><hr>";

$j= count($punakawan)-1;
while($j>=1)
{
    echo $punakawan[$j]. "<br>";
    $j--;
}

echo "<br><hr>";

foreach ($punakawan as $key => $value) {
    echo $value. "<br>";
}

?>