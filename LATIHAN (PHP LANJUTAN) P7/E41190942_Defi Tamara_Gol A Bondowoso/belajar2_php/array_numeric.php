<?php
/* First method to create array*/
$numbers = array(1, 2, 3, 4, 5);
foreach($numbers as $value) {
    echo "Value is $value <br />";
}

foreach($numbers as $key=>$value) {
    echo "Key is $key <br />";
}

/* Second method to create array */
$numbers[0] = "one";
$numbers[1] = "two";
$numbers[2] = "three";
$numbers[3] = "four";
$numbers[4] = "five";

foreach ($numbers as $value) {
    echo "Value is $value <br />"; // Menampilkan isi array secara berurut
}

foreach($numbers as $key=>$value) {
    echo "Key is $key <br />"; // Menampilkan indeksnya secara berurut
}

foreach( array_reverse($numbers) as $numbers) {
    echo "Key Reverse is $numbers <br/>";  //Menampilkan value urutan kebalik
}

//foreach digunakan untuk menampilkan semua data secara langsung tanpa perulangan
// jika ingin menampilkan hanya data ke 1 - 3 misal, harus membuat if di dalam foreach
?>