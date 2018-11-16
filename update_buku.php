<?php
include("Buku.php");
$buku = new Buku();
 $judul_buku = $_POST["judul_buku"];
 $pengarang = $_POST["pengarang"];
 $penerbit = $_POST["penerbit"];
 $tahun_terbit = $_POST["tahun_terbit"];

 $hasil = $buku->updateBuku($judul_buku,$pengarang,$penerbit,$tahun_terbit);

if($hasil == "T"){
?>
<script type="text/javascript">
	alert("Data Berhasil Diubah");
	document.location='main.php'
</script>
<?php
}else {
?>
<script type="text/javascript">
	alert("Data Gagal Diubah");
	document.location='main.php'
</script>
<?php
}
?>