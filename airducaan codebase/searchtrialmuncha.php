
      <?php
      include_once('simple_html_dom.php');
      $startTime = microtime(true);
      $search = $_POST["name"];
      // turn this into an array
      $a = explode(" ", $search);

      $munchasentence = 'https://muncha.com/Shop/Search?merchantID=1&CategoryID=0&q=';
      $munchastring = implode("+", $a);
      $munchaposition = '59';

      $munchalink = substr_replace($munchasentence, $munchastring, $munchaposition, 0);

      // most likely this process will take some time

      $html = @file_get_html($munchalink);

      //muncha website extraction begins

      $links3 = array();
      $munchaname = array();

      foreach ($html->find('a.product-link') as $a) {
        $links3[] = $a->href;
        array_push($munchaname, "Muncha");
      }
      $symbol = 'https://www.muncha.com';
      $links4 = array();
      foreach ($links3 as $a) {
        $links4[] = $symbol . str_replace(' ', " $symbol", $a);
      }
      $description3 = array();
      foreach ($html->find('h5.product-caption-title-sm') as $a) {
        $description3[] = $a->innertext;
      }
      $images3 = array();
      foreach ($html->find('img.product-img-primary') as $img) {
        $images3[] = $img->src;
      }
      $prices3 = array();
      $pricesmuncha = array();
      foreach ($html->find('span.product-caption-price-new') as $p) {
        $prices3[] = $p->plaintext;
      }
      foreach ($prices3 as $p) {
        array_push($pricesmuncha, substr($p, 4));
      }


      //muncha website extraction ends


      ?>
  