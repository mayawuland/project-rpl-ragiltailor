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
	<title>Input Data</title>
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
            text-align : left;
            font-size : 22px;
            border-collapse : static;
            margin-top : 40px;
        }
        .column {
            width: 50%;
            padding: 20px;
            font-size: 20px;
        }
        .column1{
            float: right;
        }
        .column2{
            float: left;
        }
        input{
            border-radius : 5px;
            margin: 8px;
            padding: 8px;
            border : none;
            font-size: 19px;
            width: 100%;
        }
        select{
            margin: 8px;
            padding: 8px;
            border-radius: 5px;
            resize: vertical;           
            border : none;              
            font-size: 19px;
            width: 100%;
        }
        textarea{
            border-radius : 5px;
            margin: 8px;
            padding: 8px;
            border : none;
            font-size: 19px;
            width: 100%;
            height: 100px;
        }
        .button{
            text-decoration: none;
            width: 150px;
            padding: 5px 0px;
            text-align: center;
            border: none;
            color: white;
            cursor: pointer;
            border-radius: 25px;
            margin: 4px 2px;
            font-family: perpetua;
            font-size: 19px;    
            background-color: #69443c
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
    	<h2 style="font-weight: bold">INPUT DATA</h2>
	</center>

    <div class="row">
        <div class="column">
            <table class="column1">
            <tr>
                <td colspan="2">Data Pelanggan :</td>
            </tr>
            <tr>
                <form method="post" action="inputpelanggan.php">

                <?php
                include('koneksi.php');

                $sql    = "SELECT max(id_pelanggan) as kode FROM pelanggan";
                $query  = mysqli_query($connect, $sql);

                while ($data = mysqli_fetch_array($query)) {
                    $idpl = $data['kode'];

                    $urutan = (int) ($idpl);
                    $urutan++;
                    $idpl = $urutan;
                ?>
                <input type="hidden" name="id_pelanggan" value="<?= $idpl; ?>">
                <?php } ?>
                <td style="padding-left: 30px"></td>
                <td>Nama</td>
                <td>:</td>
                <td ><input type="text" name="nama_pelanggan"></td>
            <tr>
            	<td></td>
                <td>Alamat</td>
                <td>:</td>
                <td><input type="text" name="alamat"></td>
            </tr>
            <tr>
            	<td></td>
                <td style="padding-right: 10px">No WhatsApp</td>
                <td>:</td>
                <td><input type="text" name="no_whatsapp"></td>
            </tr>
            </table>
        </div>
        <div class="column">
            <table class="column2">
            <tr>
                <td colspan="2">Data Pesanan :</td>
            </tr>
            <tr>
            	<td style="padding-left: 30px"></td>
                <td>Tanggal Masuk</td>
                <td>:</td>

                <?php
            include('koneksi.php');
            $nama   = $_SESSION['username'];
            $sql    = "SELECT * FROM penjahit WHERE username='$nama'";
            $query  = mysqli_query($connect, $sql);

            while ($data = mysqli_fetch_array($query)) {
            ?>
            <input type="hidden" name="id_penjahit" value="<?= $data['id_penjahit']; ?>">
            <?php } ?>  

                <?php
                include('koneksi.php');

                $sql    = "SELECT max(id_pesanan) as kode FROM pesanan";
                $query  = mysqli_query($connect, $sql);

                while ($data = mysqli_fetch_array($query)) {
                    $idp = $data['kode'];

                    $urutan = (int) ($idp);
                    $urutan++;
                    $idp = $urutan;
                ?>
                <input type="hidden" name="id_pesanan" value="<?= $idp; ?>">
                <?php } ?>
                <td><input type="date" name="tgl_masuk"></td>
            <tr>
            	<td></td>
                <td>Status Pesanan</td>
                <td>:</td>
                <td><select name="status_pesanan">
        				<option value="Dalam Antrian">Dalam Antrian</option>
        				<option value="Sedang Dikerjakan">Sedang Dikerjakan</option>
        				<option value="Selesai">Selesai</option>
      				</select></td>
            </tr>
            <tr>
            	<td></td>
                <td style="padding-right: 10px">Keterangan / Tindakan</td>
                <td>:</td>
                <td><textarea name="ket_tindakan"></textarea></td>
            </tr>
            </table>
        </div>
    </div>
    <div class="row">
        <div class="column">
            <div class="column1">
                <input type="reset" value="BATAL" class="button">
            </div>
        </div>
        <div class="column">
            <div class="column2">
                <input type="submit" value="SIMPAN" class="button">
            </div>
        </div>
    </div>
    </form>
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8" crossorigin="anonymous"></script>
</body>
</html>