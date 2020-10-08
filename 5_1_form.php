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
      if (!empty($_GET['surname'])){
        ob_clean();
        $surname = $_GET['surname'];
        echo "nazwisko: $surname <hr>";
        echo "<a href='5_1_form.php'> Powrót </a>";
      }
      else {
        echo "wypełnij formularz";
      }
    ?>

  </body>
</html>
