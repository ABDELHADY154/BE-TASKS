<?php
// require_once 'delete.php';
$messages = '';
$dsn = 'mysql:host=localhost;dbname=crud';
$username = 'root';
$password = '';
try {
    $dbh = new PDO($dsn, $username, $password);
    if (isset($_POST['name'])  && isset($_POST['email'])) {
        $name = $_POST['name'];
        $email = $_POST['email'];
        $phone = $_POST['phone'];
        $data = [
            'name' => $name,
            'email' => $email,
            'phone' => $phone,
        ];
        $sql = 'INSERT INTO user(full_name, email, phone) VALUES (:name,:email,:phone)';
        $stm = $dbh->prepare($sql);
        if ($stm->execute($data)) {
            $messages = 'data added successfully';
        } else {
            $messages = 'please re-enter your data';
        }


        // echo 'success';
    }
    // ************************************
    $sql1 = 'SELECT * FROM `user`';
    $stm1 = $dbh->prepare($sql1);
    $stm1->execute();
    $users = $stm1->fetchAll(PDO::FETCH_OBJ);
    // *****************************
    if (isset($_GET['id'])) {
        $id = $_GET['id'];
        $sql2 = 'DELETE FROM `user` WHERE id =:id';
        $stm2 = $dbh->prepare($sql2);
        if ($stm2->execute([':id' => $id])) {
            header("Location:/?p=h");
        }
    }
} catch (PDOException $e) {
    $message = date('y-m-d H:i:s') . $e->getMessage() . "\n";
    file_put_contents('error-pdo-connect.txt', $message, FILE_APPEND | LOCK_EX);
    die('site down');
}

// print_r($dbh);
