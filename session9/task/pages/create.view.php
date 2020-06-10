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
            <input type="text" name="name" id="name" class="form-control">
        </div>
        <div class="form-group">
            <label for="email">Email</label>
            <input type="email" name="email" id="email" class="form-control">
        </div>
        <div class="form-group">
            <label for="email">phone</label>
            <input type="text" name="phone" id="phone" class="form-control">
        </div>
        <div class="form-group">
            <button type="submit" class="btn btn-info">submit</button>
        </div>

    </form>
</div>