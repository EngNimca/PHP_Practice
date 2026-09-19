<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php

    //Display intro
    echo "<br> Welcome PHP";


    echo "<br>";

    //constant variable
    define("AGE", 20);
    echo "Age is " , AGE;
    echo "<br>";

    // if else statement
    $Age = 20;
    if ($Age >= 18 )
        echo "Adult";
    else 
        echo "young";

   echo "<br>";


    // if else if statement
    $Grade = 90;
     if ($Grade >=95)
        echo "A+";
    elseif ($Grade >=85)
        echo "A";
    elseif ($Grade >=80)
        echo "B+";
    elseif ($Grade >=75)
        echo "B";
   elseif ($Grade >=65)
        echo "C+";
   elseif ($Grade >=60)
        echo "C";
   elseif ($Grade >=50)
        echo "Fail";
    else 
        echo "invalid grade";


    echo "<br>";

    // switch case statement
    $Answer = "n";
    switch ($Answer) {
        case($Answer == "y" || $Answer == "Y"):
            echo "the answer was no";
            break;
        case($Answer == "n" || $Answer == "N"):
            echo "the answer was yes";
            break;
        default:
            echo "invalid answer";
      }


    echo "<br>";


    // Logical Operators
    $Age = 22;
    $Grade = 90;
      if ($Age >=20 && $Grade >= 90)
        echo "very good";
    elseif ($Age >=20 && $Grade >= 80)
        echo "good";
    elseif ($Age >=20 && $Grade >= 70)
        echo "not bad";
    else 
        echo "invalid Number";  

      
    ?>
</body>
</html>