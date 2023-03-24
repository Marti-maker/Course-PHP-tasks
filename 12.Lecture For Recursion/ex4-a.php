<?php
$firstFibo=0;
$secondFibo=1;
function fibonaci($number,&$firstFibo,&$secondFibo){
if($number==0){
    echo "\n";
    echo "We are done.";
}
else{
    $thirdFibo=$firstFibo+$secondFibo;
    if($firstFibo==0){
        echo"$firstFibo,$secondFibo";
        $firstFibo=$secondFibo;
        $secondFibo=$thirdFibo;
            $number--;
        return fibonaci($number,$firstFibo,$secondFibo);
    }
    $firstFibo=$secondFibo;
    $secondFibo=$thirdFibo;
    $number--;
    echo",$secondFibo";
    return fibonaci($number,$firstFibo,$secondFibo);
}
}

fibonaci(5,$firstFibo,$secondFibo);