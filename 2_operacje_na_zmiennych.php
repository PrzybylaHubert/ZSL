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

  $x=10;
  $y=10.0;

  if($x==$y){
    echo "zmienne sa równe<br>";
  }
  else{
    echo "zmienne sa różne<br>";
  }

echo gettype($x),"<hr>"; //integer
echo gettype($y),"<hr>"; //double

/*
Preinkremetancja ++$x;
Predekrementacja --$x;
Postinkrementacja $x++;
postdekrementacja $x--;
*/

$x=2;
echo $x,'<br>';
$x=$x--;
$x=$x+3;
echo $x; //5

$x=$x++;
echo $x; //5

$x=++$x;
echo $x; //6

$y=++$x;
$y=++$x*2+3;

echo '<br>';
echo $x; //8
echo $y; //19

$x=2;
echo '<br>';
echo $x++; //2
echo ++$x; //4
echo $x; //4
$y=$x++;
echo $y; //4
$y=++$x;
echo $y; //6
echo ++$y; //7

// operatory rzutowania
// bool, int, float, string, array, object, unset
$text='123abc';
$text1=0;
$text2=20;

echo 'typ danych $text:',gettype($text),'<br>';
$x=(int)$text;
echo '<hr>',$x;
echo 'typ danych $x:',gettype($x),'<br>';

echo 'typ danych $text:',gettype($text),'<br>';
echo $text,'<br>';

$x=(bool)$text1;
echo $x,'<hr>';
