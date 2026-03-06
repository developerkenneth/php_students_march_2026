<?php


    $greeting = 'Hello world';
    $name = "my name is kenneth";
    $remarks = "I love you all so much.";

    // concatination
    $complete_greeting = $greeting.' '.$name;


    // template strings
    $all_greetings = "<br> $greeting, $name, $remarks hope php will be every easy";

    print $complete_greeting;
    echo $all_greetings;


    // strings function
    echo strtoupper($greeting); //procedural
    // $string.upperCase(); //object oreinted 

    echo "<br>".strtolower($greeting); //lower the casing of a string

    echo "<br>". strlen($greeting); //return the length of s string

    // checks if a sub string appears in a particular string
    echo "<br>".str_contains($remarks, "love");

    // a string position 
    echo "<br>".strpos($all_greetings, "world");

    $about_us = "I am a boy, and I am 28 years and I am good to go ";
    echo "<br>".str_replace("world", "digital dreams", $greeting);

    echo "<br>". $about_us;
    echo "<br>". str_replace("I am", "you are", $about_us);

    // sub str... creaying string from another string

    echo "<br>".substr($about_us, 0, 23);
?>