<?php
include "koneksi.php";
$no_project = $_POST['no_project'];
$rft = $_POST['rft'];
$rfc = $_POST['rfc'];
$project_name = $_POST['project_name'];
$pic_it = $_POST['pic_it'];
$ket = $_POST['ket'];
$percentage = $_POST['percentage'];

if (empty($no_project)){
echo "<script>alert('Nomor Project belum diisi')</script>";
echo "<meta http-equiv='refresh' content='1 url=developer.php'>";
}
if else (empty($project_name)){
echo "<script>alert('Nama Project belum diisi')</script>";
echo "<meta http-equiv='refresh' content='1 url=developer.php'>";
}
else if (empty($pic_it)){
echo "<script>alert(Lengkapi PIC IT')</script>";
echo "<meta http-equiv='refresh' content='1 url=developer.php'>";
}
else if (empty($ket)){
echo "<script>alert('Lengkapi Keterangan')</script>";
echo "<meta http-equiv='refresh' content='1 url=developer.php'>";
}
else if (empty($percentage)){
echo "<script>alert('Lengkapi Persentase')</script>";
echo "<meta http-equiv='refresh' content='1 url=developer.php'>";
}
else{$a = mysql_query("INSERT INTO t_dev (no_project,rft,rfc,project_name,pic_it,ket) values 
('$no_project','$rft','$rfc','$project_name','$pic_it','$ket','$percentage')");
}
if ($a){
echo "<script>alert('APPROVE!')</script>";
echo "<meta http-equiv='refresh' content='1 url=developer.php'>";
}else{
echo "<script>alert('ERROR')</script>";
echo "<meta http-equiv='refresh' content='1 url=developer.php'>";
}
}
?>