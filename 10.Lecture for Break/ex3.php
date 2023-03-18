<?php
$hour=date('H');
$hour++;
$name="Мария";
$isItSay=0;

while ($hour<230) {
    if($hour<=10 && $hour >=6)
    goto day;
    elseif($hour>10 && $hour<=14){
        goto mid;
    }
    elseif($hour>14 && $hour<=20){
        goto afternoon;
    }else{
        goto night;
    }
}
day:
while ($isItSay<1) {
    
echo"Добро утре $name.";
$isItSay++;
}
mid:
while ($isItSay<1) {
    
echo"Добър ден $name.";

$isItSay++;
}
afternoon:
while ($isItSay<1) {
    
echo"Добър ден $name."."\n"."Е как добър ден, то е вече ракиено време !?";
$isItSay++;
}
night:
while ($isItSay<1) {
  
echo "Добър вечер $name.";
$isItSay++;
}






?>