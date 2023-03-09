<?php
$firstValue=20;
$secondValue=21;

function comparison($value_1,$value_2){
    if($value_1>$value_2){
        return "$value_1 is greater than $value_2.";
}
    elseif($value_1<$value_2){
        return "$value_2 is greater than $value_1.";
}
    else{
        return "$value_1 is equal to $value_2";
}
}

$sentenceToShow=comparison($firstValue,$secondValue);
var_dump($sentenceToShow);
//var_dump(comparison($firstValue,$secondValue)); This works too.


?>