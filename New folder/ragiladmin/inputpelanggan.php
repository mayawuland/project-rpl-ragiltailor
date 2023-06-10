<?php
	include 'koneksi.php';

	$id_pelanggan 	= $_POST['id_pelanggan'];
	$nama_pelanggan = $_POST['nama_pelanggan'];
	$alamat 		= $_POST['alamat'];
	$no_whatsapp 	= $_POST['no_whatsapp'];

	$id_pesanan	 	= $_POST['id_pesanan'];
	$ket_tindakan 	= $_POST['ket_tindakan'];
	$tgl_masuk 		= $_POST['tgl_masuk'];	
	$status_pesanan = $_POST['status_pesanan'];
	$id_penjahit 	= $_POST['id_penjahit'];
	$tgl_ambil = '0000/00/00';
	$total_bayar = 0;
	$status_bayar = null;

	$sql	= "INSERT INTO pelanggan VALUES('$id_pelanggan', '$nama_pelanggan', '$alamat', '$no_whatsapp')";

	$query	= mysqli_query($connect, $sql) or die(mysqli_error($connect));

	if($query) {
		$sql	= "INSERT INTO pesanan VALUES('$id_pesanan', '$ket_tindakan', '$tgl_masuk', '$tgl_ambil', '$status_pesanan', '$total_bayar', '$status_bayar', '$id_pelanggan', '$id_penjahit')";
		$query	= mysqli_query($connect, $sql) or die(mysqli_error($connect));

		if($query) {
			$sql	= "INSERT INTO pesanan VALUES('$id_pesanan', '$ket_tindakan', '$tgl_masuk', '$tgl_ambil', '$status_pesanan', '$total_bayar', '$status_bayar', '$id_pelanggan', '$id_penjahit')";
			header("location: pesanan.php");
		} else {
			echo "Input Data Gagal.";
		}
	} else {
		echo "Input Data Gagal.";
	}
?>