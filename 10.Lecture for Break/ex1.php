<?php
date_default_timezone_set('UTC');
$timestamp= strtotime('March 2023');
$first= date('m-01-Y', $timestamp);
$last= date('m-t-Y', $timestamp);


$lastDay=intval("$last[3]"."$last[4]");

for ($i=1; $i <=$lastDay ; $i++) { 
    
    if(date("l",mktime(0,0,0,3,$i,2023))=="Saturday"){ 
        continue;
    }
    elseif(date("l",mktime(0,0,0,3,$i,2023))=="Sunday"){
        continue;
    }
    else{
        echo(date("M-d-Y",mktime(0,0,0,3,$i,2023))."\n");

    }
    
};

?>