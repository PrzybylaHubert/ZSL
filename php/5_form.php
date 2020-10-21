<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <form method="get">
      <input type="text" name="surname" autofocus><br><br>
      <input type="submit" value="Wyślij"><hr>
    </form>
    <?php
      if (isset($_GET['surname'])){   
        $surname = $_GET['surname'];
        echo "nazwisko: $surname";
      }
      else {
        echo "wypełnij formularz";
      }
    ?>
  </body>
</html>
