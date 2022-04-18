
      <?php
      include_once('simple_html_dom.php');
      $startTime = microtime(true);
      $search = $_POST["name"];
      // turn this into an array
      $a = explode(" ", $search);
      $gajabkosentence = 'https://gajabko.com/?s=';
      $gajabkostring = implode("+", $a);
      $gajabkoposition = '23';

      $gajabkolink = substr_replace($gajabkosentence, $gajabkostring, $gajabkoposition, 0);

      // most likely this process will take some time


      $html = @file_get_html($gajabkolink);

      //gajabko website extraction begins

      $gajabkolinks = array();
      $gajabkodescription = array();
      $gajabkoname = array();

      foreach ($html->find('a.woocommerce-LoopProduct-link') as $a) {
        $gajabkolinks[] = $a->href;
        $gajabkodescription[] = $a->plaintext;
        array_push($gajabkoname, "Gajabko");
      }
      $last = array();
      foreach ($gajabkodescription as $p) {
        if (preg_match_all("/[$\d,]+/", $p, $numbers)) {
          $lastnum = end($numbers[0]);
          array_push($last, $lastnum);
        }
      }
      $images5 = array();
      $output[] = array();
      foreach ($html->find('img') as $img) {
        $images5[] = $img->src;
        $output = array_slice($images5, 144);
      }
      $gajabkoimagearray = array();
      $i = 0;
      foreach ($output as $key => $value) {
        if ($i % 2 == 0) {
          $gajabkoimagearray[$key] = $value;
        }
        $i++;
      }
      //gajabko website extraction ends

      ?>
