<?php
function fibonacci($n) {
    $num1 = 0;
    $num2 = 1;
    $next = 0;
    echo "Fibonacchi Series:" ;
    while ($next < $n) {
        echo  $num1 . ' ';
        $num3 = $num2 + $num1;
        $num1 = $num2;
        $num2 = $num3;
        $next++;
    }
}


$cnt = 10;
fibonacci($cnt);
?>

