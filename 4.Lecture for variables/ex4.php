<?php
$shortSide=7.5;
$biggerSide=12;

function areaOfRectangle($valueOne,$valueTwo){

    $valueNeedToReturn = $valueOne * $valueTwo;
    return "$valueNeedToReturn \n";
}
function perimeterOfRectangle($valueOne,$valueTwo){
    $valueNeedToReturn = 2*$valueOne + 2*$valueTwo;
    return "$valueNeedToReturn \n";
}

echo (areaOfRectangle($shortSide,$biggerSide));
echo(perimeterOfRectangle($shortSide,$biggerSide));

?>