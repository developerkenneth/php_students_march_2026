<?php

if ($_SERVER['REQUEST_METHOD'] === "POST") {

    if (!empty($_FILES['picture'])) {

        $current_file = $_FILES['picture']['name'];
        $size = $_FILES['picture']['size'];
        $tmp = $_FILES['picture']['tmp_name'];

        $file_array = explode(".", $current_file);

        $ext = end($file_array);
        $new_file = time();
        $path = "uploaded/$new_file.$ext";

        if (move_uploaded_file($tmp, $path)) {
            echo "file was uploaded successfully.";
        }
    } else {
        echo "picture was not found";
    }
}
