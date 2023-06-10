<?php
	session_start();

	include 'koneksi.php';

	$id_penjahit	= $_POST['id_penjahit'];
	$username		= $_POST['username'];
	$password		= $_POST['password'];

	$sql	= "UPDATE penjahit SET username='$username', password='$password' WHERE id_penjahit='$id_penjahit'";

	$query	= mysqli_query($connect, $sql) or die(mysqli_error($connect));

	if($query) {
		$_SESSION['username'] 	= $username;
		$_SESSION['status']		= "login";
		header("location: menu.php");
	} else {
		echo "Input Data Gagal";
	}
?>