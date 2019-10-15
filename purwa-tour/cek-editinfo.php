<?php
include('koneksi.php');
if(isset($_POST['edit']))
{
$kota = $_POST['kota'];
$namatempat = $_POST['namatempat'];
$gambar = $_POST['gambar'];
$keterangan=$_POST['keterangan'];


	$query = mysql_query("update itinerary set kota='$kota', namatempat='$namatempat', gambar='$gambar', keterangan='$keterangan', where kota='$kota'") or die (mysql_error());
	
	if ($query) {
		header('location:data-info.php?message=success');
				}
}
?>