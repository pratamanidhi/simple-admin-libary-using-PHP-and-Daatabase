<?php
class Buku{
	function connect(){
		include("koneksi.php");
		return $koneksi;
	}

	function getBuku(){
		$buku = new Buku();
		$koneksi = $buku->connect();
		$query = "select * FROM buku order by judul_buku";
		$hasil = mysqli_query($koneksi, $query);
		return $hasil;
 	}

 	function viewBuku($judul_buku){
 		$buku = new Buku();
 		$koneksi = $buku->connect();
 		$query = "select * FROM buku where judul_buku='$judul_buku'";
 		$hasil = mysqli_query($koneksi, $query);
 		return $hasil;
 	}

 	function deleteBuku($judul_buku){
 		$buku = new Buku();
 		$koneksi = $buku->connect();
 		$query = "delete FROM buku where judul_buku='$judul_buku'";
 		$hasil = mysqli_query($koneksi, $query);
 		if ($hasil){
 			return "T";
 		}else {
 			return "F";
 		}
 	}

 	function updateBuku($judul_buku,$pengarang,$penerbit,$tahun_terbit){
 		$buku = new Buku();
 		$koneksi = $buku->connect();
 		$query = "update buku SET judul_buku='$judul_buku', pengarang='$pengarang',penerbit='$penerbit',tahun_terbit='$tahun_terbit' where judul_buku='$judul_buku'";
 		$hasil = mysqli_query($koneksi,$query);
 		if($hasil){
 			return "T";
 		}else{
 			return "F";
 		}
 	}

 	function insertBuku($judul_buku,$pengarang,$penerbit,$tahun_terbit){
 		$buku = new Buku();
 		$koneksi = $buku->connect();
 		$query = "insert into buku(judul_buku,pengarang,penerbit,tahun_terbit) VALUES ('$judul_buku','$pengarang','$penerbit','$tahun_terbit')";
 		$hasil = mysqli_query($koneksi,$query);
 		if ($hasil){
 			return "T";
 		} else {
 			return "F";
 		}
 	}
 	function tambahUser($username, $password){
 		$buku = new Buku();
 		$koneksi = $buku->connect();
 		$query = "insert into login(username,password) VALUES ('$username','$password')";
 		$hasil = mysqli_query($koneksi,$query);
 		if ($hasil){
 			return "T";
 		}else {
 			return "F";
 		}
 	}
}

?>