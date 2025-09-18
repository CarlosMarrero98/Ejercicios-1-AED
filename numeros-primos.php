<?php

for ($num = 2; $num <= 50; $num++) {
    $primo = true;
    $divisor = 2;

    while ($divisor * $divisor <= $num && $primo) {
        if ($num % $divisor == 0) {
            $primo = false;
        }
        $divisor++;
    }

    if ($primo) {
        echo "$num ";
    }
}

echo "\n";

?>