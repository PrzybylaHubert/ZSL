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
    cennik:<br>
    Monitor: 300zł<br>
    Myszka: 30zł<br>
    Klawiatura: 40zł<br>
    Głośnik: 400zł<br><br>

    <form method='post'>
      <select name='sprzet'>
        <option value='300'> Monitor </option>
        <option value='30'> Myszka </option>
        <option value='40'> Klawiatura </option>
        <option value='400'> Głośnik </option>
      </select><br><br>
      Ilość: <input type='number' required name='liczba'><br><br>
      <input type='submit' value='send'>
    </form><br>

    <?php
    if(isset($_POST['liczba']))
    {
      $cena = $_POST['sprzet'];
      $ilosc = $_POST['liczba'];
      $wynik = $cena*$ilosc;
      $_SESSION['test'] = $wynik;
        echo "<a href='store.php'> Zobacz swoje zamówienie </a>";
    }
     ?>

  </body>
</html>
