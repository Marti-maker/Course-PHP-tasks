<?php
$howMany=10;
$arrayForLoop=getArray($howMany);



function getArray($howMany){
    $arrayToReturn=[];
        for ($i=1; $i <=$howMany ; $i++) { 
            array_push($arrayToReturn,$i);
        }
    return $arrayToReturn;
}

foreach ($arrayForLoop as $key => $value) {
    //echo"key:$key-value:$value\n";
    echo"$value\n";
}

//var_dump($arrayForLoop);
?>