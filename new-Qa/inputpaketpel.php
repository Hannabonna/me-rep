<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta name="viewport"    content="width=device-width, initial-scale=1.0">
	<meta name="description" content="">
	<meta name="author"      content="Sergey Pozhilov (GetTemplate.com)">
	
	<title>Input Paket Pelajar</title>

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
	<script>
	$(document).ready(function(){
		$("#hide").click(function(){
			$("p").hide();
		});
		$("#show").click(function(){
			$("p").show();
		});
	});
	</script>
	<script>
	var counter = 1;
	var limit = 3;
	function fungsitambah(divName) {
		if(counter == limit) {
			alert ("You have reached the limit of adding " + counter + "inputs");
		}
		else {
			var newdiv = document.createElement('div');
			newdiv.innerHTML = "Entry " + (counter + 1) + " <br><input type='text' name='myInputs[]'>";
			document.getElementById(divName).appendChild(newdiv);
			counter++;
		}
	</script>
</head>

<body>
	<!-- Fixed navbar -->
	<div class="navbar navbar-inverse navbar-fixed-top headroom" >
		<div class="container">
			<div class="navbar-header">
				<!-- Button for smallest screens -->
				<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse"><span class="icon-bar"></span> <span class="icon-bar"></span> <span class="icon-bar"></span> </button>
				<!--<a class="navbar-brand" href="index.php"><img src="assets/images/qa12.png"></a>-->
			</div>
			<div class="navbar-collapse collapse">
				<ul class="nav navbar-nav pull-right">
					<li class="active"><a href="index.php">Home</a></li>
					<li class="dropdown">
						<a href="#" class="dropdown-toggle" data-toggle="dropdown">Input Paket Wisata <b class="caret"></b></a>
						<ul class="dropdown-menu">
							<li class="active"><a href="inputpaketpel.php">Pelajar</a></li>
							<li class="active"><a href="report.php">Umum</a></li>
						</ul>
					</li>
					<li class="active"><a href="developer.php">Input Bus</a></li>
					<li class="active"><a href="inputqa.php">Tour Program</a></li>
					<li class="active"><a href="detail.php">Info Tempat Wisata</a></li>
					<li class="active"><a href="update.php">Data Pemesanan</a></li>
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
					<h1 class="page-title">INPUT PAKET PELAJAR</h1>
				</header>
				
				<form class="form-horizontal">
				<!--<form method="post" name="inputdata" action="cek_lpm.php">-->
				<div class="panel panel-default">
				<div class="panel-body" "center">
				<div id="content">
				<article class="box post">
				
				<div class="table-responsive">
				<div class="form-horizontal">	
					<table class="table">
					<div class="fom-group">					
						<td><br><label for="kodepaketpel">KODE PAKET PELAJAR :</label></td>
						<td><br><input type="text" class="form-control" name="kodepaketpel" required></td>			
					</div>
					</tr><tr>
					<div class="fom-group">
						<td><br><label for="namapaket">NAMA PAKET :</label></td>
						<td><br><input type="text" class="form-control" name="namapaket" required></td>
					</div>
					</tr><tr>
					<div class="fom-group">
						<td><br><label for="tujuan">TUJUAN :</label></td>
						<td><br><input type="text" class="form-control" name="tujuan" required></td>
					</div>
					<tr></tr>
					<div class="fom-group">
						<td><label for="lama"><br>LAMA KUNJUNGAN:</label></td>
						<td><br><input type="text" class="form-control" name="lama" required></td>
					</div>
					<tr></tr>
					<div class="fom-group">
						<td><label for="hari"><br>HARI KUNJUNGAN:</label></td>
						<td><br><input type="text" class="form-control" name="hari" required></td>
					</div>
					<tr></tr>
					<div class="fom-group">
						<td><label for="jenis" required><br>Jenis:</label></td>
						<td><br><select class ="form-control" name="jenis">
							<option value="">---pilih---</option>
							<option value="A">A. Pengadaan</option>
							<option value="B">B. Jasa Pemeliharaan</option>
							</select></td>
					</div>
					<tr></tr>
					<div class="fom-group">
						<td><label for="sub"><br>Sub Penomoran Projek:</label></td>
						<td><br>
							<label class="radio"><input type="radio" name="sub" value="1" required>1. Software</label>
							<label class="radio"><input type="radio" name="sub" value="2">2. OS dan/tau Database</label>
							<label class="radio"><input type="radio" name="sub" value="3">3. Hardware</label>
							<label class="radio"><input type="radio" name="sub" value="4">4. Software,Hardware,OS dan/atau Database</label>
							<label class="radio"><input type="radio" name="sub" value="5">5. Jasa Bidang Teknologi Informasi</label>
						</td>
					</div>
					<tr></tr>
					<div class="fom-group">
						<td><label for="comment"><br>Model/Fitur:</label></td>
						<td><br><textarea class="form-control" rows="3" name="modul_fitur" required></textarea></td>
					</div>
					<tr></tr>
					<div class="fom-group">
						<td><label for="comment"><br>Divisi Pengaju:</label></td>
						<td><br><select class ="form-control" name = "div_pengaju" required>
							<option value="">---pilih---</option>
							<option value="01">Divisi Audit Internal</option>
							<option value="02">Divisi Change Management Office</option>
							<option value="03">Divisi Corporate Secretary</option>
							<option value="04">Divisi Credit Risk Reviewer</option>
							<option value="05">Divisi Institusional Banking</option>
							<option value="06">Divisi Internasional</option>
							<option value="07">Divisi Jaringan dan Layanan</option>
							<option value="08">Divisi Kepatuhan</option>
							<option value="09">Divisi Pengendalian Keuangan</option>
							<option value="10">Divisi Kredit Konsumer</option>
							<option value="11">Divisi Korporasi & Komersial</option>
							<option value="12">Divisi KPR & Mortgage</option>
							<option value="13">Divisi Operasional</option>
							<option value="14">Divisi Manajemen Anak Perusahaan</option>
							<option value="15">Divisi Manajemen Risiko</option>
							<option value="16">Divisi Mikro</option>
							<option value="17">Divisi Pendidikan & Pelatihan</option>
							<option value="18">Divisi Perencanaan Strategis</option>
							<option value="19">Divisi Sumber Daya Manusia</option>
							<option value="20">Divisi Teknologi Informasi</option>
							<option value="21">Divisi Trisuri</option>
							<option value="22">Divisi Umum</option>
							<option value="23">Divisi Penyelamatan & Penyelesaian Kredit</option>
							<option value="24">Unit Card Center</option>
							<option value="25">Unit Electronic Banking</option>
							<option value="26">Divisi Hukum</option>
							<option value="27">Divisi Dana & Jasa Konsumer</option>
							<option value="28">Unit Administrasi Kredit & Bisnis Legal</option>
							</select></td>
							<td><br><button onClick="fungsitambah()" type="button" class="btn btn-info" class="add-field">
								<span class="glyphicon glyphicon-plus"></span></button>
							</td>
					</div>
					<tr></tr>
					<div class="fom-group">
						<td><label for="comment"><br>Group IT:</label></td>
						<td><br><select class ="form-control" name ="grup_it" required>
							<option value="">---pilih---</option>			 
							<option value="COR">COR</option>
							<option value="HDC">HDC</option>
							<option value="LPM">LPM</option>
							<option value="QAS">QAS</option>
							<option value="SPG">SPG</option>
							<option value="SWI">SWI</option>
							<option value="SYS">SYS</option>
							<option value="HOA">HOA</option>
							</select></td>
						<td><br><button type="Submit" class="btn btn-info"> 
							<span class="glyphicon glyphicon-plus"></span></button>
						</td>
					</div>
					</div>
					<tr></tr>
					
					<div class="fom-group">
						<td><label for="comment"><br>PIC IT:</label></td>
						<td><br><select class="form-control" name ="pic_it" required>
							<option value="">---pilih---</option>			 
							<option value="AP">ADI PRIMADHI</option>
							<option value="BN">BUDI NUGRAHA</option>
							<option value="HH">HENDI HERYAWAN</option>
							<option value="MA">MUHAMMAD ARDIANSYAH</option>
							<option value="RH">MOHAMAD REZA HARAHAP</option>
							<option value="RYz">RYAN FAJAR HADIANA</option>
							</select></td>
						<td><br><button type="Submit" class="btn btn-info">
							<span class="glyphicon glyphicon-plus"></span></button>
						</td>
					</div>
					<tr></tr>
					<div class="form-group">
						<td><ul class="actions">
						<td>
							<input name="tambahlpm" type="submit" class="btn btn-info" value="Send" />
							<input type="Reset" class="btn btn-default" value="Reset" />
						</td>
						</ul></td>
					</div>
				</table>	
				</div>
				</div>
				</div>
				</form>
				</form>
				</article>
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
						</div>
					</div>

					<div class="col-md-6 widget">
						<div class="widget-body">
							<p class="text-right">
								Copyright &copy; 2016, Hanna Afiah. Designed by <a href="http://gettemplate.com/" rel="designer">gettemplate</a> 
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