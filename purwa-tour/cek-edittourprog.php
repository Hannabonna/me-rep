<?php
include('koneksi.php');
if(isset($_POST['edit']))
{
$kodepaket = $_POST['kodepaket'];
$tujuan = $_POST['tujuan'];
$gambar = $_POST['gambar'];
$deskripsi=$_POST['deskripsi'];


	$query = mysql_query("update itinerary set kodepaket='$kodepaket', tujuan='$tujuan', gambar='$gambar', deskripsi='$deskripsi', where kodepaket='$kodepaket'") or die (mysql_error());
	
	if ($query) {
		header('location:data-tourprog.php?message=success');
				}
}
?>