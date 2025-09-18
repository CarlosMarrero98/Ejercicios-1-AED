<?php
$num = readline("Introduce un numero: ");
$invertido = 0;

while ($num > 0) {
    $digito = $num % 10;
    $invertido = $invertido * 10 + $digito;
    $num = (int) ($num / 10);
}

echo "Numero invertido: $invertido\n";
?>