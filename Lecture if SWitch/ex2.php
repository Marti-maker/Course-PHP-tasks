<?php
    $person="Г-жа Николовa";
    
    $cheat=explode(' ',$person);
   // var_dump($cheat);
    $iLovePhpBuiltInFunctions=$cheat[0];
    $surname=$cheat[1];

     switch($iLovePhpBuiltInFunctions){
     case("Г-н") :
        echo"Здравейте $iLovePhpBuiltInFunctions $surname , ето там ви е колата!";
        break;
    case("Г-ца"):
        echo"Кажете здравей на $iLovePhpBuiltInFunctions $surname";
        break;
    case("Г-жа"):
        echo"Спомняш ли си $iLovePhpBuiltInFunctions $surname? Да, тя беше добър учител!";
        break;
    case("Д-р"):
        echo"Добър ден  $iLovePhpBuiltInFunctions $surname ,изпитвам ужасни болки в коляното ми от вече има няма седмица.";
        break;
    default:
            echo"Здравей ";
        }

?>

<!-- -ето и с if-else statement.
<?php
$person="Г-жа Николовa";
    
$cheat=explode(' ',$person);

$prefix=$cheat[0];
$surname=$cheat[1];

if($prefix=="Г-н"){
    echo"Здравейте $prefix $surname , ето там ви е колата!";
}
elseif($prefix=="Г-ца"){
    echo"Кажете здравей на $prefix $surname";
}
elseif($prefix=="Г-жа"){
    echo"Спомняш ли си $prefix $surname? Да, тя беше добър учител!";
}
elseif($prefix=="Д-р"){
    echo"Добър ден  $prefix $surname ,изпитвам ужасни болки в коляното ми от вече има няма седмица.";
}
else{
echo"Здравей";
}
?>
 -->