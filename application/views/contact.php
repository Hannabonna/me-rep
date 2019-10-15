<!DOCTYPE html>
<html>
<head>
	<title>Contact</title>
	<meta charset="utf-8">
  	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>css/page.css">
    <script type="text/javascript" src="<?php echo base_url(); ?>js/action.js"></script>
</head>
<body>
  <?php include "header.php" ?>
  <div id="mySidenav" class="sidenav">
    <div class="container" style="background-color: #2874f0; padding-top: 10px;">
        <span class="sidenav-heading">Home</span>
        <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">×</a>
    </div>
    <ul>
      <li class="upper-links"><a class="links" href="<?php echo site_url(); ?>/Home/index/">Home</a></li><br>
      <li class="upper-links"><a class="links" href="<?php echo site_url(); ?>/Home/contact">Contact</a></li><br>
      <li class="upper-links"><a class="links" href="<?php echo site_url(); ?>/Home/aboutus">About Us</a></li><br>
      <li class="upper-links"><a class="links" href="<?php echo site_url(); ?>/Home/signup">Sign Up</a></li><br>
      <li class="upper-links"><a class="links" href="<?php echo site_url(); ?>/Home/login">Login</a></li><br>
      <li class="upper-links dropdown"><a class="links" href="#">Products</a>
          <ul class="dropdown-menu">
              <li class="profile-li"><a class="profile-links" href="<?php echo site_url(); ?>/Home/laptop">Laptops</a></li>
              <li class="profile-li"><a class="profile-links" href="<?php echo site_url(); ?>/Home/camera">Cameras</a></li>
              <li class="profile-li"><a class="profile-links" href="<?php echo site_url(); ?>/Home/handphone">Handphones</a></li>
              <li class="profile-li"><a class="profile-links" href="<?php echo site_url(); ?>/Home/acc">Accessories</a></li>
              <li class="profile-li"><a class="profile-links" href="<?php echo site_url(); ?>/Home/fashion">Fashion</a></li>
              <li class="profile-li"><a class="profile-links" href="<?php echo site_url(); ?>/Home/voucher">Vouchers</a></li>
          </ul>
      </li>
  </ul>
</div>
<!-- Context -->
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="well well-sm">
                <form method="post" action="<?php echo site_url('Home/addContact'); ?>">
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="name">
                                Name</label>
                            <input type="text" class="form-control" name="nama" id="name" placeholder="Enter name" required="required" />
                        </div>
                        <div class="form-group">
                            <label for="email">
                                Email Address</label>
                            <div class="input-group">
                                <span class="input-group-addon"><span class="glyphicon glyphicon-envelope"></span>
                                </span>
                                <input type="email" class="form-control" name="email" id="email" placeholder="Enter email" required="required" /></div>
                        </div>
                        <div class="form-group">
                            <label for="subject">
                                Subject</label>
                            <select id="subject" name="subject" class="form-control" required="required">
                                <option value="na" selected="">Choose One:</option>
                                <option value="service">General Customer Service</option>
                                <option value="suggestions">Suggestions</option>
                                <option value="product">Product Support</option>
                            </select>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="name">
                                Message</label>
                            <textarea name="message" id="message" class="form-control" name="message" rows="9" cols="25" required="required"
                                placeholder="Message"></textarea>
                        </div>
                    </div>
                    <div class="col-md-12">
                        <button type="submit" class="btn btn-primary pull-right" id="btnContactUs">
                            Send Message</button>
                    </div>
                </div>
                </form>
            </div>
        </div>
    </div>
</div>
<!--- Footer -->
<?php include "footer.php" ?>
</body>
</html>