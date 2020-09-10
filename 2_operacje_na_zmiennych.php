<?php
  //wersja PHP 7.4.9
  echo PHP_VERSION;
  // echo phpinfo();

  $potega = 2**10;
  echo "<br>$potega";

  echo 'a'. 'b'. 'c'; //a+b+c wyswietli abc
    //interpolacja
  echo 'a', 'b', 'c<br>'; //wyswietli a wyswietli b wyswietli c

  //operatory bitowe
  // and &, or |, not ~, xor ^, <<, >>

  $x = 0b1010;
  echo "$x<br>"; //10
  $x = $x << 1;
  echo "$x<br>"; //20

  $x = $x >>2;
  echo "$x<br>";

  // porównanie
  $x = 10;
  $y = 100;
  echo $x <=> $y;
  $result = $x <=> $y;
  echo "<br>$result";

?>
