<?php

$xml = simplexml_load_file('source.xml');
            //echo $xml->page[2]->content;
            //echo $xml->page[1]['id'];
?>
<?php

$xml->page;

if (isset($_GET['id'])) {
  if($_GET['id'] == 2) {
    echo $xml->page[1]->content;
  }elseif ($_GET['id'] == 3) {
    echo $xml->page[2]->content;
  }elseif ($_GET['id'] == 4) {
    echo $xml->page[3]->content;
  }elseif ($_GET['id'] == 1) {
    echo $xml->page[0]->content;
  }
}else{
  echo $xml->page[0]->content;
}


?>