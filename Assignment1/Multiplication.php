<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <style>
        table {
            border-collapse: collapse;
        }

        th, td {
            border: 1px solid black;
            padding: 5px 10px;
            text-align: center;
        }
    </style>
    </head>
<body>
    <?php
     echo "<h2>Multiplication Table</h2>";
    echo "<table>";

    for ($i = 1; $i <= 12; $i++) {
        echo "<tr>";
        for ($j = 1; $j <= 12; $j++) {
            echo "<td>" . ($i * $j) . "</td>";
        }
        echo "</tr>";
    }
    echo "</table>";
    
    
    ?>
</body>
</html>