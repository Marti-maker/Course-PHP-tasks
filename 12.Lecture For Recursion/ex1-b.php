<?php
$sum=[];
$realSum=0;
function fact($value,&$sum,&$realSum){
    if($value==0){
        echo"Recursion stopped \n";
        for($x=0;$x<count($sum);$x++){
            if($x==0){
                $realSum=$sum[$x];
            }
            else{
              $realSum=$realSum*$sum[$x];
            }
        }
        echo $realSum;
        return;
    }
    else{
        array_push($sum,$value);
        fact($value-1,$sum,$realSum);

    }
}
fact(20,$sum,$realSum);