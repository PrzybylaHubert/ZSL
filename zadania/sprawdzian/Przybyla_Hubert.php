<!DOCTYPE html>
<html lang="pl" dir="ltr">
  <head>
    <meta charset="UTF-8">
    <title></title>
    <style>
      th {border-style:solid; padding:5px; border-width:1px;}
      table {border-collapse:collapse;}
    </style>
  </head>
  <body>
    <?php
    require './function.php';
      $imie = ucfirst(strtolower($_POST['imie']));
      $nazwisko = ucfirst(strtolower($_POST['nazwisko']));

      $liczbaA = $_POST['liczbaA'];
      $liczbaB = $_POST['liczbaB'];

      setlocale(LC_TIME, "PL_pl");
      $data = strftime("%d %B %Y");
      $dzien_tygodnia = strftime("%A");

      $wynik=wzor($liczbaA,$liczbaB);

      echo <<< k
      <h2> $imie $nazwisko grupa sprawdzianu: 2 </h2>
      <table>
        <tr>
          <th> Klasa: 3B1t gr_2 </th>
          <th> <a href="#"> wzór </a></th>
        </tr>
        <tr>
          <th> data: $data </th>
          <th> dzień tygodnia: $dzien_tygodnia</th>
        </tr>
      </table>
k;
     echo $wynik;
     ?>
  </body>
</html>
