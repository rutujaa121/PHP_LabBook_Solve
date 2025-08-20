<?php
    $fname=create_function('$a,$b', '$c=$a+$b; return $c;');
    echo $fname(5, 10);
?>