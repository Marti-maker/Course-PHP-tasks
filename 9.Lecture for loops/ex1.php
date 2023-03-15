<?php
    $oddNumbers=0;
    for ($i=0; $oddNumbers < 10 ; $i++) { 
        if($i%2==0){
            echo " $i";
            $oddNumbers++;
        }
        else{
            continue;
        }
    }

?>