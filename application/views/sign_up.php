<!DOCTYPE html>
<html>
<head>
	<title>Sign Up</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<style type="text/css">
	body{
		background-image: url("<?php echo base_url(); ?>image/blueprint.jpg");
	}

	form{
		margin-top: 25px;
		background-color: gainsboro;
		width: 30%;
		height: 30%;
		padding: 1%;
		font-family: "calibri";
		border-radius: 10px;
		box-shadow: 2px 2px 2px 2px #ffffff;
	}

	table {
		width: 100%;
		height: 100%;
	}

	form table tr td img.logo{
		width: 100px;
		height: 100px;
	}

	form table tr td img{
		width: 20px;
		height: 20px;
		margin-bottom: 30px;
	}

	form table tr td h4{
		margin-bottom: 20px;
		font-family: 
	}

	form table tr td input{
		border-color: transparent;
		background :transparent;
	}

	input:focus{
		outline-color: transparent; ;
	}

	form table tr td button{
		width: 100%;
		background: #2bcbba;
		border :none;
		color: white;
		padding: 10px;
		border-radius: 5px;
		margin-top: 20px;
	}

	form table tr td p{
		color: gray;
	}

	a#login{
		text-decoration: none;
		font-weight: 500;
	}
	#teks{
		margin-top: 10px;
	}


</style>
<!-- ::::::::::::::::::::::::::BAGIAN SIGN UP::::::::::::::::::::::::::: -->
<body>
	<center>
	<?php if(validation_errors()){ ?>
		<div class="alert alert-danger" role="alert"> <?php echo validation_errors(); ?> <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button></div>
	<?php } ?>
	<?php echo form_open_multipart('Home/form_sign'); ?>
		<table>
			<tr>
				<td colspan="3"><center><img class="logo" src="<?php echo base_url(); ?>img/house2.png"></center></td>
			</tr>
			<tr>
				<td colspan="3"><center><h4><strong>Pirrshop - SignUp</strong></h4></center></td>
			</tr>
			<tr>
				<td><img src="<?php echo base_url(); ?>image/mail.png"></td>
				<td><input type="text" placeholder="Username" name="username"><br><hr></td>
			</tr>
			<tr>
				<td><img src="<?php echo base_url(); ?>image/lock.png"></td>
				<td><input type="password" placeholder="Password" name="password" required><br><hr></td>
			</tr>
			<tr>
				<td><img src="<?php echo base_url(); ?>image/lock.png"></td>
				<td><input type="password" placeholder="Re-type Password" name="passconf"><br><hr></td>
			</tr>
			<tr>
				<td><img src="<?php echo base_url(); ?>image/user.png"></td>
				<td><input type="text" placeholder="Full Name" name="nama" required><br><hr></td>
			</tr>
			<tr>
				<td><img src="<?php echo base_url(); ?>image/mail.png"></td>
				<td><input type="email" placeholder="Email" name="email" required><br><hr></td>
			</tr>
			<tr>
				<td><img src="<?php echo base_url(); ?>image/user.png"></td>
				<td><input type="radio" name="jk" id="jk" value="Laki-Laki" required>Male
					<input type="radio" name="jk" id="jk" value="Perempuan" required>Female<hr></td>
			</tr>
			<tr>
				<td><img src="<?php echo base_url(); ?>image/home.png"></td>
				<td><input type="text" name="address" id="message" required
                placeholder="Enter home address"></td>
			</tr>
			<tr>
				<td colspan="3"><button class="btn btn-primary" type="submit"><b>REGISTER NOW</b></button></td>
			</tr>
			<tr>
				<td colspan="3"><center><p id="teks">Already have an account?<a id="login" href="<?php echo site_url(); ?>/Home/login"> Login here</a></p></center></td>
			</tr>
		</table>
	<?php form_close(); ?>
	</center>
</body>
</html>