<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta name="viewport"    content="width=device-width, initial-scale=1.0">
	<meta name="description" content="">
	<meta name="author"      content="Sergey Pozhilov (GetTemplate.com)">
	
	<title>Input QA</title>

	<link rel="shortcut icon" href="assets/images/gt_favicon.png">
	
	<link rel="stylesheet" media="screen" href="http://fonts.googleapis.com/css?family=Open+Sans:300,400,700">
	<link rel="stylesheet" href="assets/css/bootstrap.min.css">
	<link rel="stylesheet" href="assets/css/font-awesome.min.css">

	<!-- Custom styles for our template -->
	<link rel="stylesheet" href="assets/css/bootstrap-theme.css" media="screen" >
	<link rel="stylesheet" href="assets/css/main.css">

	<!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
	<!--[if lt IE 9]>
	<script src="assets/js/html5shiv.js"></script>
	<script src="assets/js/respond.min.js"></script>
	<![endif]-->
</head>

<body>
	<!-- Fixed navbar -->
	<div class="navbar navbar-inverse navbar-fixed-top headroom" >
		<div class="container">
			<div class="navbar-header">
				<!-- Button for smallest screens -->
				<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse"><span class="icon-bar"></span> <span class="icon-bar"></span> <span class="icon-bar"></span> </button>
				<a class="navbar-brand" href="index.php"><img src="assets/images/qa12.png"></a>
			</div>
			<div class="navbar-collapse collapse">
				<ul class="nav navbar-nav pull-right">
					<li class="active"><a href="index.php">Home</a></li>
					<li class="dropdown">
						<a href="#" class="dropdown-toggle" data-toggle="dropdown">LPM <b class="caret"></b></a>
						<ul class="dropdown-menu">
							<li class="active"><a href="inputlpm.php">Input Data LPM</a></li>
							<li class="active"><a href="report.php">Report</a></li>
							<li class="active"><a href="approval.php">Approval RFT</a></li>
						</ul>
					</li>
					<li class="active"><a href="developer.php">Developer</a></li>
					<li class="active"><a href="inputqa.php">QA</a></li>
					<li class="active"><a href="detail.php">Detail Project/ Change</a></li>
					<li class="active"><a href="update.php">Update Data Pegawai</a></li>
					<li><a class="btn" href="signin.html">SIGN IN / SIGN UP</a></li>
				</ul>
			</div><!--/.nav-collapse -->
		</div>
	</div> 
	<!-- /.navbar -->

	<header id="head" class="secondary"></header>

	<!-- container -->
	<div class="container">
		
		<div class="row">

			<!-- Content -->
			<article class="col-md-8 maincontent">
				<header class="page-header">
					<h1 class="page-title">INPUT QA</h1>
				</header>
				
				<form class ="form-horizontal">
				<div class ="panel panel-default">
				<div class ="panel-body""center">
				<div id="content">
				<article class="box post">
				<header>
					<h2>DETAIL PENGERJAAN PROJECT</h2>
					<p></p>
				</header>
											
				<div class="table-responsive">
				<div class="form-horizontal">
				<table class="table">
				<div class="form-group">
					<td><br><label for="no_rft"><br>NO RFT :</label></td>
					<td><br><select class="form-control" name="rft" >
							<option value="">pilih</option>
							<option value="nomorRFT">-NO RFT- xxx/rft/bln/thn</option>
							</select></td>
				</div>
				<tr></tr>
				<div class="fom-group">
					<td><br><label for ="tgl"><br>TANGGAL :</label></td>
					<td><br><input type="text" name="tgl_pengerjaan" class="form-control" id="tgl" placeholder="Tanggal pengerjaan" cols="6">
				</div>
				<tr></tr>
				<div class="fom-group">
					<td><label for="progress"><br>PROGRESS PENGERJAAN :</label></td>
					<td><br><div class="checkbox">
								<label><input name="progress" type="checkbox" value="Penerimaan RFT">Penerimaan RFT</label>
							</div>
							<div class="checkbox">
								<label><input name="progress" type="checkbox" value="Analisa RFT">Analisa RFT</label>
							</div>
							<div class="checkbox">
								<label><input name="progress" type="checkbox" value="Pra UAT">Pra UAT</label>
							</div>
							<div class="checkbox">
								<label><input name="progress" type="checkbox" value="Proses UAT">Proses UAT</label>
							</div>
							<div class="checkbox">
								<label><input name="progress" type="checkbox" value="Proses Migrasi">Proses Migrasi</label>
							</div>
							<div class="checkbox">
								<label><input name="progress" type="checkbox" value="proses PIR">Proses PIR</label>
							</div>
					</td>		
				</div>
				<tr></tr>
				<div class="fom-group">
					<td><label for="PICIT"><br>PIC IT:</label></td>
					<td><br><input type="text" class="form-control" name="pic_it"></td>
				</div>
				<tr></tr>
				<div class="fom-group">
					<td><label for="TGLUAT"><br>Tanggal UAT:</label></td>
					<td><br><input type="text" class="form-control" name="tgl_uat"></td>
				</div>
				<tr></tr>
				<div class="fom-group">
					<td><label for="det"><br>STATUS UAT :</label></td>
					<td><br>
						<label class="radio-inline"><input type="radio" name="status" value="SUDAH">SUDAH</label>
						<label class="radio-inline"><input type="radio" name="status" value="belum">BELUM</label>
					</td>
				</div>
				<tr></tr>
				<div class="fom-group">
					<td><label for="tglimpl"><br>Tanggal Implementasi:</label></td>
					<td><br><input type="text" class="form-control" name="tgl_implemen"></td>
				</div>
				<tr></tr>
				<div class="fom-group">
					<td><label for="det"><br>STATUS IMPLEMENTASI :</label></td>
					<td><br>
						<label class="radio-inline"><input type="radio" name="stat_impl" value="SUDAH">SUDAH</label>
						<label class="radio-inline"><input type="radio" name="stat_impl" value="BELUM">BELUM</label>
					</td>
				</div>
				<tr></tr>
				<div class="fom-group">
					<td><label for="cat"><br>CATATAN PENGERJAAN :</label></td>
					<td><br><textarea class="form-control" rows="5" name="catatan"></textarea></td>
				</div> 
				<tr></tr>
				<div class="form-group">
					<td><ul class="actions">
					<td><br>
						<input name ="tambahqa" type="submit" class="btn btn-info" value="Submit">
						<input type="submit" class="btn btn-info" value="Close Project">
				    </td></ul>
				</div>
											
			</div>
			</div>
			</table>
			</form>
			</article>
			</div>
			</div>
		</article>
			<!-- /Content -->

		</div>
	</div>	<!-- /container -->
	

	<footer id="footer" class="top-space">
		<div class="footer2">
			<div class="container">
				<div class="row">
					
					<div class="col-md-6 widget">
						<div class="widget-body">
							<p class="simplenav">
								<a href="#">Home</a> | 
								<a href="inputlpm.php">Input LPM</a> |
								<a href="report.php">Report</a> |
								<a href="approval.php">Approval RFT</a> |
								<a href="developer.php">Developer</a> |
								<a href="inputqa.php">QA</a> |
								<a href="detail.php">Detail</a> |
								<a href="update.php">Update Data Pegawai</a> |
								<b><a href="signup.html">Sign up</a></b>
							</p>
						</div>
					</div>

					<div class="col-md-6 widget">
						<div class="widget-body">
							<p class="text-right">
								Copyright &copy; 2015, GHZ. Designed by <a href="http://gettemplate.com/" rel="designer">gettemplate</a> 
							</p>
						</div>
					</div>

				</div> <!-- /row of widgets -->
			</div>
		</div>
	</footer>	
		




	<!-- JavaScript libs are placed at the end of the document so the pages load faster -->
	<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
	<script src="http://netdna.bootstrapcdn.com/bootstrap/3.0.0/js/bootstrap.min.js"></script>
	<script src="assets/js/headroom.min.js"></script>
	<script src="assets/js/jQuery.headroom.min.js"></script>
	<script src="assets/js/template.js"></script>
</body>
</html>