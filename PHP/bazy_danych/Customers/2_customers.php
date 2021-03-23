<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>klienci</title>
    <link rel="stylesheet" href="./css/style.css">
  </head>
  <body>
    <h3>klienci</h3>
    <?php
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
            <th>Name</th>
            <th>Surname</th>
            <th>Country name</th>
            <th>State</th>
            <th>City</th>
            <th>NIP</th>
            <th>ZIP</th>
            <th>Street, house number</th>
          </tr>
table;
        while($customer = $result->fetch_assoc()){
          $ZIP = substr($customer["ZIP_code"],0,2).'-'.substr($customer["ZIP_code"],2,3);
          echo <<< customer
          <tr>
            <td>$customer[name]</td>
            <td>$customer[surname]</td>
            <td>$customer[CountryName]</td>
            <td>$customer[state]</td>
            <td>$customer[city]</td>
            <td>$customer[NIP]</td>
            <td>$ZIP</td>
            <td>$customer[street_house_number]</td>
          </tr>
customer;
        }

        echo "</table>";

        $connect->close();
      }else{
        echo 'Błędne połączenie z bazą danych<br>Błąd: '.$connect->connect_errno;
      }
     ?>
  </body>
</html>
