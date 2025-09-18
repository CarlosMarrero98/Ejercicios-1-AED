<?php
$num = readline("Introduce un numero: ");


$sum = 0;
for ($i = 1; $i < $num; $i++) {
    if ($num % $i == 0) {
        $sum += $i;
    }
}

if ($sum == $num) {
    echo "El $num es un numero perfecto\n";
} else {
    echo "El $num no es un numero perfecto\n";
}
?>