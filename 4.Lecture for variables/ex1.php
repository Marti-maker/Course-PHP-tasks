<?php

$first="code";
$second=5;
$third=10.5;
$fourth=false;
$fifth=["we","love","code","academy"];

function boolToString($value){
    if($value===true){
        return 'true';
    }
    if($value===false){
        return 'false';
    }
    return $value;
}


function showValue($first,$second,$third,$fourth,$fifth){
     echo "$first\n";
     echo "$second\n";
     echo "$third\n";
     $boolString = boolToString($fourth);
     echo "$boolString\n";
   
     foreach($fifth as $str){
        echo "$str ";
     };
};

showValue($first,$second,$third,$fourth,$fifth);

?>