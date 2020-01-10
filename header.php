<header>
    <nav class="navbar sticky-top navbar-expand-lg navbar-light bg-white">
        <a class="navbar-brand" href="index.php">
            <p><img src="assets/img/ocordoLogo.png" alt="ocordo logo" /></p>
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
                <?php
                //boucle qui génère les menus avec les noms fournis dans le fichier xml
                foreach ($xml->page as $page) {
                    ?>
                    <li class="nav-item active">
                        <a class="nav-link" href="<?= $page['id']; ?>.html"><?= $page->menu; ?></a>
                    </li>
                <?php } ?>
            </ul>
        </div>
    </nav>
</header>
