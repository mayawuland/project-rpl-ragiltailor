<?php
	include 'koneksi.php';

	$id				= $_POST['id'];
	$ket_tindakan	= $_POST['ket_tindakan'];
	$tgl_ambil		= $_POST['tgl_ambil'];
	$status_pesanan	= $_POST['status_pesanan'];
	$total_bayar	= $_POST['total_bayar'];
	$status_bayar	= $_POST['status_bayar'];

	$sql	= "UPDATE pesanan SET ket_tindakan='$ket_tindakan', tgl_ambil='$tgl_ambil', status_pesanan='$status_pesanan', total_bayar='$total_bayar', status_bayar='$status_bayar' WHERE id_pesanan='$id'";

	$query	= mysqli_query($connect, $sql) or die(mysqli_error($connect));

	if($query) {
		header("location: pesanan.php");
	} else {
		echo "Input Data Gagal.";
	}
?>