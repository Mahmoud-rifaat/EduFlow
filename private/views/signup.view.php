<?php
require '../private/views/includes/header.view.php';
?>


<div class="container-fluid">
    <div class="p-4 mt-5 mx-auto shadow rounded" style="width:100%; max-width:340px">
        <form class="d-flex flex-column justify-content-around align-items-center gap-2" method="post">
            <img class="rounded-circle shadow" style="width: 40%;" src="<?= asset('/images/logo.png') ?>" alt="Logo">
            <h3>Add User</h3>
            <!-- Errors -->
            <?php if (count($errors) > 0) : ?>
                <div class="alert alert-danger alert-dismissible fade show" role="alert">
                    <strong>Errors: </strong></br>
                    <?php foreach ($errors as $key => $value) {
                        echo '<strong>' . $key . '</strong> : ' . $value . '</br>';
                    } ?>
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
            <?php endif; ?>
            <input class="form-control" value="<?= get_var('firstname') ?>" type="text" name="firstname" placeholder="First Name" autofocus></input>
            <input class="form-control" value="<?= get_var('lastname') ?>" type="text" name="lastname" placeholder="Last Name" autofocus></input>
            <input class="form-control" value="<?= get_var('email') ?>" type="email" name="email" placeholder="Email" autofocus></input>
            <select class="form-control" name="gender">
                <option <?= get_select('gender', '') ?> value="">--Select a gender--</option>
                <option <?= get_select('gender', 'male') ?> value="male">Male</option>
                <option <?= get_select('gender', 'female') ?> value="female">Female</option>
            </select>
            <select class="form-control" name="rank">
                <option <?= get_select('rank', '') ?> value="">--Select a Rank--</option>
                <option <?= get_select('rank', 'student') ?> value="student">Student</option>
                <option <?= get_select('rank', 'reception') ?> selected value="reception">Reception</option>
                <option <?= get_select('rank', 'lecturer') ?> value="lecturer">Lecturer</option>
                <option <?= get_select('rank', 'admin') ?> value="admin">Admin</option>
                <option <?= get_select('rank', 'super') ?> value="super">Super Admin</option>
            </select>
            <input class="form-control" value="<?= get_var('lastname') ?>" type="password" name="password" placeholder="Password" autofocus></input>
            <input class="form-control" value="<?= get_var('lastname') ?>" type="password" name="password2" placeholder="Retype Password" autofocus></input>
            <input class="btn btn-primary w-50" type="submit" value="Signup">
            <input class="btn btn-danger w-50" type="button" value="Cancel">
            <!-- <div class="d-flex justify-content-between align-items-between">
                <button class="btn btn-danger text-white">Cancel</button>
                <button class="btn btn-primary text-white">Add User</button>
            </div> -->
        </form>
    </div>
</div>


<?php
require '../private/views/includes/footer.view.php';
?>