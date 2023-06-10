<?php
	session_start();

	include 'koneksi.php';

	$idps 	= $_POST['idp'];

	$sql		= "SELECT * FROM pesanan WHERE id_pesanan='$idps'";
	$query		= mysqli_query($connect, $sql);

	$cek 		= mysqli_num_rows($query);


	if($cek>0) {
		header("location: hasil_cek.php?idps=$idps");
	} else {
		header("location: index.php?message=failed");
	}
?>