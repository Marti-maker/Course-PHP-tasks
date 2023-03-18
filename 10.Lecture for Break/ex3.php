<?php
$hour=date('H');
$hour++;
$name="Мария";

function  checkTheTime($hour){
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
checkTheTime($hour)

day:
echo"Добър утре $name.";

mid:
echo"Добър ден $name.";


afternoon:
echo"Добър ден $name."."/n"."Е как добър ден, то е вече ракиено време !?";

night:
echo "Добър вечер $name.";

//syntax error, unexpected identifier това ми излиза на всяко goto не мога да разбера защо
?>