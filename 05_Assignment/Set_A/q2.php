<?php
    $file = fopen("hello.txt","r");
    $f = "hello.txt";

    while(!feof($file))
    {
        $read = fgets($file);
        echo $read;
    }
    echo "<br>";
    $size = filesize($f);
    echo $size;
?>