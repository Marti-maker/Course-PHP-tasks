<?php
$radiusOfCircle=5;

function getAreaOfCircle($raduis){
    return pi()*pow($raduis,2);
}

function getCircumference($raduis){
 return 2*pi()*$raduis;
}


$areaOfCircle=round(getAreaOfCircle($radiusOfCircle));
$circumference=round(getCircumference($radiusOfCircle));
echo "The area of circle is: $areaOfCircle and circumference is: $circumference with radius of: $radiusOfCircle.";
?>