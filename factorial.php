<?php
$num = readline("Escribe un numero ");
$factorial = 1;

for($i = $num; $i > 0; $i--) {
    $factorial *= $i;
}

echo "El factorial de $num es $factorial\n";
?>