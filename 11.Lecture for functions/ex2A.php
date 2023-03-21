<?php
$one=1;
$two=2;
$three=3;
$four=4;
$five=5;

function average($valOne,$valTwo,$valThree,$valFour,$valFive){

    $howMany=func_num_args();
    $averageSum=($valOne+$valTwo+$valThree+$valFour+$valFive)/$howMany;
    return $averageSum;
}
$sum=average($one,$two,$three,$four,$five);
echo "The average sum of $one,$two,$three,$four,$five is :$sum";

?>