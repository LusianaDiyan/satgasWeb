<?php 

	if($_SERVER['REQUEST_METHOD']=='POST'){
		//MEndapatkan Nilai Dari Variable 
		$id = $_POST['id'];
		$pintu1 = $_POST['value'];
		
		
		//import file koneksi database 
		require_once('db_connect.php');
		
		//Membuat SQL Query
		if (value == '1' ) {
			$sql = "UPDATE switch SET value = '0' WHERE id = $id;";
		} else {
			$sql = "UPDATE switch SET value = '1' WHERE id = $id;";
		}
		
		//Meng-update Database 
		if(mysqli_query($con,$sql)) {
		    $response["value"] = 1;
		    $response["message"] = "Berhasil diperbarui";
		    echo json_encode($response);
		  } else {
		    $response["value"] = 0;
		    $response["message"] = "oops! Gagal merubah!";
		    echo json_encode($response);
		  }
		
		mysqli_close($con);
	}
?>