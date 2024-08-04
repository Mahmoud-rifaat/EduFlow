<?php
require '../private/views/includes/header.view.php';
?>


<div class="container-fluid">
    <div class="p-4 mt-5 mx-auto shadow rounded" style="width:100%; max-width:310px">
        <form class="d-flex flex-column justify-content-around align-items-center gap-3">
            <img class="rounded-circle shadow" style="width: 40%;" src="<?= asset('/images/logo.png') ?>" alt="Logo">
            <h3>Login</h3>
            <input class="form-control" type="email" name="email" placeholder="email" autofocus></input>
            <input class="form-control" type="password" name="password" placeholder="password" autofocus></input>
            <input class="btn btn-primary w-50" type="submit" value="Login">
        </form>
    </div>
</div>


<?php
require '../private/views/includes/footer.view.php';
?>