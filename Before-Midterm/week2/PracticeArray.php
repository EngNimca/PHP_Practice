<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    //numeric index array

    $collection = array();   //create array
    $collection [0]= 1;   // initialize array
    $collection [1] = 2.4;
    $collection [2] = "Nimca Nor";

    //displaying array using var-dum function
    foreach($collection as $list){
        echo "$list <br>";
    }
    var_dump($collection);

    //create and initialize array in one time
    $numbers = array(2, "Nimca nor", 10.4);
    echo "<br>";
    var_dump($numbers);

    //Adding array elements
    $numbers = array (10, 10, 15);
    $total = 0;
    foreach ($numbers as $n)
    $total += $n;
    echo ("<br>Total of all elements is: $total");

    // Associative array
    $info = array(
        "ID" =>"123",
        "name" =>"Nimca",
        "Addres" =>"wadajir",
        "Age" => 20,
        "Status" => "Single"
    );
    // displaying
    echo "<pre>";
        echo "Information about me <br>";
        print_r($info);
     echo "</pre>";

    //test array display key and value in one time
     $student = array(
        "ID" =>"123",
        "name" =>"Nimca",
        "Addres" =>"wadajir"
     );
     foreach ($student as $key => $value) {
    echo   $key . " -  " . $value . "<br>";
    }
    echo "<br>";

    //displaying value only
    $student = [
    "name" => "Ahmed",
    "age" => 20,
    "city" => "Mogadishu",
    "course" => "Data Analysis"
    ];

    foreach ($student as $value) {
        echo  $value . "<br>";
    }

?>

</body>
</html>