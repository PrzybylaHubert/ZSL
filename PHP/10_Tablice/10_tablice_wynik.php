<?php
session_start();

  function showarray($array){
    foreach ($array as $key => $value){
      echo "Kolor ".++$key.": ".ucfirst($value)."<br>";
    }
  }

  function showarray2($array){
    $number = 0;
    foreach ($array as $value){
      echo "Kolor ".++$number.": ".ucfirst($value)."<br>";
    }
  }

  $colors = array();

  for($i = 1; $i<=$_SESSION['liczba_kolorow']; $i++){
    array_push($colors, $_GET["color$i"]);
  }
  echo "Ilość ulubionych kolorów: ".$_SESSION["liczba_kolorow"]."<br>";
  asort($colors);
  showarray($colors);
  echo "<br> 2 sposób wyświetlania tablicy:<br>";
  showarray2($colors);

 ?>
