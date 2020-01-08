<header>
    <nav class="navbar sticky-top navbar-expand-md navbar-dark bg-primary">
        <a class="navbar-brand" href="index.php">
            <img src="assets/img/ocordoLogo.png" width="70" height="60" class="d-inline-block align-top"/>
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav mr-auto">
                <?php foreach ($website->page as $page) {
                    ?>
                    <li class="nav-item active">
                        <a class="nav-link" href="index.php?id=<?= $page['id'] ?>"><?= $page->menu ?></a>
                    </li>
                <?php } ?>
            </ul>
            <form class="form-inline my-2 my-lg-0">
                <input class="form-control mr-sm-2" type="text" placeholder="Recherche">
                <button class="btn btn-secondary my-2 my-sm-0" type="submit">Recherche</button>
            </form>
        </div>
    </nav>
    <img src="assets/img/Societe-de-renovation-à-Lille.jpg" width="100%" height="300" class="d-inline-block align-top"/>
    <ol class="breadcrumb">
        Société de rénovation à Lille
    </ol>
</header>