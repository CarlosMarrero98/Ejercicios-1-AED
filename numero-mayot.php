<?php

$num1 = readline("Introduce el primer número: ");
$num2 = readline("Introduce el segundo número: ");

$resultTxt = "Los numeros $num1 y $num2 son iguales\n";

if ($num1 < $num2) {
    $resultTxt = "El numero mayor es $num2\n";
} elseif ($num1 > $num2) {
    $resultTxt = "El numero mayor es $num1\n";
}

echo $resultTxt

?>