<?php
//koneksi ke MySQL
$koneksi = mysqli_connect("localhost","root","");
mysqli_select_db($koneksi, "db_wisata");

//$id_tempat = $_POST['id_tempat'];
$id_tempat = $_POST['id_tempat'];
$nama_tempat = $_POST['nama_tempat'];
$kota = $_POST['kota'];
$alamat = $_POST['alamat'];
$deskripsi = $_POST['deskripsi'];
$estimasi_wkt = $_POST['estimasi_wkt'];
$id_foto = $_POST['id_foto'];
$rating = $_POST['rating'];

$id_foto1 = $_POST['id_foto'];
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
$sql = mysqli_query($koneksi, "INSERT INTO t_tempat(id_tempat, nama_tempat, kota, alamat, deskripsi, estimasi_wkt, id_foto, rating) values ('$id_tempat','$nama_tempat','$kota','$alamat','$deskripsi','$estimasi_wkt','$id_foto', '$rating')");


$input = mysqli_query($koneksi, "INSERT INTO t_foto(id_foto,nama_ft1,nama_ft2,nama_ft3) VALUES('$id_foto1','$name','$name2','$name3')");

if($input and $sql){
    //jika berhasil kita redirect ke halaman untuk menampilkan foto
    echo "<script>alert('Berhasil Menambah Data')</script>";
    echo "<meta http-equiv='refresh' content='1 url=admin.php'>";
}else{
    echo "gagal";
}
?>