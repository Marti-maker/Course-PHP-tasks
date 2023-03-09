<?php
$a=1;
$b=2;
$c=3;
$howMany=1;

function timesToMoveRight($a,$b,$c,$howMany){
    for ($i=0; $i < $howMany; $i++) { 
        $d=0;
        $d=$c;
        $c=$b;
        $b=$a;
        $a=$d;
    }
    

    return ["a=$a","b=$b","c=$c"];
    

}
print_r(timesToMoveRight($a,$b,$c,$howMany));


?>
