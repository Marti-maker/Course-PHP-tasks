<?php
$value1=378;
$value2=1537;
$value3=2023;
$value4=125926;

$is_1_DividedBy3=($value1%3==0);
$is_2_DividedBy3=($value2%3==0);
$is_3_DividedBy3=($value3%3==0);
$is_4_DividedBy3=($value4%3==0);

echo $is_1_DividedBy3 ? "The $value1 is divided by 3.\n" : "The $value1 isn't divided by 3.\n";
echo $is_2_DividedBy3 ? "The $value2 is divided by 3.\n" : "The $value2 isn't divided by 3.\n";
echo $is_3_DividedBy3 ? "The $value3 is divided by 3.\n" : "The $value3 isn't divided by 3.\n";
echo $is_4_DividedBy3 ? "The $value4 is divided by 3.\n" : "The $value4 isn't divided by 3.\n";
?>