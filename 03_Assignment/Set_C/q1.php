<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="q1.php" method="POST">
        Enter roll number: <input type="text" name="r"> <br><br>
        Enter name: <input type="text" name="n"> <br><br>

        Java <input type="text" name="s1"> <br><br>
        PHP <input type="text" name="s2"> <br><br>
        OS <input type="text" name="s3"> <br><br>
        TCS <input type="text" name="s4"> <br><br>
        Stat <input type="text" name="s5"> <br><br>

        <input type="submit" value="Submit">
    </form>
</body>
</html>

<html>
<body>
    <?php
        $r = explode(",", $_POST['r']);
        $n = explode(",", $_POST['n']);
        $s1 = explode(",", $_POST['s1']);
        $s2 = explode(",", $_POST['s2']);
        $s3 = explode(",", $_POST['s3']);
        $s4 = explode(",", $_POST['s4']);
        $s5 = explode(",", $_POST['s5']);
    ?>
    <center>
        <table border="1">
            <?php
                $c = count($r);
                echo "<tr>
                        <th>Roll No. </th>
                        <th>Name</th>
                        <th>Java</th>
                        <th>PHP</th>
                        <th>OS</th>
                        <th>TCS</th>
                        <th>Stat</th>
                        <th>Total</th>
                        <th>Percentage</th>
                    </tr>";
                        for($i=0; $i<$c; $i++)
                        {
                            $t = $s1[$i] + $s2[$i] + $s3[$i] + $s4[$i] + $s5[$i];
                            $p = $t/5;

                            echo "<tr>
                                    <td>".$r[$i]."</td>
                                    <td>".$n[$i]."</td>
                                    <td>".$s1[$i]."</td>
                                    <td>".$s2[$i]."</td>
                                    <td>".$s3[$i]."</td>
                                    <td>".$s4[$i]."</td>
                                    <td>".$s5[$i]."</td>
                                    <td>".$t."</td>
                                    <td>".$p."%</td>
                                </tr>";
                        }
                        
            ?>
        </table>
    </center>
</body>
</html>