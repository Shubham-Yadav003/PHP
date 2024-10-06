<!-- <?php
function quad($a,$b,$c){
    $dis= $b*$b -4*$a*$c;

    if($dis>0){
        $root1= (-$b + sqrt($dis))/(2*$a);
        $root2= ($b - sqrt($dis))/(2*$a);

        return [$root1,$root2];
    }
    else if(root==0){
        $root= $b/2*$a;
        return [$root];
    }
    else{
        return [];
    }

}

$a=2;
$b=8;
$c=2;
$roots=quad($a,$b,$c);
//echo $roots;
echo "Roots: " . implode(', ', $roots);
?> -->


<?php
function solveQuadratic($a, $b, $c) {
    $discriminant = $b**2 - 4*$a*$c;

    if ($discriminant > 0) {
        $root1 = (-$b + sqrt($discriminant)) / (2*$a);
        $root2 = (-$b - sqrt($discriminant)) / (2*$a);
        return [$root1, $root2];
    } elseif ($discriminant == 0) {
        $root = -$b / (2*$a);
        return [$root];
    } else {
        // No real roots
        return [];
    }
}

// Example usage
$a = 2;
$b = 8;
$c = 2;
$roots = solveQuadratic($a, $b, $c);

// Print the roots
echo "Roots: " . implode(', ', $roots);
?>
