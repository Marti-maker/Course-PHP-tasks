<?php
$text="noon";
$strLen=strlen($text);
$value=$strLen/2;
$startPoint=0;
$matches=0;

function isPalindrome($text,&$strLen,&$value,&$startPoint,&$matches){
  if($strLen%2!=0){
     echo"Don't need check this word is not Palindrome\n";
     return;
 }
  if($startPoint===$value){
      if($matches==$value){
          echo"This word $text is Palindrome\n";
      }
      else{
          echo"This word $text is not Palindrome\n";
      }
      echo "Recursion stopped.\n";

  }
  else{
      $textToCompare=$text[$strLen - $startPoint-1];
      if($text[$startPoint]==$textToCompare){
          $matches++;
          if($startPoint!=$strLen){
              $startPoint++;
          }
      }
      else{
          echo"This word is not Palindrome";
          return;
      }
      helpFunction($text,$strLen,$value,$startPoint,$matches);

  }

}
function helpFunction($text,$strLen,&$value,&$startPoint,&$matches)
{
    if ($strLen%2!=0) {
        echo "Don't need check this word is not Palindrome";
        return;
    }
    if ($startPoint === $value) {
        if ($matches == $value) {
            echo "This word $text is Palindrome\n";
        } else {
            echo "This word $text is not Palindrome\n";
        }
        echo "Recursion stopped.\n";

    } else {
        $textToCompare=$text[$strLen - $startPoint-1];
        if ($text[$startPoint] == $textToCompare) {
            $matches++;
            if ($startPoint != $strLen) {
                $startPoint++;
            }
        } else {
            echo "This word is not Palindrome";
            return;
        }
        isPalindrome($text, $strLen, $value, $startPoint, $matches);
    }
};
isPalindrome($text,$strLen,$value,$startPoint,$matches);