<?php
$name="Martin Yordanov";
$jobStatus="unemployed";
$age="21 years old";
$education="Pursuit Bachelor degree";
$homeTown="Bulgaria-Razgrad";
$living="Bulgaria-Sofia";

$businessCard=<<<CardBody
    Name: $name
    From: $homeTown
    Living: $living
    Age: $age
    Education: $education
    Job: $jobStatus
CardBody;

echo $businessCard;
?>