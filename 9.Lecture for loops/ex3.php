<?php
$numberToSum="123456";
$a=0;
$sum=0;
do {
    $getNumberToAdd=$numberToSum[$a];
    $sum+=intval($getNumberToAdd);
    $a++;
} while ($a < strlen($numberToSum));
var_dump($sum);

?>