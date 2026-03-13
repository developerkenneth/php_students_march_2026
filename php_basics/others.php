<?php

$number = 5 ;

$number+= 5;

echo $number . "<br>";

$greetings = "hello world";
$greetings.= ". welcome to digitals dreams";

echo "<p> $greetings </p>";


// defining constant variable

const age = 25;

echo age ;


// another of defining constants

define("SETTINS", "<P>settings completed</p>");

echo SETTINS;

define("GREET", $greetings);

echo GREET;

define("AGE", 56);

echo AGE;