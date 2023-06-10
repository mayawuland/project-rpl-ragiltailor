<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Index</title>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body style="background-image: url('bg.jpeg'); background-position: fixed; width: 100%; height: 100%; background-size: 100%;">
<br>
<nav class="navbar navbar-expand-lg" style="background-color: rgb(139, 69, 19);">
  <div class="container-fluid">
    <a class="navbar-brand" href="#"><center style="padding-left: 20px; color: white;"><div class="col-6">Ragil Tailor</div></center></a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarText" aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
  </div>
</nav>

<center style="padding-top: 80px; color: white; padding-left: 80px;">
<div>
	<h4 style="color: black;">PESANAN ANDA</h4>
</div>
<br><br>
      <table class="table" style="padding-left: 120px;" >
      	<?php
              include('koneksi.php');

              $id_pesanan = $_GET['idps'];

              $query = mysqli_query($connect, "SELECT pesanan.id_pesanan AS id_pesanan, pesanan.ket_tindakan AS ket_tindakan, pelanggan.nama_pelanggan AS nama, pelanggan.alamat AS alamat, pelanggan.no_whatsapp AS no_whatsapp FROM pesanan INNER JOIN pelanggan ON pesanan.id_pelanggan = pelanggan.id_pelanggan WHERE id_pesanan='$id_pesanan'");

              while($data = mysqli_fetch_array($query)) {
            ?>
        <tr>
          <td scope="col">Id Pesanan</td>
          <td>: <?= $data['id_pesanan'] ?></td>
        </tr>
        <tr>
          <td scope="col">Nama</td>
          <td>: <?= $data['nama'] ?></td>
        </tr>
        <tr>
          <td scope="col">Alamat</td>
          <td>: <?= $data['alamat'] ?></td>
        </tr>
        <tr>
          <td scope="col">No. Whatsapp</td>
          <td>: <?= $data['no_whatsapp'] ?></td>
        </tr>
        <tr>
          <td scope="col">Ket./Tindakan</td>
          <td>: <?= $data['ket_tindakan'] ?></td>
          <?php } ?>
        </tr>
      	<?php
              include('koneksi.php');

              $id_pesanan = $_GET['idps'];

              $query = mysqli_query($connect, "SELECT pesanan.tgl_masuk AS tgl_masuk, pesanan.tgl_ambil AS tgl_ambil, pesanan.status_pesanan AS status, pesanan.total_bayar AS total, pesanan.status_bayar AS status_bayar FROM pesanan WHERE id_pesanan='$id_pesanan'");

              while($data = mysqli_fetch_array($query)) {
            ?>
        <tr>
          <td scope="col">Tanggal Masuk</td>
          <td>: <?= $data['tgl_masuk'] ?></td>
        </tr>
        <tr>
          <td scope="col">Tanggal Ambil</td>
          <td>: <?= $data['tgl_ambil'] ?></td>
        </tr>
        <tr>
          <td scope="col">Status Pesanan</td>
          <td>: <?= $data['status'] ?></td>
        </tr>
        <tr>
          <td scope="col">Total Bayar</td>
          <td>: <?= $data['total'] ?></td>
        </tr>
        <tr>
          <td scope="col">Status Bayar</td>
          <td>: <?= $data['status_bayar'] ?></td>
          <?php } ?>
        </tr>
    </table>
  </div>
</center>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8" crossorigin="anonymous"></script>
</body>
</html>