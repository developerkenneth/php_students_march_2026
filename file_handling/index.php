<?php

/**
    $file = fopen("example.txt", "r");
    fclose($file);
    | 'r' | Read only. Starts at the beginning of the file. |
    | 'w' | Write only. Overwrites the file or creates a new one if it doesn't exist. |
    | 'a' | Append. Writes data to the end of the file. |
    | 'x' | Create. Creates a new file for write only. Returns false if file exists. |
    fread($handle, $length): Reads a specific number of bytes.
    fgets($handle): Reads a single line. Great for looping through large files.
    file_get_contents($path): The "shortcut." It reads the entire file into a string in one go.
    frwite($handle, $write);
    file_exists("test.txt"): Checks if the file is actually there.
    filesize("test.txt"): Returns the size in bytes.
    unlink("test.txt"): Deletes a file (use with caution!).
    is_writable("test.txt"): Checks if the server permissions allow you to change the file.
 */


    $handle = fopen("files/hello.txt","r");
    $file_size = filesize("files/hello.txt");
    $read = fread($handle, $file_size );
    echo  $read;
    fclose($handle);

