<?php
// require 'db.php';
$idd = (isset($_GET['idd']) ? $_GET['idd'] : '');

// $id = $_GET['id'];
$sql4 = 'SELECT * FROM user WHERE id=:id';
$stm3 = $dbh->prepare($sql4);
$stm3->execute([':id' => $idd]);
$person = $stm3->fetch(PDO::FETCH_OBJ);
if (isset($_POST['name'])  && isset($_POST['email'])) {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];

    $sql5 = 'UPDATE `user` SET `full_name`=:name,`email`=:email,`phone`=:phone WHERE `id` = :id';
    $stm4 = $dbh->prepare($sql5);
    if ($stm4->execute([':name' => $name, ':email' => $email, ':phone' => $phone, ':id' => $idd])) {
        header("Location: /");
    }
}


?>

<div class="card-header">
    <h2 style="color:aliceblue; text-align: center;">Create a person</h2>
</div>
<div class="card-body" style="background-color: aliceblue;">
    <?php if (!empty($messages)) : ?>
        <div class="alert alert-success">
            <?= $messages; ?>
        </div>
    <?php endif; ?>
    <form method="post">
        <div class="form-group">
            <label for="name">Name</label>
            <input value="<?= $person->full_name; ?>" type="text" name="name" id="name" class="form-control">
        </div>
        <div class="form-group">
            <label for="email">Email</label>
            <input value="<?= $person->email; ?>" type="email" name="email" id="email" class="form-control">
        </div>
        <div class="form-group">
            <label for="email">phone</label>
            <input value="<?= $person->phone; ?>" type="text" name="phone" id="phone" class="form-control">
        </div>
        <div class="form-group">
            <input type="submit" value="submit" class="btn btn-info">
        </div>

    </form>
</div>