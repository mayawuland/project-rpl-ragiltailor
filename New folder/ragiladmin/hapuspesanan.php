<?php

include 'koneksi.php';

$id 	= $_GET['id'];

$sql 	= "DELETE pesanan, pelanggan FROM pesanan JOIN pelanggan ON pesanan.id_pelanggan=pelanggan.id_pelanggan AND pesanan.id_pesanan='$id'";
$query	= mysqli_query($connect, $sql);

if($query) {
	header("location: pesanan.php");
} else {
	echo "Hapus Data Gagal.";
}

?>