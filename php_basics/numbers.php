<?php

// casting

$fake_number = "4";

$number = (int) $fake_number;

var_dump($fake_number);
echo "<br>";
var_dump($number);
echo "<br>";
$greetings  = "hello world";
$new_number = (int) $greetings;

var_dump($greetings);
echo "<br>";
var_dump($new_number);
echo "<br>";

if(is_int($fake_number)){
    echo "it is an integer";
    echo "<br>";
}else{
    echo " it is not an integer";
    echo "<br>";
}

if(is_int($number)){
    echo "it is an integer";
    echo "<br>";
}else{
    echo " it is not an integer";
    echo "<br>";
}

if(is_float($number)){
    echo "it is a float";
    echo "<br>";
}else{
    echo " it is not a float";
    echo "<br>";
}

if(is_numeric("67")){
    echo "it is number";
    echo "<br>";
}else{
    echo " it is not a number";
    echo "<br>";
}

$height = "6'2";

$height_number = intval($height);

var_dump($height);
echo "<br>";
var_dump($height_number);
echo "<br>";