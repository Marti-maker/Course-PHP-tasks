<?php
$b=["a","b","c","d","e"];
$c=0;

for ($i=0; $i <5 ; $i++) { 
   var_dump($i);
}

foreach ($b as $key => $value) {
   var_dump($value);
}
while ($c<5) {
   var_dump($c);
  $c++;
}
do {
    var_dump($c);
    $c++;
} while ($c <= 5);

?>