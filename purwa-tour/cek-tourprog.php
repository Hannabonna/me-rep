<?php
include('koneksi.php');
if(isset($_POST['send']));
{
$kodepaket = $_POST['kodepaket'];
$tujuan = $_POST['tujuan'];
$gambar = $_POST['gambar'];
$deskripsi=$_POST['deskripsi'];

$sql = mysql_query("INSERT INTO itinerary (kodepaket,tujuan,gambar,deskripsi) values 
	('$kodepaket','$tujuan','$gambar','$deskripsi')") or die(mysql_error());
	 
	 if($sql){
	 header('location:inputtourprog.php?message=success');
	 }
}
?>