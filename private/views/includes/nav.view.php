<style>
    nav ul li a {
        width: 110px;
        text-align: center;
        border-left: solid thin #eee !important;
        /* border-right: solid thin #fff !important; */
        border-radius: 2px;
    }

    nav ul li a:hover {
        background-color: gray;
        color: white !important;
    }
</style>
<nav class="navbar navbar-expand-lg bg-body-tertiary">
    <div class="container-fluid">
        <a class="navbar-brand" href="#">
            <img src="<?= ROOT . ASSETS_ROOT ?>/images/logo.png" style="width:60px;" alt="Logo">
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarScroll" aria-controls="navbarScroll" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarScroll">
            <ul class="navbar-nav me-auto my-2 my-lg-0 navbar-nav-scroll" style="--bs-scroll-height: 100px;">
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="<?= ROOT ?>">DASHBOARD</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="<?= ROOT ?>/schools">SCHOOLS</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="<?= ROOT ?>/users">STAFF</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="<?= ROOT ?>/students">STUDENTS</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="<?= ROOT ?>/classes">CLASSES</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="<?= ROOT ?>/tests">TESTS</a>
                </li>
            </ul>
            <ul class="navbar-nav ms-auto" style="--bs-scroll-height: 100px;">
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        <?= Auth::getFirstname() ?>
                    </a>
                    <ul class="dropdown-menu dropdown-menu-end">
                        <li><a class="dropdown-item" href="<?= ROOT ?>/profile">Profile</a></li>
                        <li><a class="dropdown-item" href="<?= ROOT ?>">Dashboard</a></li>
                        <li>
                            <hr class="dropdown-divider">
                        </li>
                        <li><a class="dropdown-item" href="<?= ROOT ?>/logout">Logout</a></li>
                    </ul>
                </li>
            </ul>
            <!-- <form class="d-flex" role="search">
                <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                <button class="btn btn-outline-success" type="submit">Search</button>
            </form> -->
        </div>
    </div>
</nav>