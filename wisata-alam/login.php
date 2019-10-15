<?php
    include "koneksi.php";

    if (isset($_SESSION['username'])){
        session_start();
        header ('location:admin.php');
    }
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Login Admin</title>
        <link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Roboto:400,100,300,500">
        <link rel="stylesheet" href="login/css/bootstrap.min.css">
        <link rel="stylesheet" href="login/font-awesome/css/font-awesome.min.css">
		<link rel="stylesheet" href="login/css/form-elements.css">
        <link rel="stylesheet" href="login/css/style.css">

    </head>

    <body>
        <div class="top-content">
            <div class="inner-bg">
                <div class="container">
                    <div class="row">
                        <div class="col-sm-6 col-sm-offset-3 form-box">
                        	<div class="form-top">
                        		<div class="form-top-left">
                        			<h3>LOGIN ADMIN<br/>
                                    Masukkan username dan password:
                                    </h3>
                        		</div>
                        		<div class="form-top-right">
                        			<i class="fa fa-lock"></i>
                        		</div>
                            </div>
                            <div class="form-bottom">
			                    <form role="form" action="getlogin.php" method="post" class="login-form">
			                    	<div class="form-group">
			                    		<label class="sr-only" for="form-username">Username</label>
			                        	<input type="text" name="username" placeholder="Username..." class="form-username form-control" id="form-username" required>
			                        </div>
			                        <div class="form-group">
			                        	<label class="sr-only" for="form-password">Password</label>
			                        	<input type="password" name="password" placeholder="Password..." class="form-password form-control" id="form-password" required>
			                        </div>
			                        <button type="submit" class="btn">Sign in</button>
			                    </form>
                                <a href="index.html">Kembali ke Halaman Utama</a>            
		                    </div>
                        </div>
                    </div>
                </div>
            </div>
            
        </div>

        <script src="login/js/jquery-1.11.1.min.js"></script>
        <script src="login/js/bootstrap.min.js"></script>
        <script src="login/js/jquery.backstretch.min.js"></script>
        <script src="login/js/scripts.js"></script>

    </body>

</html>