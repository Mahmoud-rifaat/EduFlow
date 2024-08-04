<?php
require '../private/views/includes/header.view.php';
?>


<div class="container-fluid">
    <div class="p-4 mt-5 mx-auto shadow rounded" style="width:100%; max-width:340px">
        <form class="d-flex flex-column justify-content-around align-items-center gap-2">
            <img class="rounded-circle shadow" style="width: 40%;" src="<?= asset('/images/logo.png') ?>" alt="Logo">
            <h3>Add User</h3>
            <input class="form-control" type="text" name="firstname" placeholder="First Name" autofocus></input>
            <input class="form-control" type="text" name="lastname" placeholder="Last Name" autofocus></input>
            <input class="form-control" type="email" name="email" placeholder="Email" autofocus></input>
            <select class="form-control">
                <option>--Select a Gender--</option>
                <option>Male</option>
                <option>Female</option>
            </select>
            <select class="form-control">
                <option value="">--Select a Rank--</option>
                <option value="student">Student</option>
                <option value="reception">Reception</option>
                <option value="lecturer">Lecturer</option>
                <option value="admin">Admin</option>
                <option value="super">Super Admin</option>
            </select>
            <input class="form-control" type="text" name="password" placeholder="Password" autofocus></input>
            <input class="form-control" type="text" name="password2" placeholder="Retype Password" autofocus></input>
            <input class="btn btn-primary w-50" type="submit" value="Signup">
            <input class="btn btn-danger w-50" type="submit" value="Cancel">
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