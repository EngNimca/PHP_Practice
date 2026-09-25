<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    $number = 5;
    $divisor = 3;

    if ($number % $divisor == 0) {
        echo $number . " is divisible by " . $divisor;
    } else {
        echo $number . " is not divisible by " . $divisor;
    }
    ?>
</body>
</html>