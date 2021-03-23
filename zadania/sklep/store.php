<?php
  session_start();
?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <h2> użytkownik zakupił produkty o wartości:<h2>

      <?php
        echo $_SESSION['test'];
       ?>
  </body>
</html>
