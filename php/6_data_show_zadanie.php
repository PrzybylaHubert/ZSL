<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <?php
    if(isset($_GET['over6']))
      $over6="Over 6 feet tall";
    else
      $over6="under 6 feet tall";

    if(isset($_GET['over200']))
      $over200="Over 200 pounds";
    else
      $over200="under 200 pounds";


    echo <<< zadanie
    Name: $_GET[name]<br>
    Sex: $_GET[plec]<br>
    Eye color: $_GET[oczy]<br>
    $over6<br>
    $over200<br>
    Your ability: $_GET[textarea]
zadanie
     ?>
  </body>
</html>
