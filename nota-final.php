<?php

$grade = readline("Cual fue su nota? ");

if ($grade >= 9) {
    echo "Sobresaliente\n";
} elseif ($grade >= 7) {
    echo "Notable\n";
} elseif ($grade >= 5) {
    echo "Aprobado\n";
} else {
    echo "Suspenso\n";
}

?>