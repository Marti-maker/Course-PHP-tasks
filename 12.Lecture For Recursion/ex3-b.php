<?php
$point="";
function reverseString($stringVal,&$point){


    if(strlen($stringVal)==0){
        echo "$point \n";
        echo "We are done here \n";
        return;
    }
    else{
        $compare=$stringVal[strlen($stringVal)-1];
        if($compare=="!"||$compare=="?"||$compare=="."){
            $point=$compare;
            $lastLetter = substr($stringVal, -1);
            $newString = substr($stringVal, 0, -1);
            reverseString($newString,$point);
        }
        else{
            $lastLetter = substr($stringVal, -1);
            $newString = substr($stringVal, 0, -1);
            echo $lastLetter;
            reverseString($newString,$point);
        }
    }


}
reverseString("Okay mate!",$point);

