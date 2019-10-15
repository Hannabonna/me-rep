<?php
include('koneksi.php');
if(isset($_GET['kodepaket'])){
	$kodepaket = $_GET['kodepaket'];
	$cek = mysql_query("SELECT kodepaket FROM paketwisata WHERE kodepaket='$kodepaket'") or die(mysql_error());
	//cek apakah query diatas apakah mendapatkan hasil atau tidak
	if(mysql_num_rows($cek) == 0){ 
		echo '<script>window.history.back()</script>'; 
	}else{ 
		$del = mysql_query("DELETE FROM paketwisata WHERE kodepaket='$kodepaket'");
		if($del){ 
			echo "<script>alert('Data berhasil terhapus'); window.open('data-paket.php', '_self');</script>";	
		}else{ 
			echo 'Gagal menghapus data! ';	
			echo '<a href="data-paket.php">Kembali</a>';	
		}
	}
}else{
	echo '<script>window.history.back()</script>';
}
?>