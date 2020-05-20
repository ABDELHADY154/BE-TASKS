<?php session_start(); ?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ADMIN</title>
</head>

<body>
    <div style="text-align: center">
        <?php
        echo 'welcome ' . $_SESSION['EMAIL'] . '<br><br>';

        ?>
        <img name="img" src="./<?= $_SESSION['pic']; ?>" height="300px" width="300px">
    </div>
</body>

</html>