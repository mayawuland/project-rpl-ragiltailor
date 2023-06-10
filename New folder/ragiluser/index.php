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
<center style="padding-top: 250px; color: white;">
	<h6 style="color: rgb(139, 69, 19);">Id Pesanan</h6>
	<div class="container">
	  <div class="row">
	    <div>
	      <form action="cek_proses.php" method="POST">
			  <div class="mb-3">
			    <label class="form-label text-light"></label>
			    <input type="text" id="idp" name="idp" class="form-control btn btn-outline-light may" style="width: 300px; background-color: white;" placeholder="">
			  </div>
			  <div style="color: red;">
			      <?php
					if(isset($_GET['message'])) {
						if($_GET['message'] == "failed") {
							echo "Id pesanan tidak ditemukan";
						}
					}
				  ?>
			  </div>
			  <br><button type="submit" class="form-control btn btn-outline-light" style="width: 300px; background-color: rgb(139, 69, 19);">Cek</button>
			</form>
	    </div>
	  </div>
	</div>
	<br>
</center>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8" crossorigin="anonymous"></script>
</body>
</html>