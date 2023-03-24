<?php
function getFact($number,$result=1){
    if($number==0){
        echo"\n";
        echo"We are done.\n";
        return $result;
    }
    else{
        return getFact($number-1,$result* $number);
    }
}
echo getFact(5);