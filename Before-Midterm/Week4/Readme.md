# Chapter 3: Continue – Short Theory Notes

# 1. Scope of Variables

**Variable scope** means the part of the program where a variable can be accessed.

There are different scopes:

* Local scope
* Global scope
* Static scope
* Superglobal scope

---

# 2. Local Variables

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

# 3. Global Variables

A variable declared outside a function has **global scope**.

Normally, it cannot be directly accessed inside a function.

Example:

```php
$x = 10;
```

`$x` is a global variable.

---

# 4. global Keyword

The `global` keyword allows a function to access a global variable.

Example:

```php
global $a;
echo $a;
```

It connects the variable inside the function to the global variable outside it.

---

# 5. $GLOBALS

PHP stores global variables inside the `$GLOBALS` array.

Example:

```php
echo $GLOBALS["a"];
```

`$GLOBALS` can be used inside functions to access or modify global variables.

---

# 6. Superglobal Variables

Superglobals are predefined PHP variables that are accessible throughout the program.

Common superglobals include:

* `$_GET`
* `$_SESSION`
* `$_FILES`
* `$_SERVER`
* `$GLOBALS`

They contain useful information about the program, server, files, sessions, and requests.

---

# 7. Recap of Variable Scope

### Local

Accessible only within its function.

### Global

Accessible outside functions and can be accessed inside functions using `global` or `$GLOBALS`.

### Static

Accessible only inside the function but keeps its value between function calls.

### Best Practice

Try to use local variables whenever possible.

---

# 8. Including Files in PHP

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

# 9. include Statement

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

# 10. include_once

`include_once` works like `include`, but ensures that the file is included only once during script execution.

Example:

```php
include_once "library.php";
```

It helps prevent the same file from being loaded multiple times.

---

# 11. require Statement

`require` is used when a file is essential for the program.

Example:

```php
require "library.php";
```

If the file cannot be found, PHP produces a fatal error and stops execution.

---

# 12. require_once

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

# 13. include vs require

| include                               | require                     |
| ------------------------------------- | --------------------------- |
| Produces a warning if file is missing | Produces a fatal error      |
| Script continues                      | Script stops                |
| Used when file is not essential       | Used when file is essential |

### Simple Rule

**include → optional file**

**require → necessary file**

---

# 14. include_once vs require_once

Both prevent a file from being included more than once.

### include_once

* Warning if file is missing.
* Program continues.

### require_once

* Fatal error if file is missing.
* Program stops.

---

# 15. function_exists()

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

# 16. Understanding Paths

When including files, the file path must be correct.

A **relative path** describes the location of a file relative to the current directory.

Example:

```php
require_once("../abc/include.php");
```

### `../`

Means to move one directory up from the current directory.

---

# Chapter 4: Advanced PHP Forms – Short Theory Notes

This README contains short theory notes from Slides 1–10, covering HTML forms and retrieving form data using PHP.
---

# 1. Introduction to HTML Forms

An **HTML form** is a collection of input fields used to collect information from users.

Forms allow users to enter information and send it to a web server.

Example:

```html
<form>
    <input type="text" name="name">
</form>
```

---

# 2. Form Handling Process

Handling forms involves three main steps:

1. Create a form to collect user information.
2. Send the data to the web server for processing and error checking.
3. Process the data and perform an action, often involving a database.

---

# 3. Form Controls

Form controls are elements that allow users to enter or select information.

Common form controls include:

- Text field
- Password field
- Radio button
- Checkbox
- Textarea
- Drop-down menu
- File upload
- Submit button
- Reset button

---

# 4. Basic Requirements of a Form

A form needs the following elements:

- Opening `<form>` and closing `</form>` tags.
- A submission method, such as `GET` or `POST`.
- One or more input controls.
- A destination URL or form action.

Example:

```html
<form action="" method="post">
    <input type="text" name="name">
    <input type="submit" value="Submit">
</form>
```

---

# 5. GET and POST Methods

**GET**

- Sends data through the URL.
- Submitted information is visible in the URL.

**POST**

- Sends data in the request body.
- Form values are not displayed in the URL.

Example:

```html
<form method="get">
```

```html
<form method="post">
```
---

# 6. HTML Form Elements

Common HTML form tags include:

- `<form>` – creates a form.
- `<fieldset>` – groups related form fields.
- `<legend>` – provides a caption for a fieldset.
- `<label>` – describes an input field.
- `<input>` – creates different types of input controls.
- `<select>` – creates a drop-down list.
- `<option>` – defines an option in a drop-down list.
- `<textarea>` – creates a multiline text field.

---

# 7. Retrieving Submitted Data

PHP uses superglobal variables to retrieve submitted form data.

- `$_GET` – retrieves data sent using GET.
- `$_POST` – retrieves data sent using POST.
- `$_REQUEST` – retrieves request data from GET, POST, and other configured sources.
- `$_FILES` – contains information about uploaded files.

Example:

```php
$name = $_POST['name'];
echo $name;
```

The `name` inside `$_POST['name']` must match the input's `name` attribute.

---

# 8. PHP Superglobals

Superglobals are predefined PHP variables that can be accessed from anywhere in the script, including functions.

Examples:

- `$_GET`
- `$_POST`
- `$_REQUEST`
- `$_FILES`
- `$_SERVER`
- `$GLOBALS`

**Important:** PHP form control names are case-sensitive. For example, `name` and `Name` are different.

---

# 9. Textbox and Password Fields

A text field collects ordinary text, while a password field hides the characters entered on the screen.

### HTML Code

```html
<form method="post">
    <label>Enter Full Name</label>
    <input type="text" name="name">

    <label>Enter Password</label>
    <input type="password" name="pass">

    <input type="reset" value="Reset Form">
    <input type="submit" name="submit" value="Register">
</form>
```

### PHP Code

```php
<?php
echo "User name: " . $_POST['name'];
echo "<br>Password: " . $_POST['pass'];
?>
```

**Explanation:** PHP uses `$_POST` to retrieve the values entered into the form.

---

# 10. Textbox, Password and Textarea

A `textarea` allows users to enter longer, multiline text, such as comments or messages.

### HTML Code

```html
<form method="post">
    <input type="text" name="fullName">

    <input type="password" name="pinCode">

    <textarea name="comment" cols="30" rows="6"></textarea>

    <input type="reset" value="Reset Form">
    <input type="submit" name="submit" value="Register">
</form>
```

### PHP Code

```php
<?php
echo "User name: " . $_POST['fullName'];
echo "<br>Password: " . $_POST['pinCode'];
echo "<br>Comment: " . $_POST['comment'];
?>
```

**Explanation:**

- `cols` controls the approximate width of the textarea.
- `rows` controls the number of visible text lines.
- `$_POST` retrieves the submitted values.

---

# Summary

This chapter introduces:

- HTML forms and form handling
- Form controls and HTML tags
- GET and POST methods
- PHP superglobal variables
- Retrieving submitted form data
- Textbox, password and textarea fields
