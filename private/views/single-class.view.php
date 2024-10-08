<?php
$this->view('includes/header');
$this->view('includes/nav');
?>


<div class="container-fluid p-4 shadow mx-auto" style="max-width: 1000px;">
    <?php $this->view('./includes/crumbs', ['crumbs' => $crumbs]); ?>

    <?php if ($row): ?>
        <div class="row">
            <div class="col-sm-4 col-md-3">
                <img src="<?= get_user_image($row) ?>" alt="female user" class="border border-primary d-block mx-auto rounded-circle" style="width:150px;">
                <h3 class="text-center"><?= esc($row->firstname) ?> <?= esc($row->lastname) ?></h3>
            </div>
            <div class="col-sm-8 col-md-9 bg-light p-2">
                <table class="table table-hover table-striped table-bordered">
                    <tr>
                        <th>First Name:</th>
                        <td><?= esc($row->firstname) ?></td>
                    </tr>
                    <tr>
                        <th>Last Name:</th>
                        <td><?= esc($row->lastname) ?></td>
                    </tr>
                    <tr>
                        <th>Email:</th>
                        <td><?= esc($row->email) ?></td>
                    </tr>
                    <tr>
                        <th>Gender:</th>
                        <td><?= esc($row->gender) ?></td>
                    </tr>
                    <tr>
                        <th>Rank:</th>
                        <td><?= esc($row->rank) ?></td>
                    </tr>
                    <tr>
                        <th>Date Created:</th>
                        <td><?= format_date($row->date) ?></td>
                    </tr>
                </table>
            </div>
        </div>
        <br>
        <div class="container-fluid">
            <ul class="nav nav-tabs">
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="#">Basic Info</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Classes</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Tests</a>
                </li>
                <!-- <li class="nav-item">
                <a class="nav-link disabled" aria-disabled="true">Disabled</a>
            </li> -->
            </ul>

            <!-- <nav class="navbar bg-body-tertiary">
            <div class="container-fluid">
                <form class="d-flex" role="search">
                    <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                    <button class="btn btn-outline-success" type="submit"><i class="fa fa-search">fa</i></button>
                </form>
            </div>
        </nav> -->
            <nav class="navbar navbar-light bg-light">
                <form class="form-inline">
                    <div class="input-group">
                        <div class="input-group-prepend">
                            <span class="input-group-text" id="basic-addon1"><i class="fa-solid fa-magnifying-glass"></i>&nbsp</span>
                        </div>
                        <input type="text" class="form-control" placeholder="Search" aria-label="Search" aria-describedby="basic-addon1">
                    </div>
                </form>
            </nav>
        </div>
    <?php else: ?>
        <h4 class="text-center">Profile was not found!</h4>
    <?php endif; ?>
</div>


<?php
$this->view('includes/footer');
?>