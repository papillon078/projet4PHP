<?php $xml = simplexml_load_file('source.xml'); ?>
<header>
    <nav class="navbar sticky-top navbar-expand-lg navbar-light bg-white">
        <a class="navbar-brand" href="index.php">
            <p><img src="assets/img/ocordoLogo.png" alt="papillon" /></p>
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
                <?php foreach($xml->page as $page){ ?>
                <li class="nav-item active">
                    <a class="nav-link" href="/projet4PHP/<?= $page['id'] ?>.html"><?= $page->menu; ?><span class="sr-only">(current)</span></a>
                </li>
                <?php } ?>
            </ul>
        </div>
    </nav>
</header>