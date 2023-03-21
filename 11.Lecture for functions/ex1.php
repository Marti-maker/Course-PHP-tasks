<?php
echo "Put string \n";
 $line = readline();
$stringLenght=strlen($line);
echo"$line lenght is:$stringLenght \n";


$arrauOfWords=explode(" ",$line);
print_r($arrauOfWords);
?>