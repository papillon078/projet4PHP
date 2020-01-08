<?php
  $xml = Simplexml_load_file('source.xml');
if (isset($_GET['id'])) {
  $id = $_GET['id'];
}else{
  $id = 1;
}
?>

<?php
//echo '<pre>';
//var_dump($xml); die;
//echo '</pre>';

//function linkPage(){
  //$return = '';
  //$xml = Simplexml_load_file('source.xml');
  //$xml->page;
//if (isset($_GET['id'])) {
  //if($_GET['id'] == 2) {
    //$return = $xml->page[1]->content;
  //}elseif ($_GET['id'] == 3) {
    //$return = $xml->page[2]->content;
  //}elseif ($_GET['id'] == 4) {
    //$return = $xml->page[3]->content;
  //}elseif ($_GET['id'] == 1) {
    //$return = $xml->page[0]->content;
  //}
//}else{
  //$return = $xml->page[0]->content;
//}
//return $return;
//}
?>
