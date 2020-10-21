<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <form method="get">
      NAZWISKO <input type="text" name="surname" autofocus><br><br>
      IMIE <input type="text" name="name"> <br><br>
      <input type="submit" value="Wyślij"><hr>
    </form>
    <?php
      if (isset($_GET['surname'])&&isset($_GET['name'])){
        ob_clean();
        $surname = trim($_GET['surname']);
        $name = trim($_GET['name']);
        echo "imie i nazwisko: $name $surname";
      }
      else {
        echo "wypełnij formularz";
      }
    ?>
  </body>
</html>
