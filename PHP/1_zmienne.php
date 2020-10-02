<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>zmienne</title>
  </head>
  <body>
    <?php
      $name='janusz';
      $surname='nowak';
      echo 'imię: $name<br>';
      echo "imię: $name<br>";
      echo "nazwisko: $surname".'<hr>';
      // konkatenacja .
      echo 'test';

      // typy danych
      // boolean
      // boolean
      $prawda= true;
      $fałsz = false;

      echo $prawda;
      echo $fałsz;

      // integer
      $całkowita = 20;
      $binarna = 0b1011; //11
      $oct= 010; //8
      $hex = 0xA; //10

      echo "<hr>$hex<hr>";

      //składnia heredoc
      $name='anna';
      $text = <<< ETYKIETA
        imie:$name
        imię1: $name<hr>
  ETYKIETA;

      echo $text;

      $surname='kowal';
      echo <<< E
      nazwisko:$surname<hr>
  E;

      //składnia nowdoc
      echo <<< 'E'
      nazwisko:$surname<hr>
  E;

      $city='Poznań';
      echo  "nazwa zmiennej: \$city, wartość zmiennej: $city";


     ?>
  </body>
</html>
