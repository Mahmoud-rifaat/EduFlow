<?php
require '../private/views/includes/header.view.php';
?>


<div class="container-fluid">
    <div class="p-4 mt-5 mx-auto shadow rounded" style="width:100%; max-width:310px">
        <form class="d-flex flex-column justify-content-around align-items-center gap-3" method="post">
            <img class="rounded-circle shadow" style="width: 40%;" src="<?= asset('/images/logo.png') ?>" alt="Logo">
            <h3>Login</h3>
            <?php if (count($errors) > 0) : ?>
                <div class="alert alert-danger alert-dismissible fade show" role="alert">
                    <strong>Errors: </strong></br>
                    <?php foreach ($errors as $key => $value) {
                        echo $key . ' : ' . $value . '</br>';
                    } ?>
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
            <?php endif; ?>
            <input class="form-control" value="<?= get_var('email') ?>" type="email" name="email" placeholder="email" autofocus></input>
            <input class="form-control" value="<?= get_var('password') ?>" type="password" name="password" placeholder="password" autofocus></input>
            <input class="btn btn-primary w-50" type="submit" value="Login">
        </form>
    </div>
</div>


<?php
require '../private/views/includes/footer.view.php';
?>