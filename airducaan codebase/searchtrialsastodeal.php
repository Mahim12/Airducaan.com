<?php
include_once('simple_html_dom.php');

$search = $_POST["name"];
// turn this into an array
$a = explode(" ", $search);

$sastodealsentence = 'https://www.sastodeal.com/catalogsearch/result/?q=+';
$sastodealstring = implode("+", $a);
$sastodealposition = '51';

$sastodeallink = substr_replace($sastodealsentence, $sastodealstring, $sastodealposition, 0);

// most likely this process will take some time
$html = @file_get_html($sastodeallink);
//sastodeal website extraction begins
$links1 = array();
$description1 = array();
$sastodealname = array();

foreach ($html->find('a.product-item-link') as $a) {
  $links1[] = $a->href;
  $description1[] = $a->plaintext;
  array_push($sastodealname, "Sastodeal");
}
$images1 = array();
foreach ($html->find('img.product-image-photo') as $img) {
  $images1[] = $img->src;
}
$prices1 = array();
foreach ($html->find('span[data-price-type=finalPrice]') as $p) {
  $prices1[] = $p->plaintext;
  $prices1 = preg_replace('/[^\d,.]+/', '', $prices1);
}
$sastodealprices = array();
foreach ($prices1 as $p) {
  if (preg_match_all("/[$\d,]+/", $p, $numbers)) {
    $lastnum = end($numbers[0]);
    array_push($sastodealprices, $lastnum);
  }
}
//sastodeal website extraction ends
