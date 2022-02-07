<?php 
	//Mendapatkan Nilai Dari Variable ID Nasabah yang ingin ditampilkan
	$id = $_GET['id'];
	
	//Importing database
	require_once('koneksi.php');
	
	//Membuat SQL Query dengan nsabah yang ditentukan secara spesifik sesuai ID
	$sql = "SELECT * FROM tb_nasabah WHERE id=$id";
	
	//Mendapatkan Hasil 
	$r = mysqli_query($con,$sql);
	
	//Memasukkan Hasil Kedalam Array
	$result = array();
	$row = mysqli_fetch_array($r);
	array_push($result,array(
			"id"=>$row['id'],
			"nama"=>$row['nama'],
			"pekerjaan"=>$row['pekerjaan'],
			"saldo"=>$row['saldo'],
			"namaibu"=>$row['namaibu']
		));

	//Menampilkan dalam format JSON
	echo json_encode(array('result'=>$result));
	
	mysqli_close($con);
?>