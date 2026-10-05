<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    // 2 dimentional array with  numeric index
    $numbers = array(
        array(1, 2, 3),
        array(4, 5, 6),
        array(7, 8, 9)
    );  
    // display the first row of the array
    // foreach ($numbers as $row) {
    //     echo " $row[0] <br>";
    // }
    //display all the numbers in the array
     foreach ($numbers as $row) {
        foreach($row as $n){

            echo " $n <br>";
        }
    }

     // Example 2: is_array funciton
    $info = "Nimca Nor Hussein";
    //Array
    $info = array(
        "Faatima",
        "Mohamed",
        20
    );
    //Check if its aaray
    if (is_array($info))
        {   
            echo "Is Array <br>";
        } else {
            echo "Is not Array <br>";
        }

        // Example 3: in_array funciton
        if (in_array(30, $info))
            {
                echo "Found";
            }
            else {
                echo "Not Found";
            }

        // Associative array 
        $arrays = array(
            array(90, "Abukar", "Ibrahim"),
            array(80, "Omar", "Ibrahim"),
        );
        // display the size f array using count function
        echo "Size of the array is count($arrays) <br>"; 
        echo 'Size of the array is count($arrays) <br> ';
        echo "Size of the array is: " . count($arrays) . "<br>";

    // explode, shuffle, function
    $a = "The quick brown fox jumps over the lazy dog";
    $b = explode (" ", $a);
    shuffle($b);
	echo "<pre>";
	print_r($b);
	echo "</pre>";

    // example Array_Merge 
    $a1 = array (1, 2, 3,);
    $a2 = array (1, 5, 6,);
    $a3 = array_merge($a1,$a2);
    echo "<pre>";
    print_r($a3);
    echo "</pre>";

    // array_reverse
    $p =array_reverse($a3);

    // array_push
    $a = array (2, 4, 6, 8);
    array_push($a, 10);
    echo "<pre>";
    print_r($a);
    echo "</pre>";

    // array_pop
    $a = array (1, 2, 3, 4);
    array_pop($a);
    echo "<pre>";
    print_r($a);    
    echo "</pre>";

    // end function
    $last=end($a);
	echo "The last element of the array is: " . $last;
    echo "<br>";

    // Example of function creating
    function writeMsg ( ) { 
        echo "Hello world!";
    }
    writeMsg(); // call the function

// Example factorial of number 
function factorial ($a) {
    $result = 1;
	for ($i = 1 ; $i <= $a; $i++)
		$result *= $i;
	echo "<br>Factorial of $a is : $result";
}
factorial (5);

    ?>
</body>
</html>