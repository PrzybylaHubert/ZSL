<!DOCTYPE html>
<html lang="pl" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Dane</title>
  </head>
  <body>
    <h4>Dane użytkownika - wprowadzenie</h4>
    <form action="./6_data_show.php" method="get">
        <input type="text" name="login" placeholoder="Login"><br><br>
        <input type="password" name="password" placeholder="hasło"><br><br>
        <h3>Ulubiony kolor</h3>
        <input type="radio" name="color" value="g">Zielony
        <input type="radio" name="color" value="r">Czerwony
        <input type="radio" name="color" value="b" checked>Niebieski<br><br>
        <input type="checkbox" name="regulamin">Regulamin<br><br>
        <input type="submit" value="Wyślij dane">
    </form>
  </body>
</html>
