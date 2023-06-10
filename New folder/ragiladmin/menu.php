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
	<title>Menu Utama</title>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
	<style>
		body{
			font-family: perpetua;
			background-color: #ccc3ba;
			width: 100%;
			margin: auto;
			text-align: center;
			font-size: 20px;
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
			font-size: 20px;
  			display: block;
  			color: white;
  			text-decoration: none;
		}
		li a:hover {
  			color: black;
		}
		.button{
        	padding: 0;
            margin: 0;
            width: 40%;
            height: 300px;
            text-align: center;
            top: 100px;
            position: relative;
            border: none;
            border-radius: 5px;
            transition-duration:.60s;
            font-weight: bold;
        	color: white;
        	text-shadow: 1px 1px 2px rgba(0,0,0,0.8);
        }
        .input{
        	box-shadow: 0 30px 60px rgba(0,0,0,0.1);
        	padding: 50px;
        	float: left;
        	background: linear-gradient(rgba(0,0,0,0.15),rgba(0,0,0,0.15)), url("gambar1.png");
        	background-size: cover;
        	text-align: right;
        }
        .input:hover{
        	box-shadow: 0 30px 60px rgba(0,0,0,0.5);
        }
        .data{
        	box-shadow: 0 30px 60px rgba(0,0,0,0.1);
        	padding: 50px;
        	float: right;
        	background: linear-gradient(rgba(0,0,0,0.4),rgba(0,0,0,0.15)), url(gambar2.png);
        	background-size: cover;
        	text-align: left;
        }
        .data:hover{
        	box-shadow: 0 30px 60px rgba(0,0,0,0.5);
        }
        a{
			text-decoration: none;
			color: #69443c;
			font-size: 24px;
		}
		.akun{
			padding: 10px 0px 10px 0px;
			bottom: 0;
			font-size: 22px;
		}
		.akun:hover {
  			color: white;
		}
	</style>
</head>
<body>
    <br>
    <ul>
        <li>MENU</li>
        <li style="float:right"><a href="logout.php">LOGOUT</a></li>
    </ul>
    <p>
    <a href="input.php"><button class="button input">INPUT DATA</button></a>
    <a href="pesanan.php"><button class="button data">DATA PESANAN</button></a>
    </p>
    <br><br><br><br><br><br><br>
    <br><br><br><br><br><br><br>
    <br><br><br><br>

    	<?php
            include('koneksi.php');
    		$nama 	= $_SESSION['username'];
    		$sql    = "SELECT * FROM penjahit WHERE username='$nama'";
            $query  = mysqli_query($connect, $sql);

            while ($data = mysqli_fetch_array($query)) {
            ?>
            <a href="akun.php" class="akun" input type="hidden" name="id_penjahit" value="<?= $data['id_penjahit']; ?>">PENGATURAN AKUN</a>
        <?php } ?>   
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8" crossorigin="anonymous"></script>
</body>
</html>