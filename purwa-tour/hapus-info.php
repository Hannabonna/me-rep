<?php
include('koneksi.php');
if(isset($_GET['kota'])){
	$kota = $_GET['kota'];
	$cek = mysql_query("SELECT kota FROM infopar WHERE kota='$kota'") or die(mysql_error());
	//cek apakah query diatas apakah mendapatkan hasil atau tidak
	if(mysql_num_rows($cek) == 0){ 
		echo '<script>window.history.back()</script>'; 
	}else{ 
		$del = mysql_query("DELETE FROM infopar WHERE kota='$kota'");
		if($del){ 
			echo "<script>alert('Data berhasil terhapus'); window.open('data-info.php', '_self');</script>";	
		}else{ 
			echo 'Gagal menghapus data! ';	
			echo '<a href="data-info.php">Kembali</a>';	
		}
	}
}else{
	echo '<script>window.history.back()</script>';
}
?>