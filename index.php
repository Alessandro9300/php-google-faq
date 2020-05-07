
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>FAQ GOOGLE</title>
    <link rel="stylesheet" href="style/style.css">
    <link href="https://fonts.googleapis.com/css?family=Roboto&display=swap" rel="stylesheet">
  </head>
  <body>
    <header>
      <div class="head-dx">
        <img src="https://www.google.com/images/branding/googlelogo/1x/googlelogo_color_74x24dp.png" alt="">
        <a href="#">Privacy e termini</a>
      </div>
      <div class="head-sx">
        <a href="#">Account Google</a>
      </div>
    </header>

    <?php

      include  __DIR__ . "/partials/files.php";
      include __DIR__ . "/partials/functions.php";

    ?>

    <main>
      <div class="container">

        <div class="nrFaqs">
          <?php

            nrFaq($faqs);

           ?>
        </div>




        <?php

          eachFaq($faqs);

        ?>

      </div>

    </main>

    <footer>
      <div class="container">
        <ul>
          <li>Google</li>
          <li>Tutto su Google</li>
          <li>Privacy</li>
          <li>Termini</li>
        </ul>
      </div>
    </footer>




  </body>
</html>
