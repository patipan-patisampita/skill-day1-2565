<?php
//1.Ternary Operator
$x = 10;
$result  = $x > 9 ? "true" : "false";
echo $result."<br>";

//2.Shorthand Ternary Operator
$path ='/about';
$url = $path ?:'/';

echo $url;
?>