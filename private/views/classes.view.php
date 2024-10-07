<?php
echo $this->view('./includes/header');
echo $this->view('./includes/nav');
?>


<div class="container-fluid p-4 shadow mx-auto" style="max-width: 1000px;">
    <?php $this->view('includes/crumbs', ['crumbs' => $crumbs]) ?>

    <div class="d-flex flex-column card-group justify-content-center text-center">
        <h5>Classes</h5>
        <table class="table table-striped table-hover">
            <tr>
                <th></th>
                <th>Class Name</th>
                <th>Created by</th>
                <th>Date</th>
                <th>
                    <a href="<?= ROOT ?>/classes/add">
                        <button class="btn btn-sm btn-primary"><i class="fa fa-plus">
                            </i>Add New</button>
                    </a>
                </th>
            </tr>

            <?php if ($rows): ?>
                <?php foreach ($rows as $class): ?>
                    <tr>
                        <td>
                            <a href="<?= ROOT ?>/single_class/<?= $class->class_id ?>" style="text-decoration: none;">
                                <button class="btn btn-sm btn-primary"><i class="fa fa-chevron-right"></i></button>
                            </a>
                        </td>
                        <td><?= $class->class_name ?></td>
                        <td>
                            <?php if (isset($class->user)): ?>
                                <?= $class->user->firstname ?> <?= $class->user->lastname ?>
                            <?php else: ?>
                                --
                            <?php endif; ?>
                        </td>
                        <td><?= format_date($class->date) ?></td>
                        <td>
                            <a href="<?= ROOT ?>/classes/edit/<?= $class->id ?>" style="text-decoration: none;">
                                <button class="btn btn-sm btn-info"><i class="fa fa-edit"></i></button>
                            </a>

                            <a href="<?= ROOT ?>/classes/delete/<?= $class->id ?>" style="text-decoration: none;">
                                <button class="btn btn-sm btn-danger"><i class="fa fa-trash"></i></button>
                            </a>
                        </td>
                    </tr>
                <?php endforeach ?>
            <?php else: ?>
                <tr>
                    <td colspan="5">
                        <h4>No classes found!</h4>
                    </td>
                </tr>
            <?php endif; ?>
        </table>
    </div>
</div>

<?php
echo $this->view('./includes/footer');
?>