<?php
$firstValue=7;
$secondValue=10;


function math($valueOne,$valueTwo){
   
    $sum=$valueOne+$valueTwo;
   

    $subtraction=$valueOne-$valueTwo;
  

    $multiplication=$valueOne*$valueTwo;


    $devision=$valueOne/$valueTwo;
   
   

    echo "The sum of these two values $valueOne and $valueTwo is: $sum, their subtraction is $subtraction,
 multiplication is $multiplication and their devision is $devision .";

}

math($firstValue,$secondValue);


?>