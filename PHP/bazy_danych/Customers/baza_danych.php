<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <h3>klienci</h3>
    <?php
      $connect = @mysqli_connect("localhost","root","","zsl_3b1g1");
      //@ operator ignorowania błędów

      //wyswietlanie błędów
      //print_r($connect);
      //echo "<hr>";
      //echo $connect->connect_error."<br>";

    //  echo '<hr>Error: '.$connect->connect_errno.'<br>';
      /* błędy
      0- prawidłowe połączenie z db
      2002 - server
      1045 - user
      1045 - pass
      1049 - db
      */

      $sql = "select * from `customers`";
      $result = $connect->query($sql);

      while($row = $result->fetch_assoc()){
        echo <<<show
        Imię i nazwisko: $row[name] $row[surname],
        data urodzenia: $row[birthday], wzrost: $row[height]
        <br>
show;
      }

      $connect->close();
     ?>
  </body>
</html>
