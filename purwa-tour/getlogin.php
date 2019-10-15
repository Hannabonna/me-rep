<?php
include "koneksi.php";
$username =$_POST['username'];
$password =$_POST['password'];
$sql = mysql_query("select * from admin where username='$username' and password='$password'");

if (empty($username)){
	echo "<script>window.alert('Username harus diisi')</script>";
	header("loacation:sign-in.php");
}else if (empty($password)){
	echo "<script>window.alert('Password harus diisi')</script>";
	header("loacation:sign-in.php");
}else if (empty($username) && empty($password)){
	echo "<script>window.alert('Username & password harus diisi')</script>";
	header("loacation:sign-in.php");
}else{
	if (mysql_num_rows($sql) > 0){
		session_start();
		$_SESSION['username'] = $username;
		echo "<script>window.alert('Login Berhasil')</script>";
		echo "<meta http-equiv='refresh' content='1 url=inputpaket.php'>";

	}else{
		echo "<script>window.alert('Username atau Password salah')</script>";
		echo "<meta http-equiv='refresh' content='1 url=sign-in.php'>";
	}
}
?>