<?php
$str="ABCDDCBA";

function is_palindrome($string){
    $lenghtOfString=strlen($string);

    for ($i=0; $i <$lenghtOfString/2 ; $i++) {
        if($string[$i] !==$string[$lenghtOfString-$i-1]){
            return false;
        } 

    }
    return true;
    
}

$result="";
if(is_palindrome($str)==1){
    $result="True";
}
else{
    $result="False";
}
echo "The string $str is palindrome :$result."
?>
