<?php

if(file_exists("files/hello.txt")){

        // open stream
        $file = fopen("files/hello.txt", "r"); 
        $file_size = filesize("files/hello.txt");
        // executing get
        $line = fgets($file, $file_size);

        echo $line ;
        fclose($file);

        // $content = file_get_contents("https://dummyjson.com/products");
        // $decode = json_decode($content, true);

        // var_dump($decode);

} else {
    echo "oops something went wrong";
}

