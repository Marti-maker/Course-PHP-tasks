<?php



$result = 0b111100>>(255&~252);

echo chr($result);



//0b111100 = 60 in decimal
//255 is decimal that is max value of 8bit=0b11111111
//252=0b11111100
//~ bitwise operators, it converts the operand to a 32-bit signed integer
//& bitwase and operator result of these two = 3
//>> shifting bits 



?>
