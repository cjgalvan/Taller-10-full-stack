<?php
// DECLARACION DE VARIABLES
$number = 0;
    
    //PROCESO
    
    echo "Digite el nuemro a Operar: ";
    fscanf (STDIN, "%d", $number);
    $x = 0;
    
    while($x <= 30 ){
        
        echo $number . " X ". $x . " = " . $x *  $number."\n";
        $x++;
        
        
    }
    
    
?>