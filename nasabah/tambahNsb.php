<?php
	if($_SERVER['REQUEST_METHOD']=='POST'){
		
		//Mendapatkan Nilai Variable
		$nama = $_POST['nama'];
		$pekerjaan = $_POST['pekerjaan'];
		$saldo = $_POST['saldo'];
		$namaibu = $_POST['namaibu'];
		
		//Pembuatan Syntax SQL
		$sql = "INSERT INTO tb_nasabah (nama,pekerjaan,saldo,namaibu) VALUES ('$nama','$pekerjaan','$saldo','$namaibu')";
		
		//Import File Koneksi database
		require_once('koneksi.php');
		
		//Eksekusi Query database
		if(mysqli_query($con,$sql)){
			echo 'Berhasil Menambahkan Nasabah';
		}else{
			echo 'Gagal Menambahkan Nasabah';
		}
		
		mysqli_close($con);
	}
?>