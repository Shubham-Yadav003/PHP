<?php
function findRoots($a, $b, $c) {
    
    $discriminant = $b * $b - 4 * $a * $c;

    
    if ($discriminant > 0) {
       
        $root1 = (-$b + sqrt($discriminant)) / (2 * $a);
        $root2 = (-$b - sqrt($discriminant)) / (2 * $a);
        echo "Roots are: $root1 and $root2";
    } elseif ($discriminant == 0) {
      
        $root = -$b / (2 * $a);
        echo "Root is: $root";
    } else {
     
        $realPart = -$b / (2 * $a);
        $imaginaryPart = sqrt(-$discriminant) / (2 * $a);
        echo "Roots are: $realPart + {$imaginaryPart}i and $realPart - {$imaginaryPart}i";
    }
}


$a = 2;
$b = 1;
$c = 2;
findRoots($a, $b, $c); 
