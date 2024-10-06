<?php
function isVowel($letter){
    $letter=strtolower($letter);
    if(
        $letter=="a" || $letter=="e" || $letter=="i" || $letter=="o" || $letter=="u"
    ){
        return true;
    }
    else{
        return false;
    }
}

$letter= "T";
if(isVowel($letter)){
    echo "$letter is a vowel";
}
else{
    echo "$letter is a consonent";
}
?>