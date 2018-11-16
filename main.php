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
	$hasil = $buku->getBuku();
	?>

	<div align="center" class="container">
		<table class="table table-hover">
		<thead>
			<tr>
				<th height="41" colspan="8"><a href="tambah_buku.php" class="badge badge-primary"><img src="png/book-2x.png"> Tambah Buku</a></th>
			</tr>
			<tr align="center">
				<th height="32" scope="col">No</th>
				<th scope="col">Judul Buku</th>
				<th scope="col">Pengarang</th>
				<th scope="col">Penerbit</th>
				<th scope="col">Tahun Terbit</th>
				<th scope="col">Aksi</th>
			</tr>
		</thead>
			<?php
			$i = 1;
			while($row = mysqli_fetch_array($hasil)){
			?>
		<tbody>
			<tr align="center">
				<th scope="row"><?php echo $i; ?></th>
				<td><?php echo $row["judul_buku"]; ?></td>
				<td><?php echo $row["pengarang"]; ?></td>
				<td><?php echo $row["penerbit"]; ?></td>
				<td><?php echo $row["tahun_terbit"]; ?></td>
				<td>
					<a href="lihat_buku.php?judul_buku=<?php echo $row['judul_buku']?>" class="badge badge-info""><img src="png/tags-2x.png"> View</a> 
					<a href="edit_buku.php?judul_buku=<?php echo $row['judul_buku']; ?>" class="badge badge-warning"><img src="png/pencil-2x.png"> Edit</a> 
					<a href="delete_buku.php?judul_buku=<?php echo $row['judul_buku']?>" onclick="return confirm('Yakin Hapus Data?');" class="badge badge-danger"><img src="png/trash-2x.png"> Hapus</a>
				</td>
			</tr>
		</tbody>
			<?php
			$i++;
			}
			?>
		<tfoot>
			<tr>
				<th height="41" colspan="8"><a href="logout.php" class="badge badge-danger"><img src="png/account-logout-2x.png"> Logout</a></th>
			</tr>
		</tfoot>
		</table>
	</div>
	<?php
	?>

</body>
</html>
<?php
}
?>