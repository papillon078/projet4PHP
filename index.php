<?php
include 'indexControler.php';
?>
<!doctype html>
<html lang=fr dir="ltr">
<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
  <link rel="stylesheet" href="assets/libraries/bootstrap-4.3.1-dist/css/bootstrap.min.css" />
  <link href="assets/css/style<?= isset($_GET['id'])?$_GET['id']:'1' ?>.css" rel="stylesheet" />
  <!-- insertion du texte du titre de la page venant du fichier xml -->
  <title><?= $xml->page[$id]->title; ?></title>
</head>
<body>
  <!-- insertion de la navbar -->
  <?php include 'header.php'; ?>
  <div class="container">
    <div class="row">
      <div class="col-12">
        <!-- insertion de la bonne page -->
        <?= $xml->page[$id]->content; ?>
      </div>
    </div>
  </div>
  <!-- insertion du footer -->
  <?php include 'footer.html'; ?>
</body>
</html>
