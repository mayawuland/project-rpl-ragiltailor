<?php

session_start();

if(empty($_SESSION['username'])) {
	header("location: loginadmin.php?message=belum_login");
}
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Pengaturan Akun</title>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
	<style>
		body{
			font-family: perpetua;
			background-color: #ccc3ba;
			width: 100%;
			margin: auto;
			text-align: center;
			font-size: 24px;
		}
		ul {
  			overflow: hidden;
  			background-color: #69443c;
  			color: white;
		}
		li {
  			float: left;
  			display: block;
  			padding: 14px 16px;
		}
		li a{
			font-size: 22px;
  			display: block;
  			color: white;
  			text-decoration: none;
		}
		li a:hover {
  			color: white;
		}
		input{
			width: 250px;
			padding: 5px;
			border: none;
			color: #69443c;
			cursor: text;
			margin: 5px;
			border-radius: 25px;
			font-size: 16px;
			text-align: center;
		}
		.login{
			background-color: #69443c;
			color: white;
			width: 150px;
		}
		
	</style>
</head>
<body>
	<br>
    <ul>
        <li><a href="menu.php">Menu Utama</a></li>
        <li style="float: right"><a href="menu.php">Kembali</a></li>
    </ul>
    
    <center>
    	<br>
    	<h2 style="font-weight: bold">PENGATURAN AKUN</h2>
    	<br><br>
	<form method="post" action="updateakun.php">
		<?php
            include('koneksi.php');
    		$nama 	= $_SESSION['username'];
    		$sql    = "SELECT * FROM penjahit WHERE username='$nama'";
            $query  = mysqli_query($connect, $sql);

            while ($data = mysqli_fetch_array($query)) {
            ?>
        <input type="hidden" name="id_penjahit" value="<?= $data['id_penjahit']; ?>">
		<h4>Username Baru</h4>
		<input type="text" name="username" <?= $data['username']; ?>><br><br>
		<h4>Password Baru</h4>
		<input type="password" name="password" <?= $data['password']; ?>><br><br>
		<input type="submit" value="UBAH" class="login">
		<?php } ?>
	</form>
	</center>
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8" crossorigin="anonymous"></script>
</body>
</html>