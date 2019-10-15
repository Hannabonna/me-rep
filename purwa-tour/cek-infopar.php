<?php
include('koneksi.php');
if(isset($_POST['send']));
{
$kota = $_POST['kota'];
$namatempat = $_POST['namatempat'];
$gambar = $_POST['gambar'];
$keterangan=$_POST['keterangan'];

$sql = mysql_query("INSERT INTO infopar (kota,namatempat,gambar,keterangan) values 
	('$kota','$namatempat','$gambar','$keterangan')") or die(mysql_error());
	 
	 if($sql){
	 header('location:inputinfopar.php?message=success');
	 }
}
?>