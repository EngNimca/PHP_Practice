<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    // include and require example
    function sum(){
        $name = 0;
        $name ++;
        echo $name;
    }
    sum();

    // variable scope
    $a = 5; // Global variable

    function factorial($x) {
        $a = 10; // Local variable

        $result = 1;

        for ($i = 2; $i <= $x; $i++) {
            $result = $result * $i;
        }

    echo "Factorial of $x = " . $result . "<br>";
    echo "Value of local a = " . $a . "<br>";
    echo "Value of global a = " . $GLOBALS["a"];
}
factorial($a);

echo "<br>";

// Check for function existence
if (function_exists("factorial")) {
    echo "Function exists.<br>";
} else {
    echo "Function does not exist.<br>";
}

?>
</body>
</html>