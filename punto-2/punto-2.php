<?php
$age = 0;
$name = "";

//
echo "digite su Nombre: ";
fscanf (STDIN, "%s", $name);

echo "digite su edad:";
fscanf (STDIN, "%d", $age);

if ($age >= 18 ){
    echo "usted es mayor de edad ";
}
else{
    echo "Usted no es mayor de edad ";
}

print "El nombre es: "." ". $name . " ". "y tienes"." ". $age. " ". "años";
    

?>