<?php
require_once "FirstClass.php";
require_once "SecondClass.php";


// object
$first_class_object = new FirstClass() ;

echo $first_class_object->get_name(). "<br>";
echo $first_class_object->name. "<br>";

echo $first_class_object->get_balance(). "<br>";



$second_class_object = new SecondClass(25) ;

echo $second_class_object->get_age(). "<br>";
echo $second_class_object->get_balance(). "<br>";
echo $second_class_object->get_name(). "<br>";


$new_class_object = new SecondClass(45) ;

echo $new_class_object->get_age(). "<br>";

echo $second_class_object->get_age(). "<br>";

echo SecondClass::$pi. "<br>";
echo SecondClass::get_pi(). "<br>";