<?php
function wzor($a,$b){
  $dzielna = $a+2;
  $kwadratB= $b*$b;
  $A4 = 4*$a;
  $dzielnik=sqrt($kwadratB+$A4);
  if($dzielnik==0){
    $wynik = 'nie można dzielić przez 0';
  }
  else{
    $wynik = $dzielna/$dzielnik;
  }

  return $wynik;

}
?>
