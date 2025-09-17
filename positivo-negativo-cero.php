<?php

$num = 12;

$resultTxt = "El numero es cero\n";

if ($num < 0) {
    $resultTxt = "El numero $num es negativo\n";
}elseif ($num > 0) {
    $resultTxt = "El numero $num es positivo\n";
}

echo $resultTxt;

?>