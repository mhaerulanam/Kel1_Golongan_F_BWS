<?php
$punakawan = array("Semar","Gareng","Petruk","Bagong");
echo $punakawan[0]; // Hasilnya Semar
echo "<br>";
echo $punakawan[3]; // Hasilnya Bagong

$punakawan[1]="Semar";
$punakawan[2]="Gareng";
$punakawan[3]="Petruk";
$punakawan[4]="Bagong";
echo $punakawan[0]; // Hasilnya Petruk

echo "<br> DAFTAR PUNAKAWAN <br>";

$i=4;
while($i>=0) {
    echo $punakawan[$i]."<br>"; // untuk menampilkan maka formatnya nama data [indeks]
    $i--;
}

echo "<br>";

for($i=0; $i<count($punakawan); $i++) { // count tidak perlu memasukkan jumlah array, tapi otomatis 
    // menampilkan semua
    echo $punakawan[$i]."<br>";
} 
?>