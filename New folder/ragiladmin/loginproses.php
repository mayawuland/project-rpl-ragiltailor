<?php
	session_start();

	include 'koneksi.php';

	$username 	= $_POST['username'];
	$password 	= $_POST['password'];

	$sql		= "SELECT * FROM penjahit WHERE username='$username' AND password='$password'";
	$query		= mysqli_query($connect, $sql);

	$cek 		= mysqli_num_rows($query);

	if($cek>0) {
		$_SESSION['username'] 	= $username;
		$_SESSION['status']		= "login";
		header("location: menu.php");
	} else {
		header("location: loginadmin.php?message=failed");
	}
?>