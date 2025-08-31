<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="q2.php" method="POST">
        Enter String : <input type="text" name="str"> <br>
        <input type="radio" name="r" value="1"> Length of String <br>
        <input type="radio" name="r" value="2"> Count total no. of vowels <br>
        <input type="radio" name="r" value="3"> Convert given string to lowercase and title case <br>
        <input type="radio" name="r" value="4"> Pad String with "*" from both sides <br>
        <input type="radio" name="r" value="5"> remove the leading whitespace  <br>
        <input type="radio" name="r" value="6"> Find the reverse of the string  <br>
        <input type="submit" value="Submit">
    </form>
</body>
</html>

<?php 
    $string = $_POST['str'];
    $ch = $_POST['r'];

    switch($ch){
        case 1:
            strlength($string);
            break;
        case 2:
            countv($string);
            break;
        // case 3:
        //     lowercase($string);
        //     break;
        // case 4:
        //     padboth($string);
        //     break;
        // case 5:
        //     remove($string);
        //     break;
        // case 6:
        //     reverse($string);
        //     break;
    }
    function strlength($string)
    {
        $strlength = 0;
        while($string [$strlength]!=null)
        {
            $strlength ++;
        }
        echo $strlength;
    }
    function countv($string)
    {
        $countv = 0;
        $vowels = array('a', 'e', 'i', 'o', 'u', 'A', 'E', 'I', 'O', 'U');
    }
?>