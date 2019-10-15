<!DOCTYPE html>
<html>
<head>
	<title>Pirrshop - Toko Online Terbaik</title>
	<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>css/page.css">
  <script type="text/javascript" src="<?php echo base_url(); ?>js/action.js"></script>
</head>
<body>
<!-- Header -->
  	<?php include "header.php" ?>
<!-- Carousel -->
  <div class="container" id="contain">
    <div id="myCarousel" class="carousel slide">
      <!-- Indicators -->
      <ol class="carousel-indicators">
        <li class="item1 active"></li>
        <li class="item2"></li>
        <li class="item3"></li>
        <li class="item4"></li>
      </ol>

      <!-- Wrapper for slides -->
      <div class="carousel-inner" role="listbox">

        <div class="item active">
          <img src="<?php echo base_url(); ?>img/1.jpg" alt="Chania">
        </div>

        <div class="item">
          <img src="<?php echo base_url(); ?>img/2.jpg" alt="Chania" >
        </div>
      
        <div class="item">
          <img src="<?php echo base_url(); ?>img/3.jpg" alt="Flower">
        </div>

        <div class="item">
          <img src="<?php echo base_url(); ?>img/4.jpg" alt="Flower">
        </div>
    
      </div>

      <!-- Left and right controls -->
      <a class="left carousel-control" href="#myCarousel" role="button">
        <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
      </a>
      <a class="right carousel-control" href="#myCarousel" role="button">
        <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
      </a>
    </div>
  </div>

<!-- Context -->
  <div class="container-fluid">
  	<div class="row row-centered" style="margin-top: 50px">
  		<div class="col-md-4 col-centered" style="margin-right: 50px;min-width: 300px;height: 300px;background-color: #FF6600;">
        <a href="<?php echo site_url(); ?>/Home/laptop">
          <img src="<?php echo base_url(); ?>img/laptop.png" style="max-width: 100%; max-height: 100%;">
        </a>
  		</div>
  		<div class="col-md-4 col-centered" style="min-width: 300px;height: 300px;background-color: #39E600;">
        <a href="<?php echo site_url(); ?>/Home/camera">
  			 <img src="<?php echo base_url(); ?>img/camera.png" style="max-width: 100%; max-height: 100%;">
        </a>
  		</div>
  	</div>
  		<div class="row row-centered resp">
  		<div class="col-md-4 col-centered" style="margin-right: 50px;min-width: 300px;height: 300px;background-color: #3366FF;">
        <a href="<?php echo site_url(); ?>/Home/handphone">
  			 <img src="<?php echo base_url(); ?>img/smartphone.png" style="max-width: 100%; max-height: 100%;">
        </a>
  		</div>
  		<div class="col-md-4 col-centered" style="min-width: 300px;height: 300px;background-color: #FFFF00;">
        <a href="<?php echo site_url(); ?>/Home/acc">
  			 <img src="<?php echo base_url(); ?>img/watch.png" style="max-width: 100%; max-height: 100%;">
        </a>
  		</div>
  	</div>
  		<div class="row row-centered resp">
  		<div class="col-md-4 col-centered" style="margin-right: 50px;min-width: 300px;height: 300px;background-color: #CC00CC;">
        <a href="<?php echo site_url(); ?>/Home/fashion">
  			 <img src="<?php echo base_url(); ?>img/shirt.png" style="max-width: 100%; max-height: 100%;">
        </a>
  		</div>
  		<div class="col-md-4 col-centered" style="min-width: 300px;height: 300px;background-color: #FF3333;">
        <a href="<?php echo site_url(); ?>/Home/voucher">
  			 <img src="<?php echo base_url(); ?>img/stick.png" style="max-width: 100%; max-height: 100%;">
        </a>
  		</div>
  	</div>
  </div>
    <!--- Footer -->
  <?php include "footer.php" ?>
</body>
</html>