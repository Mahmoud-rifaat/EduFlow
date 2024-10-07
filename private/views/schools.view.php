<?php
echo $this->view('./includes/header');
echo $this->view('./includes/nav');
?>


<div class="container-fluid p-4 shadow mx-auto" style="max-width: 1000px;">
    <?php $this->view('includes/crumbs', ['crumbs' => $crumbs]) ?>


    <?php
    $school = new School();
    $schools = $school->findAll();
    ?>

    <div class="card-group justify-content-center text-center">
        <h5>Schools</h5>
        <table class="table table-striped table-hover">
            <tr>
                <th></th>
                <th>School</th>
                <th>Created by</th>
                <th>Date</th>
                <th>
                    <a href="<?= ROOT ?>/schools/add">
                        <button class="btn btn-sm btn-primary"><i class="fa fa-plus">
                            </i>Add New</button>
                    </a>
                </th>
            </tr>

            <?php if ($rows): ?>
                <?php foreach ($schools as $school): ?>
                    <tr>
                        <td><button class="btn btn-sm btn-primary"><i class="fa fa-chevron-right"></i></button></td>
                        <td><?= $school->school_name ?></td>
                        <td><?= $school->user->firstname ?> <?= $school->user->lastname ?></td>
                        <td><?= format_date($school->date) ?></td>
                        <td>
                            <a href="<?= ROOT ?>/schools/edit/<?= $school->id ?>" style="text-decoration: none;">
                                <button class="btn btn-sm btn-info"><i class="fa fa-edit"></i></button>
                            </a>

                            <a href="<?= ROOT ?>/schools/delete/<?= $school->id ?>" style="text-decoration: none;">
                                <button class="btn btn-sm btn-danger"><i class="fa fa-trash"></i></button>
                            </a>

                            <a href="<?= ROOT ?>/switch_school/<?= $school->id ?>">
                                <button class="btn btn-sm btn-success">Switch to<i class="fa fa-chevron-right"></i></button>
                            </a>
                        </td>
                    </tr>
                <?php endforeach ?>
            <?php else: ?>
                <h4>No schools found!</h4>
            <?php endif; ?>
        </table>
    </div>
</div>

<?php
echo $this->view('./includes/footer');
?>