<?php
$startPoint=0;
$sumToReturn=0;
function getSumOfInt(int $value,&$startPoint,&$sumToReturn){
 $convert=(string)$value;
if($startPoint==strlen($convert)){
    echo "We are done.\n";
    return $sumToReturn;
}
 if($value==0){
     return 0;
 }
 else{
     $sumToReturn+=intval($convert[$startPoint]);
     //вместо със стартПоинт може да игнорирам първата буква в инта който е конвертиран в стринг и да дам останалите числа като аргумент просто ми се вижда ненужно усложнение
     $startPoint++;

     return  getSumOfInt($value,$startPoint,$sumToReturn);
 }
}
echo(getSumOfInt(24444,$startPoint,$sumToReturn));
