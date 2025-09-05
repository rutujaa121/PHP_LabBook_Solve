<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        body{
            display: flex;
            text-align: center;
            justify-content: center;
            /* flex-direction: column; */
        }
        form{
            display: flex;
            align-items: center;
            justify-content: center;
            flex-direction: column;
            gap: 10px;
            font-size: 20px;
            color: royalblue;
        }
        input{
            width: 300px;
            height: 30px;
            border-radius: 5px;
            padding-left: 10px;
            outline: none;
            border: 1px solid gray;
            background-color: lightgrey;
        }
        input[type="submit"]{
            width: 300px;
            height: 40px;
            background-color: rgb(2, 2, 110);
            color: white;
            font-weight: bold;
            cursor: pointer;
            margin-top: 20px;
            font-size: 18px;
        }
        input[type="submit"]:hover{
            background-color: rgb(0, 0, 255);
        }

    </style>
</head>
<body>
    <form action="q3.php" method="POST">
        Enter the name of the Student: <input type="text" name="t1"> 
        Enter the name of the College: <input type="text" name="t2">
        Enter your Greeting Message: <input type="text" name="t3">

        <input type="submit" value="Submit">
    </form>
</body>
</html>

<?php
    $a = $_POST['t1'];
    $b = $_POST['t2'];
    $c = $_POST['t3'];

    function dispaly($c, $a, $b)
    {
        if($c === null or $a === null or $b === null)
            echo "Welcome";

        else
            echo $c." ".$a." from ".$b;
    }
    dispaly($c, $a, $b);
?>