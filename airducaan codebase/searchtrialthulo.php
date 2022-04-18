
      <?php
      include_once('simple_html_dom.php');
      $startTime = microtime(true);
      $search = $_POST["name"];
      // turn this into an array
      $a = explode(" ", $search);
      $thulosentence = 'https://thulo.com/search/?subcats=Y&pcode_from_q=Y&pshort=Y&pfull=Y&pname=Y&pkeywords=Y&search_performed=Y&q=&cid=0&security_hash=edbccce8d8005c400f73077be7db6306';
      $thulostring = implode("+", $a);
      $thuloposition = '109';

      $thulolink = substr_replace($thulosentence, $thulostring, $thuloposition, 0);

      // most likely this process will take some time

      $html = @file_get_html($thulolink);

      //thulo website extraction ends

      $links2 = array();
      $description2 = array();
      $thuloname = array();
      $descriptionthulo = array();

      $thuloname1 = array();

      foreach ($html->find('a.product-title') as $a) {
        $links2[] = $a->href;
        $outputthulolinks = array_slice($links2, 2);
        $description2[] = $a->plaintext;
        $descriptionthulo = array_slice($description2, 2);
        array_push($thuloname, "Thulo");
        $thuloname1 = array_slice($thuloname, 3);
      }
      $images2 = array();
      $imagesthulo = array();
      foreach ($html->find('div[class=ty-grid-list__image] img[class=ty-pict    ]') as $img) {
        $images2[] = $img->src;
        //$imagesthulo = array_slice($images2, 2);
      }
      $prices2 = array();
      foreach ($html->find('span.ty-price-num') as $p) {
        $prices2[] = $p->plaintext;
        $prices2 = preg_replace('~\D~', '', $prices2);
      }
      $thuloprices = array();
      foreach ($prices2 as $p) {
        if (preg_match_all("/[$\d,]+/", $p, $numbers)) {
          $lastnum = end($numbers[0]);
          array_push($thuloprices, $lastnum);
        }
      }

      //thulo website extraction ends

      ?>
