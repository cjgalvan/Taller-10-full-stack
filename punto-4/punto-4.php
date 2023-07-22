<?php

const TICKET_PRICE = 25000;

$membershipType = "";
$personNumber = 0;


// PROCESO
echo "Digite Tipo de Afiliacion: ";
fscanf (STDIN, "%s", $membershipType);

echo "Cuantas personas ingresan: ";
fscanf (STDIN, "%d", $personNumber);

$totalPay = $personNumber * TICKET_PRICE;

$memberUpper = strtoupper ($membershipType);

switch($memberUpper){
    
    case 'A':
        $totalPay = $totalPay -($totalPay * 0.3);
        break;
        
    case 'B':
        $totalPay = $totalPay -($totalPay * 0.25);
        break;
    
    case 'C':
        $totalPay = $totalPay -($totalPay * 0.10);
        break;
        
    case 'D':
        $totalPay = $totalPay -($totalPay * 0.05);
        break;
        
    default:
        echo "Usted no cuenta con membresia con descuento";
        break;
}

echo "El valor a pagar es: " . $totalPay;



?>