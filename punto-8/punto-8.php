<?php
//Variables

$suma  = 0;

for ($i = 0; $i <= 100; $i++) {
    
    if ($i % 2 == 0){
        echo $i. " - ";
        
        $suma += $i;
    }
}

    echo "La Sumatoria de los numeros pares es: " .$suma. "\n";

?>