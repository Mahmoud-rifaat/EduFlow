<?php
$this->view('includes/header');
$this->view('includes/nav');
?>


<div class="container-fluid p-4 shadow mx-auto" style="max-width: 1000px;">
    <?php $this->view('./includes/crumbs', ['crumbs' => $crumbs]); ?>


    <a href="<?= ROOT ?>/signup">
        <button class="btn btn-sm btn-primary"><i class="fa fa-plus">
            </i>Add New</button>
    </a>
    <div class="card-group justify-content-center">
        <?php if (is_array($users)): ?>
            <?php foreach ($users as $user): ?>
                <div class="card m-3 shadow-sm" style="max-width: 14rem; min-width:14rem">
                    <div class="card-header">User profile</div>
                    <img src="<?= asset('/images/user_female.jpg') ?>" alt="..." class="card-img-top">
                    <div class="card-body">
                        <h5 class="card-title"><?= $user->firstname ?> <?= $user->lastname ?></h5>
                        <p class="card-text"><?= $user->rank ?></p>
                        <a href="<?= ROOT ?>/profile/<?= $user->user_id ?>" class="btn btn-primary">Profile</a>
                    </div>
                </div>
            <?php endforeach ?>
        <?php else: ?>
            <h4>No staff members were found!</h4>
        <?php endif ?>
    </div>


    <!-- <table style="width: 100%; text-align:center;">
        <tr>
            <th>First name</th>
            <th>Last name</th>
            <th>email</th>
            <th>Creation date</th>
            <th>gender</th>
            <th>rank</th>
        </tr>

        <?php
        foreach ($users as $user) {
            echo '
                <tr>
                    <td>' . $user->firstname . '</td>
                    <td>' . $user->lastname . '</td>
                    <td>' . $user->email . '</td>
                    <td>' . $user->date . '</td>
                    <td>' . $user->gender . '</td>
                    <td>' . $user->rank . '</td>
                </tr>
        ';
        }
        ?>
    </table> -->
</div>

<?php
$this->view('includes/footer');
?>