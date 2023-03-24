<?php

    $arrayForReturn=[];
    $firstValue=0;
    $secondValue=1;
function fibonacii($value,&$arrayForReturn,&$firstValue,&$secondValue){
    $weHitIt=$value;


    if($weHitIt==0){
    echo"Recursion stopped.\n";
    return $arrayForReturn;
    }
    else{
        if(count($arrayForReturn)==0){
            array_push($arrayForReturn,$firstValue,$secondValue);
            fibonacii($weHitIt-1,$arrayForReturn,$firstValue,$secondValue);
        }
        else{


            $thirdValueToPush=$firstValue+$secondValue;
            array_push($arrayForReturn,$thirdValueToPush);
            $firstValue=$secondValue;
            $secondValue=$thirdValueToPush;

            fibonacii($weHitIt-1,$arrayForReturn,$firstValue,$secondValue);
        }
    }
}



fibonacii(15,$arrayForReturn,$firstValue,$secondValue);

for($x=0;$x<count($arrayForReturn);$x++){
    $numToShow=$arrayForReturn[$x];
    if($x==0){
        echo "$numToShow,";
    }
    elseif($x==count($arrayForReturn)-1){
        echo" $numToShow";
    }
    else{
        echo " $numToShow,";
    }
}