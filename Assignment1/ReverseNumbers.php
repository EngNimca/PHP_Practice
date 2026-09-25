<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    
    $number = 12345;
    $reverse = 0;
    while ($number > 0) {
        $reverse = ($reverse * 10) + ($number % 10);
        $number = intval($number / 10);
    }
    echo "The reverse of the given number is: " . $reverse;
    ?>
</body>
</html>