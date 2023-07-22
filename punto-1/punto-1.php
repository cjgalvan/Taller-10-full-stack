<?php
// definir Variables
$num1 = 0;
$num2 = 0;
$operationType = 0;

print ("Ingrese el primer Numero: ");
 fscanf (STDIN, "%d", $num1);
 
 print ("Ingrese el Segundo Numero: ");
 fscanf (STDIN, "%d", $num2);
 
echo ("Tipo de Operacion a Realizar: \n");
echo ("1 - SUMAR \n");
echo  ("2 - RESTAR \n");
echo  ("3 - MULTIPLICAR \n");
echo  ("4 - DIVIDIR \n");
fscanf (STDIN, "%s", $operationType);

switch ($operationType){
    
    case '1':
        $result = $num1 + $num2;
        break;
        
    case '2':
        $result = $num1 - $num2;
        break;
        
    case '3':
        $result = $num1 * $num2;
        break;
        
    case '4':
        $result = $num1 / $num2;
        break;
        
    default:
        echo "no es una operacion valida \n";
        break;
    
}

echo "El resultado de la Operacion es: " . $result
    

?>