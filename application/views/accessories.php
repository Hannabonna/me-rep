<!DOCTYPE html>
<html>
<head>
	<title>Accessories</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>css/laptops.css">
    <script type="text/javascript" src="<?php echo base_url(); ?>js/action2.js"></script>
</head>
<body>
    <!-- Header -->
<?php include "header.php" ?>
</div>
  <div class="container">
    <div class="row">
    <div class="container padding-bottom-2x mb-2">
          <div class="row">
            <!-- Sidebar -->
            <div class="col-lg-3">
              <h3 class="widget-title">Categories</h3>
                <ul class="list-group list-group-flush">
                    <a class="list-group-item" href="<?php echo site_url(); ?>/Home/laptop" id="cat0">Laptops</a>
                    <a class="list-group-item" href="<?php echo site_url(); ?>/Home/camera" id="cat1">Cameras</a>
                    <a class="list-group-item" href="<?php echo site_url(); ?>/Home/handphone" id="cat2">Handphone</a>
                    <a class="list-group-item" href="<?php echo site_url(); ?>/Home/acc" id="cat3">Accessories</a>
                    <a class="list-group-item" href="<?php echo site_url(); ?>/Home/fashion" id="cat4">Fashion</a>
                    <a class="list-group-item" href="<?php echo site_url(); ?>/Home/voucher" id="cat5">Vouchers</a>
                </ul>
            </div>
            <!-- Categories-->
            
            <div class="col-lg-9">
              <div class="row">   
              <?php foreach($product as $p)
                { if($p->jenis == "acc") {?>   
                <div class="col-sm-6">
                  <div class="card mb-30"><a class="card-img-tiles" href="#">
                      <div class="inner">
                        <div class="main-img"><img src="<?php echo base_url().'img/'.$p->gambar ?>" style="width: 100%; height: auto; margin: 0; auto;"></div>
                      </div></a>
                    <div class="card-body text-center">
                      <p class="card-title name nama1"><?php echo $p->nama; ?></>
                      <br>
                      <p class="text-muted name harga1">Rp. <?php echo number_format($p->harga,0,",","."); ?></p>
                      <br>
                      <form method="post" action="<?php echo site_url('/Home/addBrg'); ?>">
                      <input type="hidden" name="id" value="<?php echo $p->id; ?>" />
                      <input type="hidden" name="nama" value="<?php echo $p->nama; ?>" />
                      <input type="hidden" name="harga" value="<?php echo $p->harga; ?>" />
                      <input type="hidden" name="gambar" value="<?php echo $p->gambar; ?>" />
                      <input type="hidden" name="qty" value="1" />
                      <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#product_view<?php echo $p->id; ?>"><i class="fa fa-search"></i>View Product</button>
                      <input type="submit" class="btn btn-danger" id="button-cart1" value="Add to Cart">
                
                    </div>
                  </div>
                </div>
                </form>
                <?php }} ?>
              </div>
            </div>
          </div>
        </div>
    </div>
  </div>
</div>
</div>
<!-- Modal -->
<?php
foreach ($product as $p){
?>
<form method="post" action="<?php echo site_url('/Home/addBrg'); ?>">
<div class="modal fade product_view" tabindex="-1" id="product_view<?php echo $p->id; ?>">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <a href="#" data-dismiss="modal" class="class pull-right"><span class="glyphicon glyphicon-remove"></span></a>
                <h3 class="modal-title"><?php echo $p->nama; ?></h3>
            </div>
            <div class="modal-body">
                <div class="row">
                    <div class="col-md-6 product_img">
                        <img src="<?php echo base_url().'img/'.$p->gambar ?>" class="img-responsive">
                    </div>
                    <div class="col-md-6 product_content">
                        <h4>Product Id: <span><?php echo $p->id; ?></span></h4>
                        <p><?php echo $p->keterangan; ?></p>
                        <h3 class="cost"><span></span>Rp. <?php echo number_format($p->harga,0,",","."); ?>

                        <div class="space-ten"></div>
                        <div class="btn-ground">
                        <input type="hidden" name="id" value="<?php echo $p->id; ?>" />
                        <input type="hidden" name="nama" value="<?php echo $p->nama; ?>" />
                        <input type="hidden" name="harga" value="<?php echo $p->harga; ?>" />
                        <input type="hidden" name="gambar" value="<?php echo $p->gambar; ?>" />
                        <input type="hidden" name="qty" value="1" />
                        <button type="submit" class="btn btn-danger my-cart-btn"><span class="glyphicon glyphicon-shopping-cart"></span> Add To Cart</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</form>
<?php } ?>
<!--- Footer -->
<?php include "footer.php" ?>
</body>
</html>