<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
   <?php
    //Example while loop
    $i = 1;
    while($i <= 5){
        echo "$i";
        $i++;
    }

    // Example do while 
    $result = 1;
    $n = 5;
    do {
        $result *= $n;
        echo "the value n is: $n <br>";
        $n--;
    } while($n> 0);
    echo "$result";

    //  Example for loop 
    for ($count = 1 ; $count <= 12 ; ++$count)
	echo "$count times 12 is " . $count * 12 . "<br>";


    // Example of break statement
    $i = 1;
    while ($i <= 15)
    {
        echo "$i, ";
        $i++;
        if ( $i == 10 )
            break;
    }

    // Example of continue statement
    $i = 0;
    do {
        $i++;
        if ( $i % 2 == 0 )
            continue;
        else
            echo "$i, ";
    } while ($i <= 15);

    // nested loop statement
    for($i= 1; $i<= 3; $i++){
        for($j =1; $j <= 5; $j++ )
            echo ("$i * $j =". ($i * $j) .  "<br>");
        
    }
    
    
    ?>

</body>
</html>