<?php
function missing($list){ 
//$list = array(1,2,3,5);
$range= range(min($list),max($list));
return array_diff($range, $list);
}

print_r(missing([1, 2, 3, 4, 7, 8]));