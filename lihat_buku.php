<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" type="text/css" href="css/bootstrap.css">
</head>
<body>
	<?php
	include("Buku.php");
	$buku = new Buku();
	$hasil = $buku->viewBuku($_GET["judul_buku"]);
	$row = mysqli_fetch_array($hasil);
	?>
	<div align="center" class="container">
		<form method="GET">
			<table class="table table-hover">
				<thead>
				<tr>
					<th colspan="2"><div align="center">Detail Buku</div></th>
				</tr>
				</thead>
				<tbody>
				<tr>
					<td>Judul Buku</td>
					<td><?php echo $row["judul_buku"] ?></td>
				</tr>
				<tr>
					<td>Pengarang</td>
					<td><?php echo $row["pengarang"] ?></td>
				</tr>
				<tr>
					<td>Penerbit</td>
					<td><?php echo $row["penerbit"] ?></td>
				</tr>
				<tr>
					<td>Tahun Terbit</td>
					<td><?php echo $row["tahun_terbit"] ?></td>
				</tr>
				<tr>
					<td colspan="2"><a href="main.php" class="badge badge-pill badge-secondary">Halaman Utama</td>
				</tr>
				</tbody>
			</table>
		</form>
	</div>
</body>
</html>