<?php
$number="2563";
$stringToShow="";

for ($i=0; $i <strlen($number) ; $i++) { 
     if($i==strlen($number)-1){
        $numToAdd=$number[$i];
        $stringToShow .=" $numToAdd";
        
     }
     if($i!=0 && $i !=strlen($number)-1){
        $numToAdd=$number[$i];
        $stringToShow .=" $numToAdd,";
     }
     if($i==0){
         $numToAdd=$number[$i];
         $stringToShow.="$numToAdd,";

     }
}
echo $stringToShow;

?>