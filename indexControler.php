<?php
//pour parser le fichier xml avec la techno Simplexml
  $xml = Simplexml_load_file('source.xml');
//condition pour recupérer le numéro de la page (par defaut 1)
if (isset($_GET['id'])) {
  $id = $_GET['id']-1;
}else{
  $id = 1;
}
?>
