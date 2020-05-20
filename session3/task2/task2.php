<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
</head>
<?php

$errors = [];
$data = ['email' => 'admin@gmail.com', 'password' => 'S1234s12'];
if ($_SERVER["REQUEST_METHOD"] == "POST") :
    $form = $_POST['form'];
    $email = $_POST["email"];
    $password = $_POST["password"];
endif;
// email
if (isset($form) && isset($email)) {
    if ($email !== $data['email']) {
        $errors[] = 'PLZ enter correct email!';
    } else {
        $_SESSION["EMAIL"] = $email;
    }
}
if (isset($form) && empty($password)) {
    $errors[] = 'PLZ enter a password';
} elseif (isset($form) && isset($password)) {
    if ($password !== $data['password']) {
        $errors[] = 'PLZ enter correct password!';
    } else {
        header('location:profile.php');
    }
}
?>

<body>

    <div style="text-align: center">

        <h2>Login Form</h2>
        <form method="POST" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" onsubmit="<?php
                                                                                                        // if (isset($form) && !($errors)) {
                                                                                                        //     echo "window.location.href = './profile.php'; return false;";
                                                                                                        // }
                                                                                                        ?>">
            Email: <input type="email" name="email" value="<?php if (!empty($email)) {
                                                                echo $email;
                                                            } ?>"><br><br>
            Password: <input type="password" name="password" value="<?php if (!empty($password)) {
                                                                        echo $password;
                                                                    } ?>"><br>
            <br> <input type="submit" name="form" value="login">
        </form>
        <?php
        if (count($errors)) :
        ?>
            <ul style="list-style: none">
                <?php for ($i = 0; $i < count($errors); $i++) : ?>
                    <li style="color: red"> <?= $errors[$i] ?> </li>
                <?php endfor; ?>
            </ul>
        <?php
        endif;
        ?>
    </div>
    <?php
    // print_r($_POST);
    // echo '<br> stored';
    // print_r($_SESSION);
    ?>
</body>

</html>