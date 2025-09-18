<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="q1.php" method="post">
        Enter the name: <input type="text" name="n"> <br><br>
        1. Display the type of file.  <br>
        2. Display last modified time of file. <br>
        3. Display the size of file. <br>
        4. Delete the file. <br><br>

        Enter Choice : <input type="text" name="c"> 
        <input type="submit" value="Submit"> 
    </form>
</body>
</html>

<?php
    $f = $_POST['a'];
    $c = $_POST['c'];

    switch($ch)
    {
        case 1:
            echo "File Type : ".filetype($f);
            break;
        case 2:
            echo "Last Modified Time : ".fileatime($f);
            break;
        case 3: 
            echo "File Size : ".filesize($f);
            break;
        case 4:if(file_exists($f))
            {
                unlink($f);
                echo "file deleted";
            }
            else
            {
                echo "file does not exist";
            }
            break;
    }
?>