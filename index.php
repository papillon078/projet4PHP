<?php
 include 'indexControler.php';
 $xml = Simplexml_load_file('source.xml');
 ?>
<!DOCTYPE html>
<html lang="fr" dir="ltr">
  <head>
    <meta charset="utf-8" />
    <meta name= "viewport" content="width=device-width, initial-scale=1" />
    <link rel="stylesheet" href="assets/bootstrap-4.3.1-dist/css/bootstrap.min.css" />
    <link rel="stylesheet" href="assets/css/style.css" />
    <title></title>
  </head>
  <body>
    <?php
    foreach($xml->page as $page) {
     ?>
<a href="<?= $page['id'] ?>.html"><?= $page->menu ?></a>
<?php } ?>
<?= $xml->page[$id-1]->content ?>
<script src="assets/js/jquery-3.4.1.min.js"></script>
<script src="assets/bootstrap-4.3.1-dist/js/bootstrap.min.js"></script>
  </body>
</html>
