<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
  <h4>Funkcje</h4>
  <?php 
    require_once './2_function.php';
    echo show('test');
    $text = "Janusz Kowalski";
    echo show($text);
  ?>
</body>
</html>