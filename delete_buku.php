<?php
 include("Buku.php");
 $buku = new Buku();
 $hasil = $buku->deleteBuku($_GET["judul_buku"]);
if ($hasil == "T"){
?>
<script type="text/javascript">
	alert("Data Berhasil Dihapus");
	document.location='main.php';
</script>
<?php
}else{
?>
<script type="text/javascript">
	alert("Data Gagal Dihapus");
	document.location='main.php';
</script>
<?php
}
?>