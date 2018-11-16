<?php
include("Buku.php");
$buku = new Buku();

$username = $_POST["username"];
$password = $_POST["password"];

$hasil = $buku->tambahUser($username, $password);

if($hasil == "T"){
?>
<script type="text/javascript">
	alert("User Berhasil Disimpan");
	document.location='index.php'
</script>
<?php
}else{
?>
<script type="text/javascript">
	alert("User Gagal Disimpan");
	document.location='tambah_user.php'
</script>
<?php
}
?>