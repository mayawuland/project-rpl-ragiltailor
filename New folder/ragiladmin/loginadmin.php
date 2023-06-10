<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Login</title>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
	<style>
		body{
			display: flex;
			height: 100vh;
			justify-content: center;
			align-items: center;
			background-image: linear-gradient(rgba(0,0,0,0.15),rgba(0,0,0,0.15)), url("latar.png");
			font-family: perpetua;
			color: #69443c;
			font-size: 19px;
		}
		input{
			width: 250px;
			padding: 5px;
			border: none;
			color: #69443c;
			cursor: text;
			margin: 5px;
			border-radius: 25px;
			font-size: 18px;
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
	<center>
	<form method="post" action="loginproses.php">
		<h4>Username</h4>
		<input type="text" name="username"><br><br>
		<h4>Password</h4>
		<input type="password" name="password"><br><br>
		<input type="submit" value="LOGIN" class="login">
	</form>
	<br>
	<?php
		if(isset($_GET['message'])) {
			if($_GET['message'] == "failed") {
				echo "Login gagal";
				echo "<br>";
				echo "Username atau password salah";
			}elseif ($_GET['message'] == "logout") {
					echo "Anda telah berhasil logout.";
			}elseif ($_GET['message'] == "belum_login") {
				echo "Anda harus login terlebih dahulu";
				echo "<br>";
				echo "untuk mengakses halaman admin";
			}
		}
	?>
	</center>
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8" crossorigin="anonymous"></script>
</body>
</html>