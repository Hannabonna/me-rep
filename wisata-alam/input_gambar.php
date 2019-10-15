<?php
include "koneksi.php";

$id_tempat = $_POST['id_tempat'];
$nama_tempat = $_POST['nama_tempat'];
$lokasi = $_POST['lokasi'];
$deskripsi = $_POST['deskripsi'];
$estimasi_wkt = $_POST['estimasi_wkt'];
$id_foto = $_POST['id_foto'];
$rating = $_POST['rating'];


$folder = "gambar";
$tmp_name = $_FILES["file_foto"]["tmp_name"];
$tmp_name2 = $_FILES["file_foto2"]["tmp_name"];
$tmp_name3 = $_FILES["file_foto3"]["tmp_name"];
$name = $folder."/".$_FILES["file_foto"]["name"];
$name2 = $folder."/".$_FILES["file_foto2"]["name"];
$name3 = $folder."/".$_FILES["file_foto3"]["name"];

//kode untuk upload ke folder gambar
move_uploaded_file($tmp_name, $name);
move_uploaded_file($tmp_name2, $name2);
move_uploaded_file($tmp_name3, $name3);

$input = mysql_query("INSERT INTO t_tempat(id_tempat, nama_tempat, lokasi, deskripsi, estimasi_wkt, id_foto, rating) values ('$id_tempat','$nama_tempat','$lokasi','$deskripsi','$estimasi_wkt','$id_foto', '$rating')");

$input2 = mysql_query("INSERT INTO t_foto(id_foto,nama_ft1,nama_ft2,nama_ft3) VALUES('$id_foto','$name','$name2','$name3')");

//	if (($input) and ($input2)){
//		echo "<script>alert('Berhasil Disimpan')</script>";
//		if (mysql_num_rows($sql) > 0){
//			header("location:tables.php");
//		}
//	}else{
//		echo "<script>alert('Anda harus isi data terlebih dahulu')</script>";
//		echo "<meta http-equiv='refresh' content='1 url=admin.php'>";
//	}
if($input2){
    //jika berhasil kita redirect ke halaman untuk menampilkan foto
    header("location: tables.php");
}else{
    echo "gagal";
}
?>