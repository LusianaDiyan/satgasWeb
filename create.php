<?php
require_once('db_connect.php');

$id = $_POST['Id'];
$nama_area = $_POST['nama_area'];
$luas_area = $_POST['luas_area'];
$kebutuhan_air = $_POST['kebutuhan_air'];
$moisture = $_POST['Moisture'];
$jenis_tanaman = $_POST['jenis_tanaman'];

if(!$id || !$nama_area || !$luas_area || !$kebutuhan_air || !$moisture || !$jenis_tanaman){
  echo json_encode(array('message'=>'required field is empty.'));
}else{
	$query = mysqli_query($CON, "INSERT INTO area VALUES ('$id','$nama_area','$luas_area','$kebutuhan_air', 'moisture', 'jenis_tanaman')");
	if($query){
    echo json_encode(array('message'=>'data successfully added.'));
  }else{
    echo json_encode(array('message'=>'data failed to add.'));
  }
}
?>