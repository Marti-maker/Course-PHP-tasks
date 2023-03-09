<?php
$howManyOddNumbers=0;
$sumOfOddNumbers=0;
for ($i=0; $i < 100; $i++) { 

    if($howManyOddNumbers<=10){
        if($i%2==0){
            $sumOfOddNumbers +=$i;
            $howManyOddNumbers++;
        }
        else{
            continue;
        }
    }
    else{
        break;
    }
}
echo"Sum of the first 10 odd numbers is : $sumOfOddNumbers.";
//2,4,6,8,10,12,14,16,18,20=12+18+26+34+20=50+60
?>