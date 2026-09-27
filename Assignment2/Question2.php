<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    
    $colors = array(
        "Light" => array(
            "Red" => "Light Red", 
            "Green" => "Light Green", 
            "Blue" => "Light Blue"
            ),
        "Normal" => array(
            "Red" => "Normal Red", 
            "Green" => "Normal Green", 
            "Blue" => "Normal Blue"
            ),
        "Dark" => array(
            "Red" => "Dark Red", 
            "Green" => "Dark Green", 
            "Blue" => "Dark Blue"
            )
    );
    
    echo "<table border= 1 cellpadding= 10 cellspacing=0>";
    echo "<tr style='background-color: #c0c2c0'>";
        echo "<th></th>";
        echo "<th>Red</th>";
        echo "<th>Green</th>";
        echo "<th>Blue</th>";
    echo "</tr>";
    foreach ($colors as $column => $columns) {
        echo "<tr>";
            echo "<th style='background-color: #c0c2c0'>" . $column . "</th>";
            foreach ($columns as $row => $value) {
                echo "<td >" . $value . "</td>";
            }
        echo "</tr>";
    }
    echo "</table>";
    ?>
</body>
</html>