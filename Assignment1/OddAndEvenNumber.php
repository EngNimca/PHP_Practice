<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php

    echo "Even numbers from 2 to 12:<br>";

    for ($i = 2; $i <= 20; $i++) {
        if ($i % 2 == 0) {
            echo $i . "<br>";
        }
    }

    echo "<br>";

    echo "Odd numbers from 5 to 35:<br>";

    for ($i = 5; $i <= 35; $i++) {
        if ($i % 2 != 0) {
            echo $i . "<br>";
        }
    }

?>
</body>
</html>