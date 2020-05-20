<?php
session_start(); ?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>profile</title>
    <?php
    $errors = [];
    // $data = '';
    if ($_SERVER["REQUEST_METHOD"] == "POST") :
        $form = $_POST['form'];
        $image = $_POST['pic'];
    endif;
    if (!empty($form) && empty($image)) {
        $errors[] = 'PLZ upload your picture';
    } elseif (!empty($form) && !empty($image)) {
        if (!preg_match("/\.(jpg|png|jpeg)$/", $image)) {
            $errors[] = 'PLZ make sure that the image uploaded is jpg or png or jpeg ';
        } else {
            $_SESSION["pic"] = $image;
            header('location:personalinfo.php');
        }
    }

    ?>

</head>

<body>
    <div style="text-align: center">
        <?php
        echo 'Welcome ' . $_SESSION['EMAIL'] . '<br><br>';
        ?>
        <form method="POST" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
            please upload your picture: <input type="file" name="pic" accept="image/png, image/jpeg"><br><br>

            <input type="submit" name="form" value="login">
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
        <?php
        // print_r($_SESSION["pic"]);
        ?>
    </div>
</body>

</html>