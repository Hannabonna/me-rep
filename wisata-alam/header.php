<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="">
  <meta name="author" content="">
  <title>Pesona Alam Jawa Barat</title>
  <link href="css/bootstrap.min.css" rel="stylesheet">
  <link href="css/animate.min.css" rel="stylesheet"> 
  <link href="css/font-awesome.min.css" rel="stylesheet">
  <link href="css/lightbox.css" rel="stylesheet">
  <link href="css/main.css" rel="stylesheet">
  <link id="css-preset" href="css/presets/preset1.css" rel="stylesheet">
  <link href="css/responsive.css" rel="stylesheet">
  <link rel="shortcut icon" href="images/icok.ico">
  <script type="text/javascript" src="jquery.js"></script>
  <script type="text/javascript" src="jquery.watermarkinput.js"></script>
  <script type="text/javascript">
  $(document).ready(function(){

  $(".search-form").keyup(function() 
  {
  var kotakpencarian = $(this).val();
  var dataString = 'searchword='+ kotakpencarian;

  if(kotakpencarian=='')
  {
  }
  else
  {

  $.ajax({
  type: "POST",
  url: "search.php",
  data: dataString,
  cache: false,
  success: function(html)
  {

  $("#hasilpencarian").html(html).show();
    
    
    }




  });
  }return false;    


  });
  });

  jQuery(function($){
     $("#kotakpencarian").Watermark("Cari");// Untuk menampilkan tulisan "Cari" di kotakpencarian
     });
  </script>

<body>

  <div class="preloader"> <i class="fa fa-circle-o-notch fa-spin"></i></div>
  <!--/.preloader-->

  <header id="home">
    <div class="main-nav">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="index.php">
            <img class="img-responsive" src="images/logo-jabar.png" alt="logo">
            <!--<h1><img class="img-responsive" src="images/logo.jpg" alt="logo"></h1>-->
          </a>
          <a class="navbar-brand" href="index.php">
            <!--<h1><img class="img-responsive" src="images/logo-jabar.png" alt="logo"></h1>-->
            <h1><center><img class="img-responsive" src="images/ps.png" alt="logo"></center></h1>
          </a>                    
        </div>
        