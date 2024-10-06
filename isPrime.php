<?php

function isPrime($n){
   if($n==1 || $n==0){
    return false;
   } 
   for($i=2;$i<=sqrt($n);$i++){
    if($n%$i==0){
        return false;
    }
   }
   return true;
}
$N=50;
for($i=1;$i<=$N;$i++){
    if(isPrime($i)){
        echo "$i <br> ";
    }
}
?>