<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php 
    $students = array(
    array(
        "Class" => "CA221",
        "Name" => "Mohamed Ahmed Ali",
        "Phone" => "0648440403",
        "Address" => "Laba Dhagax, Wardhiigley"
    ),

    array(
        "Class" => "CA223",
        "Name" => "Ahmed Abdi Jama",
        "Phone" => "0647223201",
        "Address" => "Taleex, Hodan"
    ),

    array(
        "Class" => "CA221",
        "Name" => "Amina Nur Adan",
        "Phone" => "0646990276",
        "Address" => "Macmacanka, Dharkeynley"
    )
    );

    echo "<table border='1' cellpadding='10' cellspacing='0'>";

    echo "<tr style='background-color: #c0c2c0'>";

    echo "<th></th>";
    echo "<th>Name</th>";
    echo "<th>Phone</th>";
    echo "<th>Address</th>";

    echo "</tr>";


    foreach ($students as $student) {

        echo "<tr>";

        foreach ($student as $value) {
            if ($value === $student["Class"]) {
                echo "<th style='background-color: #c0c2c0'>" . $value . "</th>";
            } else {
                echo "<td>" . $value . "</td>";
            }
        }

        echo "</tr>";
    }

    echo "</table>";
    ?>
</body>
</html>