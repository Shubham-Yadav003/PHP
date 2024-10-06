<?php
$value= 408;
$total=0;
$num=$value;
while($num!=0){
    $rem= $num%10;
    $total=$total+$rem*$rem*$rem;
    $num= $num/10;
}
if($total==$value){
    echo "Yes";
}
else{
    echo "No";
}
?>