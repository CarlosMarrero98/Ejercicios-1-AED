<?php
$num1 = readline("Escribe un numero ");
$num2 = readline("Escribe un numero ");

$menor = min($num1, $num2);
$mcd = 1;

for($i = 1; $i <= $menor; $i++) {
    if($num1 % $i == 0 && $num2 % $i == 0) {
        $mcd = $i;
    }
}

echo "El MCD de $num1 y $num2 es $mcd\n";
?>