# PHP Theory Short Notes

## Slides 15 – End

This README contains short notes covering the Chapter3 theory concepts from Slide 15 to the final slide.

---

# 1. Multidimensional Arrays

A **multidimensional array** is an array that contains another array.

* A 2D array is an array of arrays.
* A 3D array is an array of arrays of arrays.
* They are useful for data arranged in a table.
* The dimension indicates the number of indexes needed to access an element.

---

# 2. PHP Array Functions

PHP provides built-in functions for accessing and manipulating arrays.

Common functions:

* `is_array()` – Checks if a variable is an array.
* `in_array()` – Checks if a value exists in an array.
* `count()` – Returns the number of elements.
* `sort()` – Sorts an array in ascending order.
* `rsort()` – Sorts an array in descending order.
* `asort()` – Sorts an associative array by value ascending.
* `arsort()` – Sorts an associative array by value descending.
* `max()` – Returns the highest value.
* `min()` – Returns the lowest value.
* `implode()` – Converts an array into a string.

---

# 3. explode() and shuffle()

### explode()

Converts a string into an array using a separator.

Example:

```php
explode(" ", $text);
```

### shuffle()

Randomly changes the order of elements in an array.

```php
shuffle($array);
```

---

# 4. array_merge() and array_reverse()

### array_merge()

Combines two or more arrays into one array.

```php
array_merge($a1, $a2);
```

### array_reverse()

Returns an array with its elements in reverse order.

```php
array_reverse($array);
```

---

# 5. array_push(), array_pop() and end()

### array_push()

Adds elements to the end of an array.

### array_pop()

Removes and returns the last element of an array.

### end()

Moves the internal pointer to the last element and returns its value.

---

# 6. PHP Functions

A **function** is a group of statements that performs a specific task.

Functions can:

* Reduce repeated code.
* Accept input values.
* Perform operations.
* Return values.
* Be called many times.

PHP contains more than 1000 built-in functions.

A function does not execute automatically. It executes when it is called.

---

# 7. Advantages of Functions

Functions provide several benefits:

* Less code and typing.
* Fewer programming errors.
* Code reusability.
* Easier maintenance.
* Can accept arguments.
* Can be used for different situations.
* Improve program organization.

---

# 8. Function Syntax

General syntax:

```php
function function_name([parameter]) {

    // statements

}
```

Important points:

* A function starts with `function`.
* The function name follows it.
* Parentheses are required.
* Parameters are optional.
* The function body is written inside `{ }`.
* Function names are not case-sensitive in PHP.

---

# 9. Function Body and return

The function body contains the statements that execute when the function is called.

The `return` statement:

* Stops function execution.
* Sends a value back to the calling code.

Example:

```php
return $result;
```

Any code after an executed `return` will not run.

---

# 10. Arguments and Parameters

Information can be passed to functions using arguments.

### Argument

The actual value passed to a function.

### Parameter

The variable that receives the argument.

Example:

```php
function add($a, $b)
```

Here `$a` and `$b` are **parameters**.

```php
add(5, 10);
```

Here `5` and `10` are **arguments**.

### Remember

**Arguments = values passed**

**Parameters = placeholders**

---

# 11. Returning a Value

A function can return a value using the `return` statement.

Example:

```php
function factorial($a) {
    return $result;
}
```

The returned value can be stored:

```php
$a = factorial(5);
```

Or used directly:

```php
echo factorial(5);
```

---

# 12. Return Statement

The `return` statement terminates the function at that point.

Example:

```php
function test() {

    return 10;

    echo "Hello";
}
```

`Hello` will not be displayed because `return` stops the function.

---

# 13. Returning an Array

A function can return an entire array.

This allows one function to return multiple related values.

Example:

```php
function getData() {

    return array(10, 20, 30);
}
```

The returned array can then be stored in a variable.

---

# 14. Passing By Value

**Passing by value** means that a copy of the variable is passed to the function.

* The original variable does not change.
* This is the default method in PHP.

Example concept:

```text
Original value → Copy → Function
```

Changes made inside the function do not affect the original variable.

---

# 15. Passing By Reference

**Passing by reference** allows the function to change the original variable.

An ampersand `&` is placed before the parameter.

Example:

```php
function change(&$value)
```

The value inside the function can change the original variable.

### Note

Passing by reference should be used carefully because it can create unexpected changes and difficult-to-find bugs.

---

# 16. Default Argument Value

A function can have a default value for a parameter.

Example:

```php
function factorial($a = 5)
```

If no argument is supplied:

```php
factorial();
```

PHP uses the default value `5`.

If an argument is supplied:

```php
factorial(10);
```

The value `10` is used instead.

---

# 17. Scope of Variables

**Variable scope** means the part of the program where a variable can be accessed.

There are different scopes:

* Local scope
* Global scope
* Static scope
* Superglobal scope

---

# 18. Local Variables

A variable declared inside a function has **local scope**.

It can only be accessed inside that function.

Example:

```php
function test() {
    $x = 10;
}
```

`$x` is a local variable.

---

# 19. Global Variables

A variable declared outside a function has **global scope**.

Normally, it cannot be directly accessed inside a function.

Example:

```php
$x = 10;
```

`$x` is a global variable.

---

# 20. global Keyword

The `global` keyword allows a function to access a global variable.

Example:

```php
global $a;
echo $a;
```

It connects the variable inside the function to the global variable outside it.

---

# 21. $GLOBALS

PHP stores global variables inside the `$GLOBALS` array.

Example:

```php
echo $GLOBALS["a"];
```

`$GLOBALS` can be used inside functions to access or modify global variables.

---

# 22. Superglobal Variables

Superglobals are predefined PHP variables that are accessible throughout the program.

Common superglobals include:

* `$_GET`
* `$_SESSION`
* `$_FILES`
* `$_SERVER`
* `$GLOBALS`

They contain useful information about the program, server, files, sessions, and requests.

---

# 23. Recap of Variable Scope

### Local

Accessible only within its function.

### Global

Accessible outside functions and can be accessed inside functions using `global` or `$GLOBALS`.

### Static

Accessible only inside the function but keeps its value between function calls.

### Best Practice

Try to use local variables whenever possible.

---

# 24. Including Files in PHP

PHP allows one file to be inserted into another using:

* `include`
* `require`

This is useful for reusing common code.

Examples:

* Header
* Footer
* Navigation menu
* Function libraries

---

# 25. include Statement

`include` loads the contents of another file into the current PHP file.

Example:

```php
include "library.php";
```

The included file can contain:

* HTML
* PHP
* Text
* Functions

Using include avoids copying the same code into many files.

---

# 26. include_once

`include_once` works like `include`, but ensures that the file is included only once during script execution.

Example:

```php
include_once "library.php";
```

It helps prevent the same file from being loaded multiple times.

---

# 27. require Statement

`require` is used when a file is essential for the program.

Example:

```php
require "library.php";
```

If the file cannot be found, PHP produces a fatal error and stops execution.

---

# 28. require_once

`require_once` includes an important file only once.

Example:

```php
require_once "library.php";
```

It is commonly used for important files such as:

* Configuration files
* Database connections
* Function libraries

---

# 29. include vs require

| include                               | require                     |
| ------------------------------------- | --------------------------- |
| Produces a warning if file is missing | Produces a fatal error      |
| Script continues                      | Script stops                |
| Used when file is not essential       | Used when file is essential |

### Simple Rule

**include → optional file**

**require → necessary file**

---

# 30. include_once vs require_once

Both prevent a file from being included more than once.

### include_once

* Warning if file is missing.
* Program continues.

### require_once

* Fatal error if file is missing.
* Program stops.

---

# 31. function_exists()

The `function_exists()` function checks whether a function is available.

It can check:

* Built-in functions.
* User-created functions.

Example:

```php
if (function_exists("test")) {
    echo "Function exists";
}
```

---

# 32. Understanding Paths

When including files, the file path must be correct.

A **relative path** describes the location of a file relative to the current directory.

Example:

```php
require_once("../abc/include.php");
```

### `../`

Means to move one directory up from the current directory.

---
