<?php

$students = ['Prince', 'Olisa', 'Benjamin', 'Daniel', 'Sunday', 'Uche'];
$count = count($students);


for($i = 0 ; $i < $count; $i++){
    echo $students[$i]. "<br>";
}

echo "<hr>";

$cats = [
    "john" => "klo",
    "uche" => "son",
    "daniel" => "catty"
];

// array loop
foreach($cats as $cat){

        echo " $cat <br>";

}

// array loop
foreach($cats as $key => $value){

        echo " $key === $value <br>";

}