<?php

$students = ['Sunday', 'Benjamin', 'Daniel'];
$ballers = array('Daniel', 'Uche', "Osimhen");
$numbers = [4, 7, 38, 9, 45];

// adding array elements
array_push($ballers, "Ronaldo");
$ballers[] = "Palmer";


// removing array elements
array_pop($ballers);
unset($ballers[0]);

// associatives array
$person = [
    "name" => "kenneth",
    "age" => 56,
    "height" => "6'1"
];


// embedding arrays in array
$users = [
    [
        "id" => 1,
        "username" => "kenneth",
        "email" => "kenneth123@email.com",
        "password" => "password123",
        "friends" => [
            "John",
            "Success",
            "Agata"
        ]
    ],
    [
        "id" => 2,
        "username" => "john",
        "email" => "john123@email.com",
        "password" => "password**",
        "friends" => [
            "Chibuzo",
            "OLivia",
            "Nedu"
        ]
    ]
]
?>

<pre>
<?php
// var_dump($students);
// echo "<br><br><br>";
// var_dump($ballers);
// echo "<br><br><br>";
// var_dump($numbers);
// var_dump($person);

var_dump($users);
?>
</pre>

<!-- accessing array values -->
<p><?= $students[0] ?></p>
<p><?= $person["name"] ?></p>
<p><?= $person["age"] ?></p>
<p><?= $users[0]['friends'][1] ;?></p>