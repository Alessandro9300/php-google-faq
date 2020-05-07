

<?php

  include __DIR__ . "/files.php";

  function eachFaq($arrayFaq)
  {
    foreach ($arrayFaq as $faq) {

      echo "<div class='faq'><p class='domanda'>"
      . $faq["domanda"]
      . "</p>"
      . "<p class='risposta'>"
      . $faq["risposta"]
      . "</p></div>"
      ;

    }
  }

  function nrFaq($arrayFaq)
  {
    foreach ($arrayFaq as $nrFaq => $faq) {
      echo "<span>" . ($nrFaq + 1) . "</span>";
    }
  }

?>
