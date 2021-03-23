<?php
  session_start();
  //print_r($_POST);

  foreach($_POST as $key => $value){
    if(empty($value)){
      $_SESSION['error'] = 'wypełnij wszystkie dane!';
      echo "<script> history.back(); </script>";
      exit();
    }
  }

  foreach($_POST as $key => $value){
    //dynamiczne tworzenie zmiennych
    ${$key} = $value;
    echo "$key <br>";
  }
  echo "<hr>";
  echo "$name<br> $surname<br> $postalCode<br> $city<br> $birthday<br> $height<br> $nip";

?>
