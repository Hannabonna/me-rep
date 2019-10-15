<?php
include('koneksi.php');
if(isset($_POST['send']));
{
$kodepaket = $_POST['kodepaket'];
$kriteria = $_POST['kriteria'];
$namapaket = $_POST['namapaket'];
$tujuan=$_POST['tujuan'];
$lama = $_POST['lama'];
$hari = $_POST['hari'];
$fasilitas = $_POST['fasilitas'];
$penginapan=$_POST['penginapan'];
$kapasitas = $_POST['kapasitas'];
$harga = $_POST['harga'];
$photo = $_POST['photo'];
$keterangan=$_POST['keterangan'];

$sql = mysql_query("INSERT INTO paketwisata (kodepaket,kriteria,namapaket,tujuan,lama,hari,fasilitas,penginapan,kapasitas,harga,photo,keterangan) values 
	('$kodepaket','$kriteria','$namapaket','$tujuan','$lama','$hari','$fasilitas','$penginapan','$kapasitas','$harga','$photo','$keterangan')") or die(mysql_error());
	 
	 if($sql){
	 header('location:inputinfopar.php?message=success');
	 }
}
?>