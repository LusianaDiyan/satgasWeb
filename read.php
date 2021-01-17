<?php
require_once('db_connect.php');
$result = array();
$query = mysqli_query($CON,"SELECT * FROM area ORDER BY id DESC");
while($row = mysqli_fetch_assoc($query)){
  $result[] = $row;
}
echo json_encode(array('result'=>$result));
?>