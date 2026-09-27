<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    //Q1.1
    $numbers = array(5, -7, 12, 10, -7, 11, -6, 12, 1, -7, 2, 9);

    //Q1.2
    echo "<pre>";
    print_r($numbers);
    echo "</pre>";

    //Q1.3
    $sum = 0;
    foreach ($numbers as $number) {
        $sum += $number;
    }
    echo "Total numbers of array: " . $sum;

    echo "<br>";
    echo "<br>";

    //Q1.4
    $EvenNumbers = array();
    $evenTotal = 0;
    foreach ($numbers as $value) {
        if ($value % 2 == 0) {
            $EvenNumbers[] = $value;
            $evenTotal += $value;
        }
    }
    echo "Even numbers: ";
    echo "<pre>";
    var_dump($EvenNumbers);
    echo "</pre>";

    echo "Total even numbers: " . $evenTotal;
    echo "<br>";
    echo "<br>";

    //Q1.5
     $OddNumbers = array();
    $oddTotal = 0;
    foreach ($numbers as $value) {
        if ($value % 2 != 0) {
            $OddNumbers[] = $value;
            $oddTotal += $value;
        }
    }
    echo "Odd numbers: ";
    echo "<pre>";
    var_dump($OddNumbers);
    echo "</pre>";

    echo "Total odd numbers: " . $oddTotal;

    echo "<br>";
    echo "<br>";

    //Q1.6  Find minimum element and its positions 
    $smallest = $numbers[0];

    foreach ($numbers as $value)
    {
        if ($value < $smallest)
        {
            $smallest = $value;
        }
    }
    echo "<br>";
    echo "Minimum element: " . $smallest;

    echo "<br>";
    echo "Positions of minimum element: ";
    echo "<br>";

    foreach ($numbers as $position => $value)
    {
        if ($value == $smallest)
        {
            echo "Position: " . $position . "<br>";
        }
    }
        echo "<br>";

    //Q1.7  
    $largest = $numbers[0];

    foreach ($numbers as $value)
    {
        if ($value > $largest)
        {
            $largest = $value;
        }
    }

    echo "Maximum element: " . $largest . "<br>";

    echo "Positions of maximum number: ";
    echo "<br>";

    foreach ($numbers as $position => $value)
    {
        if ($value == $largest)
        {
            echo "Position: " . $position . "<br>";
        }
    }

    ?>
</body>
</html>