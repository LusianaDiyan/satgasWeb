<?php
  require_once __DIR__ .'/db_connect.php';
  $db = new DB_CONNECT();
  $select = mysql_query("SELECT * FROM status");
 
  while($value = mysql_fetch_assoc($select)){
    $output [] = $value;
  }
  print(json_encode($output));
?>