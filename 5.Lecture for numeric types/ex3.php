<?php
$celsius=25;

function convertCelsiusToFahrenheit($value){
$fahrenheit=($value*9/5)+32;
echo "$value °C degrees Celsius converted to Fahrenheit is: $fahrenheit °F.";
}
convertCelsiusToFahrenheit($celsius);

?>