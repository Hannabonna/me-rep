<?php
include('koneksi.php');
if(isset($_POST['edit']))
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


	$query = mysql_query("update paketwisata set kodepaket='$kodepaket', kriteria='$kriteria', namapaket='$namapaket', tujuan='$tujuan', lama='$lama',
	hari='$hari', fasilitas='$fasilitas', penginapan='$penginapan', kapasitas='$kapasitas', harga='$harga', photo='$photo', keterangan='$keterangan',
	where kodepaket='$kodepaket'") or die (mysql_error());
	
	if ($query) {
		header('location:data-paket.php?message=success');
				}
}
?>