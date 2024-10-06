

<?php
function static_var()
{
    static $num1=2;
    $num2 =5;
    $num1++;
    $num2++;
    echo"static:".$num1 ."</br>";
    echo "non-static:" .$num2 ."</br>";
}

static_var();
static_var();
static_var();
?>