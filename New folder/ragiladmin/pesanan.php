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
	<title>Data Pesanan</title>
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
		table{
			width: 70%;
			font-size: 21px;
			border-collapse: collapse;
		}
		th, td{
			text-align: center;
			padding: 8px;
		}
		th{
			padding-top: 12px;
			padding-bottom: 12px;
		}
		.judul{
			background-color: #ad9e8e;
		}
		.kiri{
			border-radius: 10px 0px 0px 10px;
		}
		.kanan{
			border-radius: 0px 10px 10px 0px;
		}
		tr:nth-child(odd){
			background-color: rgba(0,0,0,0.03);
		}
		tr:nth-child(1){
			background-color: rgba(0,0,0,0);
		}
		button{
			width: 80px;
			padding: 2px 0;
			text-align: center;
			border: none;
			cursor: pointer;
			border-radius: 25px;
			margin: 3px 0px;
			color: white;
			font-family: perpetua;
			font-size: 18px;	
			background-color: #69443c;
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
    	<h2 style="font-weight: bold">DATA PESANAN</h2>
    	<br>

    	<table>
    		<tr>
    			<th class="judul kiri">Id Pesanan</th>
    			<th class="judul">Tanggal Masuk</th>
    			<th class="judul">Nama</th>
    			<th class="judul kanan">Status Pesanan</th>
    			<th></th>
    		</tr>
    		<tr>
    			<td></td>
    			<td></td>
    			<td></td>
    			<td></td>
    			<td></td>
    		</tr>
    		<?php
			include('koneksi.php');

			$sql	= "SELECT * FROM pesanan, pelanggan WHERE pesanan.id_pelanggan = pelanggan.id_pelanggan";
			$query	= mysqli_query($connect, $sql);

			while ($data = mysqli_fetch_array($query)) {
			$id = $data['id_pelanggan'];
			?>
    		<tr>
    			<td class="kiri"><?= $data['id_pesanan']; ?></td>
    			<td><?= $data['tgl_masuk']; ?></td>
    			<td><?= $data['nama_pelanggan']; ?></td>
    			<td><?= $data['status_pesanan']; ?></td>
    			<td class="kanan"><a href="detailpesanan.php?id=<?= $data['id_pesanan']; ?>"><button>detail</button></a></td>
    		</tr>
    		<?php } ?>
    	</table>

	</center>
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8" crossorigin="anonymous"></script>
</body>
</html>