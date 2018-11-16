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
	include("Buku.php");
	$buku = new Buku();
	$hasil = $buku->viewBuku($_GET["judul_buku"]);
	$row = mysqli_fetch_array($hasil);
	?>
	<div align="center" class="container">
		<form method="post" action="update_buku.php">
			<table>
				<thead>
					<tr>
						<th colspan="2"><div align="center">Edit Buku</div></th>
					</tr>
				</thead>
				<tbody>
				<tr>
					<td>Judul Buku</td>
					<td>
						<input type="hidden" value="<?php echo $i; ?>" ></input>
						<input type="text" name="judul_buku" class="form-control" value="<?php echo $row['judul_buku']; ?>"></input>
					</td>
				</tr>
				<tr>
					<td>Pengarang</td>
					<td><input type="text" name="pengarang" class="form-control" value="<?php echo $row['pengarang']; ?>"></input></td>
				</tr>
				<tr>
					<td>Penerbit</td>
					<td><input type="text" name="penerbit" class="form-control" value="<?php echo $row['penerbit']; ?>"></input></td>
				</tr>
				<tr>
					<td>Tahun Terbit</td>
					<td><input type="text" name="tahun_terbit" class="form-control" value="<?php echo $row['tahun_terbit']; ?>"></input></td>
				</tr>
				<tr>
					<td colspan="2"><input type="submit" value="simpan" class="btn btn-success"></input></td>
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