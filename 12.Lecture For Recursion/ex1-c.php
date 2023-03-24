<?php
$howMany=0;
function howNumbers($value,&$howMany){

    if($value<=0){
        echo "Recursion stopped.\n";
        echo "Total numbers are: $howMany ";
        return;

    }
    else{
        $howMany++;
        howNumbers(intval($value/10),$howMany);
    }
}

howNumbers(255651,$howMany);