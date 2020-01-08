<?php

$xml = simplexml_load_file('source.xml');
            //echo $xml->page[2]->content;
            //echo $xml->page[1]['id'];
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8"/>
        <link rel="stylesheet" href="assets/library/bootstrap/css/bootstrap.min.css" />
        <link rel="stylesheet" href="assets/css/style.css"/>
    </head>
    <body>  
        <?php include 'header.html' ?>
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <?php include 'indexCtrl.php' ?>
                </div>
            </div>
        </div>
        <div class="mt-5">
            <div class="container-fluid">
                
            <?php include 'footer.html' ?>
            </div>
        </div>
        <script src="assets/libraries/jquery/jquery-3.4.1.min.js"></script>
        <script src="assets/libraries/bootstrap-4.3.1-dist/js/bootstrap.min.js" rel="stylesheet"></script>
        <script src="assets/js/script.js"></script>
    </body>
</html>