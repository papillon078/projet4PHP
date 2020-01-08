<?php
$xml = simplexml_load_file("source.xml");
?>
<!doctype html>
<html lang=fr dir="ltr">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <link rel="stylesheet" href="assets/libraries/bootstrap-4.3.1-dist/css/bootstrap.min.css" />
        <link href="assets/css/style.css" rel="stylesheet" />
        <title><?= $xml->page[0]->menu; ?></title>
    </head>
    <body>
        <?php include 'header.html' ?>
        <div class="container">
            <?= $xml->page[0]->content; ?>
        </div>
        <?php include 'footer.html' ?>
    </body>
</html>
