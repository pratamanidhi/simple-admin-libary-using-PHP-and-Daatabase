<?php
 
 include("Buku.php");
 $buku = new Buku();

 $judul_buku = $_POST["judul_buku"];
 $pengarang = $_POST["pengarang"];
 $penerbit = $_POST["penerbit"];
 $tahun_terbit = $_POST["tahun_terbit"];

 $hsl = $buku->insertBuku($judul_buku,$pengarang,$penerbit,$tahun_terbit);

 if($hsl == "T"){
?>
<script type="text/javascript">
	alert("Data Berhasil Disimpan");
	document.location='main.php'
</script>
<?php
}else{
?>
<script type="text/javascript">
	alert("Data Gagal Disimpan");
	document.location='main.php'
</script>
<?php
}
?>