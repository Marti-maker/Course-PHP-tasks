<?php

$dayNow="FrIdAy";


function whatHaveToSay($day){
    $equalHigh=strtolower($day);
   // var_dump($equalHigh);
    if($equalHigh =="monday" || $equalHigh =="tuesday" || $equalHigh =="wednesday" ||  $equalHigh =="thursday" || $equalHigh =="friday"){
                if($equalHigh=="friday"){
                    echo"Спорна работа!";
                    echo"Още малкоо..";
                }
                else{
                    echo"Спорна работа!";
                }
    }
    elseif($equalHigh=="saturday" ||  $equalHigh=="sunday"){
        echo"Весел уикенд!";
    }
    else{
        echo"Напиши ден от седмицата иначе няма как да тръгне...";
    }

}

whatHaveToSay($dayNow);
?>