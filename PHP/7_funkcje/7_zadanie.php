<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <?php
    if(isset($_POST['l1']) and isset($_POST['l2']))
    {
      $l1=$_POST['l1'];
      $l2=$_POST['l2'];
      $dzialanie=$_POST['dzialanie'];
      require_once './function.php';
      switch($dzialanie){
        case '+':
          $wynik=SUMA($l1,$l2);
          break;
        case '-':
          $wynik=ODEJMOWANIE($l1,$l2);
          break;
        case '*':
          $wynik=MNOZENIE($l1,$l2);
          break;
        case '/':
          if($l2==0){
          echo "nie mozna dzielić przez 0, proszę spróbować jeszcze raz";
          $wynik="brak";
          }
          else
          $wynik=DZIELENIE($l1,$l2);
          break;
      }
      echo <<< xd
      <form method="post">
        <input type="number" name="l1" required value=$l1>
        <select name="dzialanie">/</>
          <option value="+">+</option>
          <option value="-">-</option>
          <option value="*">*</option>
          <option value="/">/</option>
        </select>
        <input type="number" name="l2" required value=$l2>
        <input type="submit" value="=">
        <input type=text value=$wynik disabled>
      </form>
xd;
}

else{
  echo <<< xd
  <form method="post">
  <input type="number" required name="l1">
  <select name="dzialanie">/</>
    <option value="+">+</option>
    <option value="-">-</option>
    <option value="*">*</option>
    <option value="/">/</option>
  </select>
  <input type="number" required name="l2">
  <input type="submit" value="=">
  <input type=text disabled>
  </form>
xd;
}
    ?>
  </body>
</html>
