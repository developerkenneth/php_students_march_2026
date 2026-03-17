<?php

// for loop
/**
 * print 1 -> 100
 */

// 3 things to note in a loop
// initializer 
// condition
// final expression

for($i = 0; $i < 100 ; $i++ ){

    echo "$i, ";
}

// while loop

echo "<br><br>";

// initializer 
$init = 100;

while ($init > 0){

echo "$init, ";
        //final expression
        $init-- ;
}

echo "<br><br>";

// do while loops
$count = 0;
do{
    echo " $count, ";
    $count++;
}while($count < 10);


