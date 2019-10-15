<?php
include "koneksi.php";
error_reporting(0);
if (isset($_POST['tambahqa'])) {
$rft = $_POST['rft'];
$tgl_pengerjaan = $_POST['tgl_pengerjaan'];
$progress = $_POST['progress'];
$pic_it = $_POST['pic_it'];
$tgl_uat = $_POST['tgl_uat'];
$status = $_POST['status'];
$tgl_implemen = $_POST['tgl_implemen'];
$stat_impl = $_POST['stat_impl'];
$catatan = $_POST['catatan'];

$inputqa = mysql_query("INSERT INTO t_qa (rft,tgl_pengerjaan,progress,pic_it,tgl_uat,status,tgl_implemen,stat_impl,catatan) values 
('$rft','$tgl_pengerjaan','$progress','$pic_it','$tgl_uat','$status','$tgl_implemen','$stat_impl','$catatan')");
		if(!$inputqa) {
		echo "<script>alert('Gagal Menyimpan Data'); window.open('inputqa.php', '_self');</script>";
			  } else {
		echo "<script>alert('Data Tersimpan'); window.open('inputqa.php', '_self');</script>";
			   }
}
?>