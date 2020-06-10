<?php
// $id = (isset($_GET['id']) ? $_GET['id'] : '');


?>

<div class="card mt-5">
    <div class="card-header">
        <h2 style="text-align: center;">All entries</h2>
        <!-- <0?php var_dump($users); ?> -->
    </div>
    <div class="card-body">
        <table class="table table-bordered">
            <tr>
                <th>ID</th>
                <th>Name</th>
                <th>Email</th>
                <th>phone</th>
                <th>Action</th>
            </tr>
            <?php foreach ($users as $person) : ?>
                <tr>
                    <td><?= $person->id; ?></td>
                    <td><?= $person->full_name; ?></td>
                    <td><?= $person->email; ?></td>
                    <td><?= $person->phone; ?></td>

                    <td>
                        <a href="<?= '?p=edit&idd=' . $person->id ?>" class="btn btn-info">Edit</a>
                        <a onclick="return confirm('Are you sure you want to delete this entry?')" href="<?= 'index.php?id=' . $person->id ?>" class='btn btn-danger'>Delete</a>
                    </td>
                </tr>
            <?php endforeach; ?>
        </table>
    </div>
</div>
<!-- <?= '?p=edit,id=' . $person->id ?> -->