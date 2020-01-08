<?php
include 'indexController.php';
?>
<!DOCTYPE html>
<html lang="fr" dir="ltr">
    <head>
        <meta charset="utf-8" />
        <meta name= "viewport" content="width=device-width, initial-scale=1" />
        <link rel="stylesheet" href="assets/bootstrap-4.3.1-dist/css/bootstrap.min.css" />
        <link rel="stylesheet" href="assets/css/style<?= $_GET['id'] ?>.css" />
        <!--Intégration du titre de la page-->
        <title><?= $website->page[$id - 1]->title; ?></title>
    </head>
    <body>
        <?php
        include 'header.php';
        ?>
        <div class="container"> 
            <div class="row">
                <div class="col-12">
                    <?= $website->page[$id - 1]->content; ?>          
                </div>
            </div>
        </div>
        <div class="container">
            <?php
            include 'footer.html';
            ?>
        </div>
        <script src="assets/js/jquery-3.4.1.js"></script>
        <script src="assets/bootstrap-4.3.1-dist/js/bootstrap.min.js"></script>
        <script src="assets/js/script.js"></script>
    </body>
</html>
