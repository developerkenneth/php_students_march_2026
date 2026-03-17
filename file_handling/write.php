<?php

if(file_exists("files/hello.txt")){

        // open stream
        $file = fopen("files/file_2.txt", "w"); //w overwrites file, appends to the file.
        $greetings = "Hello world! \n<br> I love Nigeria with all. \n<br>";
        // executing write
        fwrite($file, $greetings);
        fclose($file);

} else {
    echo "oops something went wrong";
}

