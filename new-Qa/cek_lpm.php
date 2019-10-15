<?php
include "koneksi.php";
error_reporting(0);
if (isset($_POST['tambahlpm'])) {
$project_name = $_POST['project_name'];
$ket = $_POST['ket'];
$div_lain = $_POST['div_lain'];
$div_it = $_POST['div_it'];
$jenis = $_POST['jenis'];
$sub = $_POST['sub'];
$modul_fitur = $_POST['modul_fitur'];
$div_pengaju = $_POST['div_pengaju'];
$angg_pengaju = $_POST['angg_pengaju'];
$grup_it = $_POST['grup_it'];
$angg_it = $_POST['angg_it'];
$pic_it = $_POST['pic_it'];
$angg_pic = $_POST['angg_pic'];

$inputlpm = mysql_query("INSERT INTO t_lpm (project_name,ket,div_lain,div_it,jenis,sub,modul_fitur,div_pengaju,grup_it,angg_it,pic_it,angg_pic) values 
('$project_name','$ket','$div_lain','$div_it','$jenis','$sub','$modul_fitur','$div_pengaju','$grup_it','$angg_it','$pic_it','$angg_pic')");
		if(!$inputlpm) {
		echo "<script>alert('Gagal Menyimpan Nomor Project'); window.open('inputlpm.php', '_self');</script>";
			  } else {
		echo "<script>alert('Berhasil Meyimpan Nomor Project'); window.open('inputlpm.php', '_self');</script>";
			   }
}
?>