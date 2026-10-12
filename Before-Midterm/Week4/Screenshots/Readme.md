# PHP Functions and Variable Scope Practices

This README contains PHP practices covering functions, variable scope, factorial calculation, and function existence.

---

# Practice #1: Include and Require practice

## Screenshot Name

`PHP_Include_Require.png`

## Description

This practice demonstrates how to use `include` and `require` to access and reuse a function defined in another PHP file.

```php
function sum() {
    $name = 0;
    $name++;
    echo $name;
}

sum();
```

### Output

```text
1
```

## Screenshot

---

# Practice #2: Local and Global Variables

## Screenshot Name

`PHP_Variable_Scope.png`

## Description

This practice demonstrates the difference between local and global variables. The `$GLOBALS` array is used to access a global variable inside a function.

```php
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
```

### Output

```text
Factorial of 5 = 120
Value of local a = 10
Value of global a = 5
```

## Screenshot

---

# Practice #3: Checking Function Existence

## Screenshot Name

`PHP_Function_Exists.png`

## Description

This practice uses `function_exists()` to check whether a function has been defined in PHP.

```php
if (function_exists("factorial")) {
    echo "Function exists.<br>";
} else {
    echo "Function does not exist.<br>";
}
```

### Output

```text
Function does not exist.
```

**Note:** This output assumes Practice #3 runs independently. Since `factorial()` is not defined in this code alone, PHP displays `Function does not exist.` If the function is defined before this code in the same script, it displays `Function exists.`

## Screenshot

---
# Summary

This file demonstrates:

- Calculating factorial
- Understanding local and global variables
- Using `$GLOBALS`
- Checking functions with `function_exists()`

---

# Practice #4: HTML Registration Form and PHP POST

## Screenshot Name

`PHP_FormHtml.png`
`PHP_FormPhp.png`


## Description

This practice demonstrates how an HTML form collects user information and sends it to PHP using the `POST` method. PHP then retrieves and displays the submitted data.

### HTML Form Code

```html
<form action="" method="post">
    <h2>Registration Form</h2>

    <label for="fullname">Enter Full Name</label>
    <input type="text" id="fullname"
           name="fullname"
           placeholder="Enter your full name" required>

    <label for="password">Enter Password</label>
    <input type="password" id="password"
           name="password"
           placeholder="Enter your password" required>

    <label for="message">Your Message</label>
    <textarea id="message" name="message"
              rows="4"
              placeholder="Write your message..."></textarea>

    <label>Select Your Gender</label>

    <label>
        <input type="radio" name="gender"
               value="Male" required> Male
    </label>

    <label>
        <input type="radio" name="gender"
               value="Female"> Female
    </label>

    <button type="reset">Reset Form</button>
    <button type="submit" name="register">Register</button>
</form>
```

### PHP Code

```php
<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $fullname = $_POST["fullname"] ?? "";
    $message = $_POST["message"] ?? "";
    $gender = $_POST["gender"] ?? "";

    echo "<div class='result'>";
    echo "<h3>Registration Details</h3>";
    echo "<p><strong>Full Name:</strong> "
         . htmlspecialchars($fullname) . "</p>";
    echo "<p><strong>Message:</strong> "
         . nl2br(htmlspecialchars($message)) . "</p>";
    echo "<p><strong>Gender:</strong> "
         . htmlspecialchars($gender) . "</p>";
    echo "</div>";
}
?>
```

### Explanation

- `method="post"` sends the form data using the POST method.
- `name="fullname"`, `name="message"`, and `name="gender"` identify the values PHP receives.
- `$_POST["fullname"]` retrieves the full name entered by the user.
- `$_POST["message"]` retrieves the user's message.
- `$_POST["gender"]` retrieves the selected gender.
- `$_SERVER["REQUEST_METHOD"]` checks whether the form was submitted.
- `htmlspecialchars()` helps prevent user input from being interpreted as HTML.
- `nl2br()` preserves line breaks in the message.
- The password is collected by the form but is not displayed or stored by this example.

### Example Output

```text
Registration Details

Full Name: Ahmed Ali
Message: Hello, this is my message.
Gender: Male
```

## Screenshot

---

# Summary

This practice demonstrates:

- Collecting user information using HTML.
- Sending data with the POST method.
- Retrieving form values using `$_POST`.
- Displaying submitted data with PHP.