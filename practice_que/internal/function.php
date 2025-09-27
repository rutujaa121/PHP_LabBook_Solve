<html>
    <body>
        <form action="function.php" method="POST">
            Enter first Number: <input type="text" name="a1"><br>
            Enter Second Number: <input type="text" name="a2"><br>
            <input type="radio" name="r1" value="1">a.mod <br>
            <input type="radio" name="r1" value="2">b.power <br>
            <input type="radio" name="r1" value="3">c.sum <br>
            <input type="radio" name="r1" value="4">d.factorial second no <br>
            <button type="submit">Submit</button>
        </form>
    </body>
</html>
<?php
$n1 = $_POST["a1"];
$n2=$_POST["a2"];
$ch =$_POST["r1"];
switch($ch)
{
    case 1:mod($n1,$n2);
    break;
    case 2:power($n1,$n2);
    break;
    case 3:sum($n1);
    break;
    case 4:fact($n1);
    break;
}
function mod($n1,$n2)
{
    $a=$n1%$n2;
    echo "mod = ".$a;
}
function power($n1,$n2)
{
    $a=1;
    while($n2>0){
        $a=$a*$n1;
        $n2=$n2-1;
    }
    echo "power".$a;
}
function sum($n1)
{
    $sum = 0;
    while ($n1 > 0) {
        $sum = $sum + $n1;
        $n1--;
    }
    echo "Sum is : " . $sum;
}
function fact($n1)
{
    $fact=1;
    while($n1>0){
        $fact=$fact*$n1;
        $n1--;
    }
    echo "factorial::".$fact;
}
?>