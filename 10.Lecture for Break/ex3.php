<?php
$hour=date('H');
$hour++;
$name="Мария";

while ($hour<230) {
    if($hour<=10 && $hour >=6)
    goto day;
    elseif($hour>=10&&$hour<=14){
        goto mid;
    }
    elseif($hour>=14&&$hour<=20){
        goto afternoon;
    }else{
        goto night;
    }
}



day:
echo"Добър утре $name.";

mid:
echo"Добър ден $name.";


afternoon:
echo"Добър ден $name."."\n"."Е как добър ден, то е вече ракиено време !?";

night:
echo "Добър вечер $name.";


?>