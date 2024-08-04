<style>
    nav ul li a:hover {
        background-color: gray;
        color: white !important;
        border-radius: 5px;
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
                    <a class="nav-link" href="<?= ROOT ?>/users">USERS</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="<?= ROOT ?>/classes">CLASSES</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="<?= ROOT ?>/tests">TESTS</a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        USER
                    </a>
                    <ul class="dropdown-menu">
                        <li><a class="dropdown-item" href="<?= ROOT ?>/profile">Profile</a></li>
                        <li><a class="dropdown-item" href="<?= ROOT ?>">Dashboard</a></li>
                        <li>
                            <hr class="dropdown-divider">
                        </li>
                        <li><a class="dropdown-item" href="<?= ROOT ?>/logout">Logout</a></li>
                    </ul>
                </li>
                <li class="nav-item">
                    <a class="nav-link disabled" aria-disabled="true">Link</a>
                </li>
            </ul>
            <!-- <form class="d-flex" role="search">
                <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                <button class="btn btn-outline-success" type="submit">Search</button>
            </form> -->
        </div>
    </div>
</nav>