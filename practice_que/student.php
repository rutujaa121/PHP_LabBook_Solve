<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <table border="1">
        <?php
            $f = fopen("student.dat", "r");

            echo "<tr>
                <th>Roll No </th>
                <th>Name </th>
                <th>OS</th>
                <th>WT</th>
                <th>Python</th>
                <th>Java</th>
                <th>CN</th>
                <th>DS</th>
                <th>Total</th>
                <th>Percentage</th>
               </tr>";
            
            while(($line = fgets($f))!== false)
            {
                $data = explode(",",trim($line));
                $roll = $data[0];
                $name = $data[1];
                $marks = array_slice($data,2,6);
                $total = array_sum($marks);
                $percentage = $total / 6;

                echo "<tr>";
                echo "<td>$roll</td>";
                echo "<td>$name</td>";

                foreach($marks as $m)
                {
                    echo "<td>$m</td>";
                }
                echo "<td>$total</td>";
                echo "<td>.number_format($percentage,2)</td>";
                echo "</tr>";
            }
        ?>
    </table>
</body>
</html>