<?php

$numbers = array(1,2,3,4,5);
foreach (array_reverse($numbers) as $key => $value) { //urutan kebalik
    echo "Value is $value <br />";
}

echo "<hr>";

foreach ($numbers as $key => $value) { //terurut
    echo "Index is $key <br />";
}

echo "<hr>";

$Batas=4;
$i=0;
foreach ($numbers as $key => $value) { //terurut TERABATASI
    $i++;
    if($i==$Batas){
    break;  
    }
    else{
    echo "Index is $key <br />";
    }   
}

echo "<hr>";

$numbers[0]= "One";
$numbers[1]= "Two";
$numbers[2]= "Three";
$numbers[3]= "four"; 
$numbers[4]= "five";


foreach ($numbers as $key => $value) {
    echo "Value is $value <br />";
}


?>