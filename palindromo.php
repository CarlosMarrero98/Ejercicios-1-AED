<?php
$palabra = readline("Introduce una palabra: ");
$longitud = strlen($palabra) - 1;
$esPalindromo = true;

for ($i = 0; $i < $longitud / 2; $i++) {
    if ($palabra[$i] != $palabra[$longitud - $i]) {
        $esPalindromo = false;
        break;
    }
}

if ($esPalindromo) {
    echo "La palabra '$palabra' es un palindromo\n";
} else {
    echo "La palabra '$palabra' no es un palindromo\n";
}
?>