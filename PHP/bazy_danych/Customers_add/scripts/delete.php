<?php
  $id = $_GET['id'];
  $sql = "DELETE FROM `clients` WHERE `clients`.`client_id` = $id";

  require_once './connect.php';

  $connect->query($sql);
  echo $connect->affected_rows;

  if($connect->affected_rows){

  }
  else
  $connect->close();
 ?>
