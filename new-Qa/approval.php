<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta name="viewport"    content="width=device-width, initial-scale=1.0">
	<meta name="description" content="">
	<meta name="author"      content="Sergey Pozhilov (GetTemplate.com)">
	
	<title>Approval RFT</title>

	<link rel="shortcut icon" href="assets/images/gt_favicon.png">
	
	<link rel="stylesheet" media="screen" href="http://fonts.googleapis.com/css?family=Open+Sans:300,400,700">
	<link rel="stylesheet" href="assets/css/bootstrap.min.css">
	<link rel="stylesheet" href="assets/css/font-awesome.min.css">

	<!-- Custom styles for our template -->
	<link rel="stylesheet" href="assets/css/bootstrap-theme.css" media="screen" >
	<link rel="stylesheet" href="assets/css/main.css">
	<script src="assets/js/html5shiv.js"></script>
	<script src="assets/js/respond.min.js"></script>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
	<script type="text/javascript" src="http://code.jquery.com/jquery.min.js"></script>
	<script type="text/javascript">
	 	$(document).ready(function(){
			$('input[type="radio"]').click(function(){
				if($(this).attr("value")=="norft"){
					$(".box").not(".norft").hide();
					$(".norft").show();
				}
				if($(this).attr("value")=="norfc"){
					$(".box").not(".norfc").hide();
					$(".norfc").show();
				}
       
			});
		});
	</script>
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
					<h1 class="page-title">APPROVAL RTF</h1>
				</header>
				
				<form class ="form-horizontal" role="form">
				<div class ="panel panel-default">
				<div class ="panel-body""center">
				<div id="content">
				
				<header>
					<h2>INPUT HERE</h2>
					<p></p>
					<br></br>
				</header>
				
				<div class="table-responsive">
				<div class="form-horizontal">
					</div>
					<label><input type="radio" name="optradio" value="norft"> Project</label>
					<label><input type="radio" name="optradio" value="norfc"> Changes</label>
					</div>
					<br>
					<div class="fom-group" >
					<div class="row"> 
						<div class="col-sm-8">
						<label for="nom">NO PROJECT :</label>
						<select name="no_proj" class="form-control">
							<option value="">pilih</option>
							<option value="nomorproject">-no project-</option>
						</select>
						</div>
					</div>
					</div>
					<tr></tr>
					<div class ="fom-group">
					<div class="norft box">
					<div class="row"> 
						<div class="col-sm-8">
						<label for="norft"><br>NO. RFT :</label>
						<input type="text" class="form-control">
						</div>
					</div>
					</div>
					</div>
					
					<div class ="fom-group">
					<div class ="norfc box">
					<div class="row"> 
						<div class="col-sm-8">
						<label for="norfc"><br>NO. RFC :</label>
						<input type="text" class="form-control">
						</div>
					</div>
					</div>
					</div>
					
					<div class ="fom-group">
					<div class="row"> 
						<div class="col-sm-8">
						<label for="nama"><br>Nama Project :</label>
						<input type="text" class="form-control" id="nprj">
						</div>
					</div>
					</div>
					
					<div class ="fom-group">
					<div class="row"> 
						<div class="col-sm-8">
						<label for="picit"><br>PIC IT :</label>
						<input type="text" class="form-control" id="picit">
						</div>
					</div>
					</div>
					
					<div class ="fom-group">
					<div class="row"> 
						<div class="col-sm-8">
						<label for="ket"><br>KETERANGAN :</label>
						<textarea class="form-control" rows="5" id="ket"></textarea>
						</div>
					</div>
					</div>
					
					<div class="fom-group">
					<div class="row"> 
						<div class="col-sm-8">
						<label for="perc"><br>PERSENTASE :</label>
						<select class="form-control" name="perc">
								<option value="">pilih</option>
								<option value="20">0-20%</option>
								<option value="40">21-40%</option>
								<option value="60">41-60%</option>
								<option value="80">61-80%</option>
								<option value="100">81-100%</option>
						</select>
						</div>
					</div>
					</div>
					<br>
					<input type="submit" class="btn btn-info" value="Approve" center>
				</div>
				</div>							
									
				</div>
				</div>
				</div>
				</form>													
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