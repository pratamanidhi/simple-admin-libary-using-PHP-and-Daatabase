<?php 

session_start();

if (empty($_SESSION['username'])){
  
	header('location:index.php');
}
else
{
?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<?php
	include_once "header.php";
	?>
	<div align="center" class="container">
		<form action="insert_buku.php" method="post">
			<table class="table table-hover">
			<thead>
				<tr>
					<th colspan="2"><div align="center">Tambah Buku</div></th>
				</tr>
			</thead>
			<tbody>
				<tr>
					<td width="93">Judul Buku:</td>
					<td width="240"><input type="text" name="judul_buku" size="40" class="form-control" required="" aria-required="true"></td>
				</tr>
				<tr>
					<td>Pengarang:</td>
					<td><input type="text" name="pengarang" size="40" class="form-control" required="" aria-required="true"></td>
				</tr>
				<tr>
					<td>Penerbit:</td>
					<td><input type="text" name="penerbit" size="40" class="form-control" required="" aria-required="true"></td>
				</tr>
				<tr>
					<td>Tahun Terbit</td>
					<td><input type="text" name="tahun_terbit" size="40" class="form-control" required="" aria-required="true"></td>
				</tr>
				<tr align="center">
					<td colspan="2"><input type="submit" value="Simpan" class="btn btn-success"/> <input type="reset" value="Reset" class="btn btn-warning"><br><br>
					<a href="main.php" class="badge badge-secondary"><img src="png/justify-center-3x.png"> Halaman Utama
					</td>
				</tr>
			</tbody>
			</table>
		</form>
	</div>

</body>
</html>
<?php
}
?>