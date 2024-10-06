<?php

$var = 21.5;

var_dump(filter_var($var, FILTER_VALIDATE_INT));

$options = array("options"=> array("min_range"=>20 , "max_range"=> 40));

if(filter_var($var, FILTER_VALIDATE_INT, $options))

{
    echo "<br>  $var  is integer and in range";
}

else

{
    echo "<br> $var is not integer in specified range ";
}

?>