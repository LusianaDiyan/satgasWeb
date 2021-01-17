<?php
require_once('db_connect.php');

$id = $_POST['id'];
$nama_area = $_POST['nama_area'];
$luas_area = $_POST['luas_area'];
$kebutuhan_air = $_POST['kebutuhan_air'];
$moisture = $_POST['moisture'];
$jenis_tanaman = $_POST['jenis_tanaman'];

if(!$id || !$nama_area || !$luas_area || !$kebutuhan_air || !$moisture || !$jenis_tanaman){
  echo json_encode(array('message'=>'required field is empty.'));
}else{
$query = mysqli_query($CON, "UPDATE area SET nama_area='$nama_area', luas_area='$luas_area', kebutuhan_air='$kebutuhan_air', moisture='$moisture', jenis_tanaman='$jenis_tanaman' WHERE id = '$id'");
if($query){
    echo json_encode(array('message'=>'data successfully updated.'));
  }else{
    echo json_encode(array('message'=>'data failed to update.'));
  }
}
?>