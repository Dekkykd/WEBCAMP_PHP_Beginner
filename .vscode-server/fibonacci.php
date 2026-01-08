<?php
$num1 = 0;
$num2 = 1;

echo $num1 . "    ";
echo $num2 . "    ";

$next = $num1 + $num2;

while (true) {
    echo $next . "    ";

    if ($next > 10000) {
        break;
    }

    $num1 = $num2;
    $num2 = $next;
    
    $next = $num1 + $num2;
}

echo "\n";
?>