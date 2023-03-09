<?php
$firstRadical=121;
$secondRadical=144;
$thirdRadical=225;


function getRadical($firstValue,$secondValue,$thirdValue){
    $_radiOne=sqrt($firstValue);
    $_radiTwo=sqrt($secondValue);
    $_radiThird=sqrt($thirdValue);

    return ["Radical of $firstValue is:$_radiOne","Radical of $secondValue is:$_radiTwo","Radical of $thirdValue is:$_radiThird"];

}

print_r(getRadical($firstRadical,$secondRadical,$thirdRadical));

?>