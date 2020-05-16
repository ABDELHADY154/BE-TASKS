<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>login-register</title>
    <style>
        h3 {
            color: red;
        }
    </style>
</head>

<body>
    <h1>Register:</h1>
    <hr>
    <form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">

        Name: <input type=" text" name="name">
        <br><br>
        E-mail: <input type="text" name="email">
        <br><br>
        Password: <input type="text" name="password">
        <br><br>
        retype password: <input type="text" name="retype-password">
        <br><br>
        <input type="submit" name="submit" value="Submit">
    </form>
    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        // collect value of input field
        $name = $_REQUEST["name"];
        $email = $_REQUEST["email"];
        $password = $_REQUEST["password"];
        $rpass = $_REQUEST["retype-password"];

        if (empty($name) || empty($email) || empty($password) || empty($rpass)) {
            echo "<h3>please fill out the form**</h3>";
        } elseif (!($password === $rpass)) {
            echo "<h3>password MISMATCH**</h3>";
        } else {
            echo '<h2>Succesfully registerd</h2>';
            echo 'name: ', $name, '<br>';
            echo 'email: ', $email, '<br>';
            echo 'password: ', $password, '<br>';
        }
    }
    ?>
    <hr>

</body>

</html>