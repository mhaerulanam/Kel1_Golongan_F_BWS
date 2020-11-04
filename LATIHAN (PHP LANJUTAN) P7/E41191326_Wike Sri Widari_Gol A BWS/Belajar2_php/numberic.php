<?php

$numbers = array(1, 2, 3, 4, 5);
foreach( $numbers as $value )
{
    echo "Value is $value <br />";
}

$numbers{0} = "one";
$numbers{1} = "two";
$numbers{2} = "three";
$numbers{3} = "four";
$numbers{4} = "five";

foreach( $numbers as  $key => $value ) // ditambahi "$key =>" maka maju
{
    echo "value is $key = $value <br />";//ditambah "$key =" maka maju

    //foreach(array_reverse($numbers) as  $key => $value ) Ditambahi array_reverse maka mundur
    //{
        //echo "value is $key = $value <br />";
    //}
}
?>