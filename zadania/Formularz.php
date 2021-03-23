<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <?php
      echo <<< k
      <form method='post'>
        <input type='text' name='imie' required spaceholder='imie'><br><br>
        <select name='zawod'>
          <option> Informatyk </option>
          <option> Elektronik </option>
          <option> Kucharz </option>
          <option> Mechanik </option>
        </select><br><br>
        gotowanie <input type='checkbox' name='hobby1' value='gotowanie'><br>
        sport <input type='checkbox' name='hobby2' value='sport'><br>
        granie w komputer <input type='checkbox' name='hobby3' value='granie w komputer'><br>
        <input type='submit' value='wyślij'>
        </form>
k;
    if(isset($_POST['imie']))
    {
      $imie=$_POST['imie'];
      $zawod=$_POST['zawod'];
      echo "<br>imie: ".$imie."<br>";
      echo "zawod: ".$zawod."<br>";
      echo "hobby: ";
      if(isset($_POST['hobby1']))
        echo $_POST['hobby1'].", ";
      if(isset($_POST['hobby2']))
        echo $_POST['hobby2'].", ";
      if(isset($_POST['hobby3']))
        echo $_POST['hobby3']."<br>";
    }
     ?>
  </body>
</html>
