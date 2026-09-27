# PHP Arrays Programming Practices

This README contains screenshots and explanations of PHP array practices covered in **Web Application Development - PHP & MySQL**.

The practices demonstrate:

* Numeric Indexed Arrays
* Creating and Initializing Arrays
* `var_dump()`
* Adding Array Elements
* Associative Arrays
* `print_r()`
* Displaying Array Keys and Values
* Displaying Array Values

---

# Practice #1: Numeric Indexed Array

## Screenshot Name

`NumericArray.png`

## Description

This practice demonstrates how to create a numeric indexed array and assign values using index numbers.

### Code

```php
$collection = array();

$collection[0] = 1;
$collection[1] = 2.4;
$collection[2] = "Nimca Nor";

foreach($collection as $list){
    echo "$list <br>";
}

var_dump($collection);
```

### Output

```text
1
2.4
Nimca Nor
```

The array uses numeric indexes starting from `0`.

## Screenshot

(NumericArray.png)

---

# Practice #2: Create and Initialize Array

## Screenshot Name

`CreateArray.png`

## Description

This practice demonstrates how to create and initialize an array in one statement.

### Code

```php
$numbers = array(2, "Nimca nor", 10.4);

var_dump($numbers);
```

### Output

The array contains:

```text
2
Nimca nor
10.4
```

`var_dump()` displays the values and their data types.

## Screenshot

(CreateArray.png)

---

# Practice #3: Adding Array Elements

## Screenshot Name

`ArrayTotal.png`

## Description

This practice demonstrates how to access array elements using a `foreach` loop and calculate their total.

### Code

```php
$numbers = array(10, 10, 15);
$total = 0;

foreach ($numbers as $n)
    $total += $n;

echo "Total of all elements is: $total";
```

### Output

```text
Total of all elements is: 35
```

The program adds:

```text
10 + 10 + 15 = 35
```

## Screenshot

(ArrayTotal.png)

---

# Practice #4: Associative Array

## Screenshot Name

`AssociativeArray.png`

## Description

This practice demonstrates an associative array using named keys instead of numeric indexes.

### Code

```php
$info = array(
    "ID" => "123",
    "name" => "Nimca",
    "Addres" => "wadajir",
    "Age" => 20,
    "Status" => "Single"
);

echo "<pre>";
echo "Information about me <br>";
print_r($info);
echo "</pre>";
```

### Output

```text
Information about me

ID => 123
name => Nimca
Addres => wadajir
Age => 20
Status => Single
```

`print_r()` is used to display the array in a readable format.

## Screenshot

(AssociativeArray.png)

---

# Practice #5: Display Array Key and Value

## Screenshot Name

`ArrayKeyValue.png`

## Description

This practice demonstrates how to display both the key and value of an associative array using `foreach`.

### Code

```php
$student = array(
    "ID" => "123",
    "name" => "Nimca",
    "Addres" => "wadajir"
);

foreach ($student as $key => $value) {
    echo $key . " - " . $value . "<br>";
}
```

### Output

```text
ID - 123
name - Nimca
Addres - wadajir
```

The `$key` contains the array key, while `$value` contains its corresponding value.

## Screenshot

(ArrayKeyValue.png)

---

# Practice #6: Display Array Values Only

## Screenshot Name

`ArrayValues.png`

## Description

This practice demonstrates how to display only the values of an associative array.

### Code

```php
$student = [
    "name" => "Ahmed",
    "age" => 20,
    "city" => "Mogadishu",
    "course" => "Data Analysis"
];

foreach ($student as $value) {
    echo $value . "<br>";
}
```

### Output

```text
Ahmed
20
Mogadishu
Data Analysis
```

The `foreach` loop accesses only the values because `$value` is used without the key.

## Screenshot

(ArrayValues.png)

---

# Summary

These practices demonstrate important PHP array concepts:

1. **Numeric Indexed Array** – Uses numeric indexes to store values.
2. **Array Initialization** – Creates and initializes an array in one statement.
3. **Array Total** – Uses `foreach` to calculate the total of array elements.
4. **Associative Array** – Uses named keys to store values.
5. **Key and Value** – Displays both keys and their corresponding values.
6. **Values Only** – Displays only the values from an associative array.

These concepts are important for storing, accessing, and processing multiple values in PHP.
