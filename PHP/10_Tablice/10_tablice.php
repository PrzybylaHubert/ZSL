<?php
session_start();
/*
  Użytkownik podaje w formularzu z klawiatury ile  ma ulubionych kolorów,
   po zatwierdzeniu wyświetli mu się na tej samej stronie ilość pól tekstowych jaką podał w poprzednim formularzu.
   Zapisz ulubione kolory do tablicy, posortuj je niemalejąco i wyświetl na ekranie w formacie (utwórz funkcję):
   Ilość ulubionych kolorów: ...
   Kolor 1: ...
   Kolor 2: ...
*/
  echo <<< k
  <form action = '10_tablice.php' method='get'>
    Liczba kolorów: <input type = 'number' min = '0' name='numer'>
    <input type = 'submit'>
  </form>
k;


  if(isset($_GET['numer'])){
    $_SESSION['liczba_kolorow'] = $_GET['numer'];
    echo "<form action = '10_tablice_wynik.php' method='get'>";
    for($i=1; $i<=$_SESSION['liczba_kolorow']; $i++){
      echo "Kolor $i: <input type = 'text' name='color$i'><br><br>";
    }
    echo "<input type = 'submit'>";
  }
 ?>
