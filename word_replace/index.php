<?php

if ($_SERVER['REQUEST_METHOD'] === "POST") {
    $key_word = $_POST['keyword'];
    $replace = $_POST['replace'];
    $post = $_POST['post'];

    str_replace($key_word, $replace, $post);

}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Replace Words</title>
</head>

<body>


    <h1>Form</h1>
    <form action="" method="post">


        <p>Post:</p>

        <textarea name="post" id="" cols="70" rows="10" placeholder="enter a word here..."></textarea>


        <p>word to replace:</p>
        <input type="text" name="keyword">

        <p>word to replace with:</p>
        <input type="search" name="replace">


        <button type="submit">Enter</button>


    </form>
</body>

</html>