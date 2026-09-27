# PHP Loops Programming Practices

This README contains screenshots and explanations of PHP loop practices covered in **Web Application Development - PHP & MySQL**.

The practices demonstrate:

* While Loop
* Do-While Loop
* For Loop
* Break Statement
* Continue Statement
* Nested Loop

---

# Practice #1: While Loop

## Screenshot Name

`PHP_While_Loop.png`

## Description

This practice demonstrates how to use a `while` loop to repeat a block of code while a condition is true.

### Code

```php
$i = 1;

while($i <= 5){
    echo "$i";
    $i++;
}
```

### Output

```text
12345
```

The loop starts from `1` and continues until `$i` becomes greater than `5`.

## Screenshot

(WhileLoop.png)

---

# Practice #2: Do-While Loop

## Screenshot Name

`PHP_Do_While_Loop.png`

## Description

This practice demonstrates how to use a `do-while` loop. The code inside the loop executes first, then the condition is checked.

### Code

```php
$result = 1;
$n = 5;

do {
    $result *= $n;
    echo "the value n is: $n <br>";
    $n--;
} while($n > 0);

echo "$result";
```

### Output

```text
the value n is: 5
the value n is: 4
the value n is: 3
the value n is: 2
the value n is: 1
120
```

The program calculates the factorial of `5`:

```text
5 × 4 × 3 × 2 × 1 = 120
```

## Screenshot

(Do-whileLoop.png)

---

# Practice #3: For Loop

## Screenshot Name

`PHP_For_Loop.png`

## Description

This practice demonstrates how to use a `for` loop to repeat a statement a specific number of times.

### Code

```php
for ($count = 1; $count <= 12; ++$count)
    echo "$count times 12 is " . $count * 12 . "<br>";
```

### Output

```text
1 times 12 is 12
2 times 12 is 24
3 times 12 is 36
...
12 times 12 is 144
```

The loop generates the multiplication table of `12`.

## Screenshot

(ForLoop.png)

---

# Practice #4: Break Statement

## Screenshot Name

`PHP_Break_Statement.png`

## Description

This practice demonstrates how the `break` statement stops a loop before its normal condition becomes false.

### Code

```php
$i = 1;

while ($i <= 15)
{
    echo "$i, ";
    $i++;

    if ($i == 10)
        break;
}
```

### Output

```text
1, 2, 3, 4, 5, 6, 7, 8, 9,
```

The `break` statement stops the loop when `$i` reaches `10`.

## Screenshot

(Break.png)

---

# Practice #5: Continue Statement

## Screenshot Name

`PHP_Continue_Statement.png`

## Description

This practice demonstrates how the `continue` statement skips the current iteration and continues with the next iteration.

### Code

```php
$i = 0;

do {
    $i++;

    if ($i % 2 == 0)
        continue;
    else
        echo "$i, ";

} while ($i <= 15);
```

### Output

```text
1, 3, 5, 7, 9, 11, 13, 15,
```

The program skips even numbers using the `continue` statement and displays only odd numbers.

## Screenshot

(Continue.png)

---

# Practice #6: Nested Loop

## Screenshot Name

`PHP_Nested_Loop.png`

## Description

This practice demonstrates a nested loop, where one loop is placed inside another loop.

### Code

```php
for($i = 1; $i <= 3; $i++){

    for($j = 1; $j <= 5; $j++)
        echo "$i * $j = " . ($i * $j) . "<br>";
}
```

### Output

```text
1 * 1 = 1
1 * 2 = 2
1 * 3 = 3
1 * 4 = 4
1 * 5 = 5

2 * 1 = 2
2 * 2 = 4
...
3 * 5 = 15
```

The outer loop runs `3` times, while the inner loop runs `5` times for each outer-loop iteration.

## Screenshot

(NestedLoop.png)

---

# Summary

These practices demonstrate important PHP loop concepts:

1. **While Loop** – Repeats code while a condition is true.
2. **Do-While Loop** – Executes the code at least once before checking the condition.
3. **For Loop** – Repeats code using initialization, condition, and increment.
4. **Break Statement** – Immediately stops a loop.
5. **Continue Statement** – Skips the current iteration.
6. **Nested Loop** – Places one loop inside another loop.

These concepts are important for controlling repeated operations in PHP programs.
