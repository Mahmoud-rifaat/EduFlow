<?php
echo $this->view('./includes/header');
echo $this->view('./includes/nav');
echo $this->view('./includes/crumbs');
?>


<div class="container-fluid">
    <h1>
        <i class="fa fa-plus btn btn-primary"></i>
        This is Home page
    </h1>
</div>


<?php
require '../private/views/includes/footer.view.php';
?>