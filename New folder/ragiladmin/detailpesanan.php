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
	<title>Detail Pesanan</title>
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
		.column {
            width: 50%;
            padding: 30px;
            font-size: 20px;
        }
        .column1{
            float: right;
        }
        .column2{
            float: left;
        }
        table{
        	font-size: 21px;
        	border-collapse: collapse;
        }
        td{
        	text-align: left;
        	padding: 8px;
        }
        .status{
        	border-radius: 10px;
        	background-color: #beb4aa;
        	font-size: 19px;
        	padding: 0px 15px;
        }
        button{
			width: 150px;
			padding: 5px 0;
			text-align: center;
			border: none;
			cursor: pointer;
			border-radius: 25px;
			margin: 3px 0px;
			color: white;
			font-family: perpetua;
			font-size: 17px;	
		}
	</style>
</head>
<body>
	<?php
        include('koneksi.php');

        $id = $_GET['id'];

        $sql    = "SELECT * FROM pesanan WHERE id_pesanan='$id'";
        $query  = mysqli_query($connect, $sql);

        while ($data = mysqli_fetch_array($query)) {
        ?>
        <input type="hidden" name="id" value="<?= $data['id_pesanan']; ?>">
	<br>
	<ul>
  		<li><a href="menu.php">Menu Utama</a></li>
  		<li style="float: right"><a href="pesanan.php">Kembali</a></li>
  	<?php } ?>
	</ul>

	<center>
    	<br>
    	<h2 style="font-weight: bold">DETAIL PESANAN</h2>
    	<br>
    </center>

    <?php
	include('koneksi.php');

	$id = $_GET['id'];

    $sql    = "SELECT * FROM pesanan INNER JOIN pelanggan ON pesanan.id_pelanggan = pelanggan.id_pelanggan WHERE pesanan.id_pesanan = $id";

	$query	= mysqli_query($connect, $sql);

	while ($data = mysqli_fetch_array($query)) {
	?>
	<div class="row">
        <div class="column">
            <table class="column1">
            <tr>
                <td>Id Pesanan</td>
                <td>:</td>
                <td><?= $data['id_pesanan']; ?></td>
            <tr>
                <td>Nama</td>
                <td>:</td>
                <td><?= $data['nama_pelanggan']; ?></td>
            </tr>
            <tr>
                <td>Alamat</td>
                <td>:</td>
                <td><?= $data['alamat']; ?></td>
            </tr>
            <tr>
                <td>No Whatsapp</td>
                <td>:</td>
                <td><?= $data['no_whatsapp']; ?></td>
            </tr>
            <tr>
                <td style="padding-right: 10px">Ket./Tindakan</td>
                <td>:</td>
                <td><?= $data['ket_tindakan']; ?></td>
            </tr>
            </table>
        </div>
        <div class="column">
            <table class="column2">
            <tr>
                <td>Tanggal Masuk</td>
                <td>:</td>
                <td><?= $data['tgl_masuk']; ?></td>
            </tr>
            <tr>
                <td>Tanggal Ambil</td>
                <td>:</td>
                <td><?= $data['tgl_ambil']; ?></td>
            <tr>
                <td style="padding-right: 10px">Status Pesanan</td>
                <td>:</td>
                <td class="status"><?= $data['status_pesanan']; ?></td>
            </tr>
            <tr>
                <td>Total Bayar</td>
                <td>:</td>
                <td><?= $data['total_bayar']; ?></td>
            </tr>
            <tr>
                <td>Status Bayar</td>
                <td>:</td>
                <td><?= $data['status_bayar']; ?></td>
            </tr>
            <tr><td></td></tr>
            <tr><td></td></tr>
            <tr>
            	<td colspan="2" style="text-align: center"><a href="hapuspesanan.php?id=<?= $data['id_pesanan']; ?>"><button style="background-color: #ff3131">DELETE</button></a></td>
                <td style="text-align: center"><a href="updatepesanan.php?id=<?= $data['id_pesanan']; ?>"><button style="background-color: #69443c">UPDATE</button></a></td>
            </tr>
            </table>
        </div>
    </div>
    <?php } ?>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8" crossorigin="anonymous"></script>
</body>
</html>