<!DOCTYPE html>
<html lang="pl" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Dane użytkownika</title>
  </head>
  <body>
    <h4>Dane wprowadzone w formularzu</h4>
    <?php
      //echo '<pre>',print_r($_GET),'</pre>'

      $pass = $_GET['password'];
      $color = $_GET['color'];

      switch($color){
        case 'r':
          $color = 'red';
          break;
        case 'b':
          $color = 'blue';
          break;
        case 'g':
          $color = 'green';
          break;
      }

      if(isset($_GET['regulamin']))
          $regulamin = 'Regulamin został zatwierdzony';
      else
          $regulamin = "Regulamin nie został zatwierdzony";

      echo <<< DATA
      Login: $_GET[login] <br>
      Hasło: {$_GET['password']}<br>
      Hasło: $pass<br>
      Ulubiony kolor: $color;<br>
      $regulamin
DATA;
     ?>
     
  </body>
</html>
