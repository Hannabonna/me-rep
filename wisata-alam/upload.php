<?php
//koneksi ke MySQL
$koneksi = mysqli_connect("localhost","root","");
mysqli_select_db($koneksi, "db_wisata");

//$id_tempat = $_POST['id_tempat'];
$id_foto = $_POST['id_foto'];
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

//masukkan datanya ke database
//$input = mysqli_query($koneksi, "INSERT INTO t_tempat(id_tempat,id_foto) VALUES('$id_tempat','$id_foto','$name')");
$input = mysqli_query($koneksi, "INSERT INTO t_foto(id_foto,nama_ft1,nama_ft2,nama_ft3) VALUES('$id_foto','$name','$name2','$name3')");

if($input){
    //jika berhasil kita redirect ke halaman untuk menampilkan foto
    header("location: tampil.php");
}else{
    echo "gagal";
}
?>