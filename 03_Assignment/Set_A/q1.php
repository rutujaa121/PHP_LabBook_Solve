<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <fieldset>
        <legend>Integers</legend>
        <form action="q1a.php" method="POST">
            <input type="number" name="t1" placeholder="Enter first integer">
            <input type="number" name="t2" placeholder="Enter second integer">

            1. Mod
            2. Power 
            3. Sum 
            4. Fact

            <input type="number" name="t3" placeholder="Choose a Number" required>
        </form>
    </fieldset>
</body>
</html>

<?php
    $a = $_POST ['t1'];
    $b = $_POST ['t2'];
    $ch = $_POST ['t3'];

    switch($ch)
    {
        case 1:
            mod($a, $b);
            break;
        case 2:
            power($a, $b);
            break;
        case 3:
            sum($a);
            break;
        case 4:
            fact($a);
            break;
    }
    function mod($a, $b)
    {
        $c = $a % $b;
        echo "Mod is : ".$c;
    }

    function power($a, $b)
    {
        $p = 1;
        while($b > 0)
        {
            $p = $p * $a;
            $b--;
        }
        echo "Power is : ".$p;
    }

    function sum ($a)
    {
        $sum = 0;
        while($a > 0)
        {
            $sum = $sum + $a;
            $a--;
        }
        echo "Sum is : ".$sum;
    }

    function fact ($a){
        $fact = 1;
        while($a > 0)
        {
            $fact = $fact * $a;
            $a--;
        }
        echo "Factorial is : ".$fact;
    }
?>