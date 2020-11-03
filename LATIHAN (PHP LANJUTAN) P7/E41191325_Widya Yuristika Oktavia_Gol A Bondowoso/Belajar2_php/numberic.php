<?php

$numbers = array (1,2,3,4,5);
foreach ($numbers as $value)
{
    echo "value is $value <br/>";
}
$numbers[0]="one";
$numbers[1]="two";
$numbers[2]="three";
$numbers[3]="four";
$numbers[4]="five";

foreach(array_reverse($numbers) as $key => $value) // jalan mundur menggunakan #array_reverse dan perlu pakai () untuk $numbers
{  // dan jangan lupa tamabahin =>$key ,jika jalan maju tidak perlu  #array_reverse dan ()
    echo "value is $key = $value <br/>";
}
?>