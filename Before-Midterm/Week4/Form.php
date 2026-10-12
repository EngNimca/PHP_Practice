<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registration Form</title>
    <style>
        * {
            box-sizing: border-box;
        }

        body {
            font-family: Arial, sans-serif;
            background-color: #f0f4f8;
            margin: 0;
            padding: 40px 15px;
        }

        form {
            width: 100%;
            max-width: 420px;
            margin: 0 auto;
            background-color: white;
            border: 1px solid #ddd;
            padding: 25px;
            border-radius: 12px;
            box-shadow: 0 4px 15px rgba(0, 0, 0, 0.1);
        }

        h2 {
            text-align: center;
            color: #1e293b;
            margin-top: 0;
            margin-bottom: 25px;
        }

        label {
            display: block;
            margin-bottom: 8px;
            font-weight: bold;
            color: #334155;
        }

        input[type="text"],
        input[type="password"],
        textarea {
            width: 100%;
            padding: 11px;
            margin-bottom: 18px;
            border: 1px solid #cbd5e1;
            border-radius: 6px;
            font-size: 14px;
            outline: none;
        }

        input:focus,
        textarea:focus {
            border-color: #2563eb;
        }

        textarea {
            resize: vertical;
        }

        .gender-options {
            display: flex;
            gap: 25px;
            margin-bottom: 22px;
        }

        .gender-options label {
            display: flex;
            align-items: center;
            gap: 7px;
            font-weight: normal;
            margin: 0;
        }

        .gender-options input {
            margin: 0;
        }

        .buttons {
            display: flex;
            gap: 12px;
        }

        button {
            flex: 1;
            padding: 11px;
            background-color: #2563eb;
            color: white;
            border: none;
            border-radius: 6px;
            cursor: pointer;
            font-size: 14px;
        }

        button:hover {
            background-color: #1d4ed8;
        }

        #btn1 {
            background-color: #ef4444;
        }

        #btn1:hover {
            background-color: #dc2626;
        }

        .result {
            max-width: 420px;
            margin: 20px auto;
            padding: 20px;
            background-color: white;
            border-radius: 10px;
            overflow-wrap: anywhere;
        }

        .result h3 {
            color: #2563eb;
        }
    </style>
</head>

<body>
    <form action="" method="post">
        <h2>Registration Form</h2>
        <label for="fullname">Enter Full Name</label>
        <input type="text" id="fullname" name="fullname" placeholder="Enter your full name" required>

        <label for="password">Enter Password</label>
        <input type="password" id="password" name="password" placeholder="Enter your password" required>

        <label for="message">Your Message</label>
        <textarea id="message" name="message" rows="4" placeholder="Write your message..."></textarea>

        <label>Select Your Gender</label>

        <div class="gender-options">
            <label>
                <input type="radio" name="gender" value="Male" required>Male
            </label>

            <label>
                <input type="radio" name="gender" value="Female">Female
            </label>
        </div>

        <div class="buttons">
            <button type="reset" id="btn1">Reset Form</button>
            <button type="submit" name="register">Register</button>
        </div>
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {

        $fullname = ($_POST["fullname"] ?? "");
        $message = ($_POST["message"] ?? "");
        $gender = ($_POST["gender"] ?? "");

        

        echo "<div class='result'>";
        echo "<h3>Registration Details</h3>";
        echo "<p><strong>Full Name:</strong> " . $fullname . "</p>";
        echo "<p><strong>Message:</strong> " . nl2br($message) . "</p>";
        echo "<p><strong>Gender:</strong> " . $gender . "</p>";
        echo "</div>";
    }
    ?>

</body>
</html>
