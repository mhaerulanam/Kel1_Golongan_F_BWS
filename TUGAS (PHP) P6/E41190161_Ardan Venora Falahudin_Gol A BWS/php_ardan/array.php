<?php

$punakawan = array ("Semar" , "Gareng" , "Petruk", "Bagong");
echo $punakawan[0];
echo "<br>";
echo $punakawan [3];
echo "<br>";

$punakawan[1] ="Semar";
$punakawan[2] ="Gareng";
$punakawan[3] ="Petruk";
$punakawan[4] ="Bagong";

$i=1;
while($i < count($punakawan)){
    echo $punakawan[$i]."<br>";
    $i++;
}


foreach($punakawan as $i => $i_value) {
  echo "Key=" . $i . ", Value=" . $i_value;
  echo "<br>";
}

?>