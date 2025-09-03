<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="q3.php" method="POST">
        Enter First String: <input type="text" name="str1">
        Enter Second String: <input type="text" name="str2"> <br><br><br>

        <input type="radio" name="r" value="1"> Find the small string Appears at start of the large string <br>
        <input type="radio" name="r" value="2"> Find the position of the small string in the big string <br>
        <input type="radio" name="r" value="3"> Compare both the string for 1st n char. also comparison not be case <br>
        
        <input type="submit" value="Submit"> 
    </form>
</body>
</html>

<?php 
    $a = $_POST["str1"];
    $b = $_POST["str2"];
    $ch = $_POST["r"];

    switch($ch)
    {
        case 1: $pos = strpos($b, $a);
            if($pos != 0)
                echo "String 2 not present at the start of the string 1";
            else
                echo "String 2 is present at the start of the string 1";
            break;

        case 2: $pos = strpos($a, $b);
            echo $pos;
            break;

        case 3: $pos = strcasecmp($a, $b);
            echo $pos;
            break;
    }
?>