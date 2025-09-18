<?php
    $file = fopen("hello.txt","r");
    $f = "hello.txt";

    while(!feof($file))
    {
        $read = fgets($file);
        echo $read;
    }
?>