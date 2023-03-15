<?php
$evenNumbers=0;
$index=1;

do {
    if($index%2 !=0){
        echo"$index ";
        $evenNumbers++;
    }
    $index++;
} while ($evenNumbers < 10);
?>