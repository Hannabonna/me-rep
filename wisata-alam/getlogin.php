<?php
include "koneksi.php";
$user = $_POST['username'];
$pass = $_POST['password'];
$sql = mysql_query("select * from t_admin where username='$user' and password='$pass'");

if (empty($user)){
	echo "<script>window.alert('Username harus diisi')</script>";
	header("loacation:login.php");
}else if (empty($pass)){
	echo "<script>window.alert('Password harus diisi')</script>";
	header("loacation:login.php");
}else if (empty($user) && empty($pass)){
	echo "<script>window.alert('Username & password harus diisi')</script>";
	header("loacation:login.php");
}else{
	if (mysql_num_rows($sql) > 0){
		session_start();
		$_SESSION['username'] = $user;
		echo "<script>window.alert('Login Berhasil')</script>";
		echo "<meta http-equiv='refresh' content='1 url=admin.php'>";

	}else{
		echo "<script>window.alert('Username atau Password salah')</script>";
		echo "<meta http-equiv='refresh' content='1 url=login.php'>";
	}
}
?>