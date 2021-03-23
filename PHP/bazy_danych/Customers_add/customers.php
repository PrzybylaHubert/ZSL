<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>klienci</title>
    <link rel="stylesheet" href="./css/style.css">
    <style>
      #red{
        color:red;
      }
    </style>
  </head>
  <body>
    <h3>klienci</h3>
    <?php
      session_start();
      require_once "./scripts/connect.php";
      if(!$connect->connect_errno){
        $sql = "select * from `clients`
        inner join `cities` on `cities`.`city_id`=`clients`.`city_id`
        inner join `state` on `state`.`state_id`=`cities`.`state_id`
        inner join `tbl_countries` on `tbl_countries`.`CountryID`=`state`.`CountryID`
        ";
        $result = $connect->query($sql);

        echo <<<table
          <table>
          <tr>
            <th>ID</th>
            <th>Surname</th>
            <th>Country name</th>
            <th>State</th>
            <th>City</th>
            <th>NIP</th>
            <th>ZIP</th>
            <th>Street, house number</th>
            <th>Birth</th>
          </tr>
table;
        while($customer = $result->fetch_assoc()){
          $ZIP = substr($customer["ZIP_code"],0,2).'-'.substr($customer["ZIP_code"],2,3);
          echo <<< customer
          <tr>
            <td>$customer[client_id]</td>
            <td>$customer[surname]</td>
            <td>$customer[CountryName]</td>
            <td>$customer[state]</td>
            <td>$customer[city]</td>
            <td>$customer[NIP]</td>
            <td>$ZIP</td>
            <td>$customer[street_house_number]</td>
            <td>$customer[birthDate]</td>
            <td><a href="./scripts/delete.php?id=$customer[client_id]">Usuń</a></td>
          </tr>
customer;
        }

        echo "</table><hr><h4>Dodawanie użytkownika</h4>";

        if(isset($_SESSION['error'])){
          echo "<div id='red'><h4>".$_SESSION['error']."</h4></div>";
          unset($_SESSION['error']);
        }
        echo<<<Formadduser
          <form action="./scripts/add_user.php" method="POST">
            <input type="text" name="name" placeholder="Imię"><br><br>
            <input type="text" name="surname" placeholder="Nazwisko"><br><br>
            <input type="number" name="postalCode" placeholder="Kod pocztowy"><br><br>
            <input type="text" name="city" placeholder="Miasto"><br><br>
            <input type="date" name="birthday" placeholder="Data urodzenia"><br><br>
            <input type="number" name="height" placeholder="Wzrost"><br><br>
            <input type="number" name="nip" placeholder="NIP"><br><br>
            <input type="submit" value="dodaj użytkownika">
          </form>
Formadduser;

        $connect->close();
      }else{
        echo 'Błędne połączenie z bazą danych<br>Błąd: '.$connect->connect_errno;
      }
     ?>
  </body>
</html>
