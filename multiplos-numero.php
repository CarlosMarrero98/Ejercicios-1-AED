<?php
$num = readline("Escribe un numero ");

for ($i = 0; $i * $num <= 100; $i++) {
    $multiplo = $i * $num;
    echo "$multiplo ";
}

echo "\n";
?>