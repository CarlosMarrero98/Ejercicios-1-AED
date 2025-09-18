<?php
$sumPar = 0;
$sumImpr = 0;

for($i = 0; $i <= 100; $i++) {
    if($i % 2 == 0) {
        $sumPar = $sumPar + $i;
    }else {
        $sumImpr = $sumImpr + $i;
    }
}
echo "La suma de los numeros pares es $sumPar\n";
echo "La suma de los numeros inpares es $sumImpr\n";
?>