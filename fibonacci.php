<?php
$prev = 0;
$current = 1; 

for($i = 1; $i <= 20; $i++) {
    if ($i == 1) {
        echo "$prev ";
    }elseif ($i == 2) {
        echo "$current ";
    }else {
        $next = $prev + $current;
        echo "$next ";
        $prev = $current;
        $current = $next;
    }
}

echo "\n";
?>