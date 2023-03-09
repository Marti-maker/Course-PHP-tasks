<?php
$intValueOne=5;
$intValueTwo=10;

$floatValueOne=5.5;
$floatValueTwo=10.5;

function addition($valueOne,$valueTwo){
    $valueNeedToReturn = $valueOne+=$valueTwo;
    return "$valueNeedToReturn \n";
}
echo(addition($intValueOne,$floatValueOne));
echo(addition($intValueTwo,$floatValueTwo));
echo(addition($intValueOne,$floatValueTwo));


?>