<?php

$suma =0;
$sumarray = array  (20,25,30,35,50);

foreach ($sumarray as $add){
    echo $add."\n";
    
    $suma = $add + $suma;
    
}

echo "La suma es:".$suma
?>