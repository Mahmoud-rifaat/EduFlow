<?php
$this->view('includes/header');
?>


<div class="container-fluid">
    <form method="post">
        <div class="p-4 mt-5 mr-4 mx-auto shadow rounded" style="width:100%; max-width:340px">
            <img class="border border-primary d-block mx-auto rounded-circle" style="width: 100px;" src="<?= asset('/images/logo.png') ?>" alt="Logo">
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
            <input class="my-2 form-control" value="<?= get_var('firstname') ?>" type="text" name="firstname" placeholder="First Name" autofocus></input>
            <input class="my-2 form-control" value="<?= get_var('lastname') ?>" type="text" name="lastname" placeholder="Last Name" autofocus></input>
            <input class="my-2 form-control" value="<?= get_var('email') ?>" type="email" name="email" placeholder="Email" autofocus></input>
            <select class="my-2 form-control" name="gender" aria-readonly="true">
                <option <?= get_select('gender', '') ?> value="">--Select a gender--</option>
                <option <?= get_select('gender', 'male') ?> value="male">Male</option>
                <option <?= get_select('gender', 'female') ?> value="female">Female</option>
            </select>
            <?php if ($mode == 'students'): ?>
                <select class="my-2 form-control" name="rank" readonly='true'>
                    <option <?= get_select('rank', 'student') ?> value="student" selected>Student</option>
                </select>
            <?php else: ?>
                <select class="my-2 form-control" name="rank">
                    <option <?= get_select('rank', '') ?> selected value="">--Select a Rank--</option>
                    <option <?= get_select('rank', 'student') ?> value="student">Student</option>
                    <option <?= get_select('rank', 'reception') ?> value="reception">Reception</option>
                    <option <?= get_select('rank', 'lecturer') ?> value="lecturer">Lecturer</option>
                    <option <?= get_select('rank', 'admin') ?> value="admin">Admin</option>
                    <?php if (Auth::getRank() == 'super'): ?>
                        <option <?= get_select('rank', 'super') ?> value="super">Super Admin</option>4
                    <?php endif; ?>
                </select>
            <?php endif; ?>

            <input class="my-2 form-control" value="<?= get_var('lastname') ?>" type="password" name="password" placeholder="Password" autofocus></input>
            <input class="my-2 form-control" value="<?= get_var('lastname') ?>" type="password" name="password2" placeholder="Retype Password" autofocus></input>

            <div class="d-flex justify-content-between align-items-between gap-3">

                <?php if ($mode == 'students'): ?>
                    <a href="<?= ROOT ?>/students">
                        <input class="btn btn-danger" type="button" value="Cancel">
                    </a>
                <?php else: ?>
                    <a href="<?= ROOT ?>/users">
                        <input class="btn btn-danger" type="button" value="Cancel">
                    </a>
                <?php endif; ?>

                <input class="btn btn-primary" type="submit" value="Signup">
            </div>
        </div>
    </form>
</div>


<?php
$this->view('includes/footer');
?>