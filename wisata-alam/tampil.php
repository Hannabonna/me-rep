<?php
//koneksi ke MySQL
$koneksi = mysqli_connect("localhost","root","");
mysqli_select_db($koneksi, "db_wisata");

$data = mysqli_query($koneksi,"SELECT * FROM t_foto");
while($d = mysqli_fetch_array($data)){
    echo "<img src=\"".$d['nama_ft1']."\"><br>";
    echo "<img src=\"".$d['nama_ft2']."\"><br>";
    echo "<img src=\"".$d['nama_ft3']."\"><br>";
    //echo $d['deskripsi']."<p>\n";
}
?>