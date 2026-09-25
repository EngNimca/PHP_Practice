<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
   <?php

    $num1 = 5;
    $num2 = 20;
    $num3 = 12;

    if ($num1 > $num2 && $num1 > $num3) {
        echo "The largest number is: " . $num1 . "<br>";

        if ($num2 < $num3) {
            echo "The smallest number is: " . $num2;
        } else {
            echo "The smallest number is: " . $num3;
        }

    } elseif ($num2 > $num1 && $num2 > $num3) {
        echo "The largest number is: " . $num2 . "<br>";

        if ($num1 < $num3) {
            echo "The smallest number is: " . $num1;
        } else {
            echo "The smallest number is: " . $num3;
        }

    } else {
        echo "The largest number is: " . $num3 . "<br>";

        if ($num1 < $num2) {
            echo "The smallest number is: " . $num1;
        } else {
            echo "The smallest number is: " . $num2;
        }
    }
?>
    
       
    

    

    

    
</body>
</html>