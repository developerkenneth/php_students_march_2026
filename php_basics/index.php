<?php 
    // valid php script
    // first var
    
    $greeting = "Hello World";
    $page_title = "PHP class";

    // printing out result
    // print($greeting);
    // echo($greeting);
    // echo $greeting;
    // print $greeting;

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= $page_title  ?></title>
</head>
<body>
    
<h1>Hello world</h1>
<h1><?php print($greeting);  ?> welcome to our first <?= $page_title ?></h1>
</body>
</html>