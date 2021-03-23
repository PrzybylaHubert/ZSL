<?php 
  function f(){
    echo 'Janusz<br>';
  }

  f();

  function show($x){
    echo "Zmienna \$x wynosi: $x<br>";
  }

  show(4);
  $y=10;
  show($y);

  function sum($x, $y){
    $result = $x + $y;
    return $result;
  }

  echo sum(2, 4),'<br>';

  // $avg = sum(5,7)/2;
  $avg = sum(5,6)/2;
  echo "Średnia wynosi: $avg<br>";

  echo gettype($avg),'<br>';

  function int($x):int{
    return $x;
  }
  
  echo int(7.6);  
  
  function float($x):float{
    return $x;
  }

  echo float(4);
  echo gettype(float(4));
  





?>