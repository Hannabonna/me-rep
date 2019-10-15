<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<title>jQuery Show Hide Elements Using Radio Buttons</title>
    
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

<header id="head" class="secondary"></header>

	<!-- container -->
	<div class="container">
		
		<div class="row">

			<!-- Content -->
			<article class="col-md-8 maincontent">
				<header class="page-header">
					<h1 class="page-title">APPROVAL RTF</h1>
				</header>
				
				<form class ="form-horizontal">
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
				<div>
					<label><input type="radio" name="colorRadio" value="norft"> Project</label>
					<label><input type="radio" name="colorRadio" value="norfc"> Changes</label>
				</div>
	
				<div class="fom-group">
					<td><label for="nom">NO PROJECT :</label></td>
					<td><select name="no_proj" class="form-control">
						<option value="">pilih</option>
						<option value="nomorproject">-no project-</option>
					</select></td>
				</div>
				<tr></tr>
    <div class ="fom-group">
    <div class="norft box">
       <td><label for="norft"><br>NO. RFT :</label></td>
	   <td><br><input type="text" class="form-control"></td>
	</div>
    </div>
	<tr></tr>
    <div class ="fom-group">
	<div class ="norfc box">
		<td><label for="norfc"><br>NO. RFC :</label></td>
		<td><br><input type="text" class="form-control"></td>
	</div>
	</div>
</body>
</html>                                		