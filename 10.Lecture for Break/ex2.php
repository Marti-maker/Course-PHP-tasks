<?php
$for=20;
function getArray($howMany){
    $arrayForReturn=[];
    for ($i=1; $i <=$howMany ; $i++) { 
        array_push($arrayForReturn,$i);
    }
    return $arrayForReturn;
}
$myArray=getArray($for);
$hitTheNumber=0;
for ($i=0; $i <count($myArray) ; $i++) { 
    
    if($myArray[$i]==10){
        continue;
    }
    if($myArray[$i]%2==0){
        echo "$myArray[$i]"."\n";
        $hitTheNumber++;
    }
    if($hitTheNumber==5){
        break;
    }

}
?>