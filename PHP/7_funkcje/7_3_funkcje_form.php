<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
  <form method="get">
    <input type="text" name="surname"><br><br>
    <input type="submit" value="Wyślij dane">
  </form>
  <?php 
    require_once './2_function.php';

    if (!empty($_GET['surname'])) {
      echo show($_GET['surname']);
      print_r($_GET);
    }

  ?>
</body>
</html>