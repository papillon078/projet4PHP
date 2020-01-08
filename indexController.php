<?php

//simplexml_load_file - Convertit un fichier XML en objet
$website = simplexml_load_file('source.xml');

//echo '<pre>';
//var_dump($website); die;
//echo '</pre>';
//récupération ['id'] de la page à afficher
if (isset($_GET['id'])) {
    //valeur passée en paramétre d'URL
    $id = $_GET['id'];
} else {
    //valeur par défaut correspondant à la page d'accueil
    $id = 1;
}
?>
