<?php
$numRand = rand(1, 20);

do {
    $intento = readline("Introduce tu numero: ");

    if ($intento < $numRand) {
        echo "Mayor\n";
    } elseif ($intento > $numRand) {
        echo "Menor\n";
    } else {
        echo "¡Correcto! El numero era $numRand\n";
    }
} while ($intento != $numRand);
?>