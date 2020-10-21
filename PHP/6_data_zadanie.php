<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <form method="get" action="./6_data_show_zadanie.php">
      Name <input type="text" name="name"><br>
      Sex <input type="radio" name="plec" value="m"> Male
      <input type="radio" name="plec" value="f"> Female<br>
      Eye color <select id="oczy" name="oczy">
          <option> Green </option>
          <option> Blue </option>
          <option> Brown </option>
          <option> Beer </option>
        </select><br>
        Check all that apply <input type="checkbox" name="over6"> Over 6 feet tall<br>
        <input type="checkbox" name="over200"> Over 200 pounds<br>
        Describe your athletic ability:<br> <textarea name="textarea" rows="5" cols="30"></textarea><br>
        <input type="submit" value="send">
      </form>
  </body>
</html>
