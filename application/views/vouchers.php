<!DOCTYPE html>
<html>
<head>
	<title>Vouchers</title>
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
                <form method="post" action="<?php echo site_url('Home/addBrg'); ?>">
                <div class="col-sm-6">
                  <div class="card mb-30"><a class="card-img-tiles" href="#">
                      <div class="inner">
                        <div class="main-img"><img src="<?php echo base_url(); ?>img/voucher_1.png" style="max-height: 100%; max-width: 100%;padding-left: 22%;"></div>
                      </div></a>
                    <div class="card-body text-center">
                      <input class="card-title name nama1" name="nama" type="text" value="Battlenet" readonly="readonly">
                      <br>
                      <div class="form-group">
                        <select name="harga" class="form-control harga1">
                          <option value="73000">Rp. 73.000</option>
                          <option value="146000">Rp 146.000</option>
                          <option value="292000">Rp 292.000</option>
                        </select>
                      </div>
                      <br>
                      <input type="hidden" name="id" value="32" />
                      <input type="hidden" name="gambar" value="voucher_1.png" />
                      <input type="hidden" name="qty" value="1" />
                      <!-- <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#product_view"><i class="fa fa-search"></i>View Product</button> -->
                      <input type="submit" class="btn btn-danger" id="button-cart1" value="Add to Cart">
                
                    </div>
                  </div>
                </div>
                </form>
                <form method="post" action="<?php echo site_url('Home/addBrg'); ?>">
                <div class="col-sm-6">
                  <div class="card mb-30"><a class="card-img-tiles" href="#">
                      <div class="inner">
                        <div class="main-img"><img src="<?php echo base_url(); ?>img/voucher_2.png" style="max-height: 100%; max-width: 100%;padding-left: 22%;"></div>
                      </div></a>
                    <div class="card-body text-center">
                      <input class="card-title name nama2" name="nama" type="text" value="Lyto & Gravindo" readonly="readonly">
                      <br>
                      <div class="form-group">
                        <select name="harga" class="form-control harga2">
                          <option value="10000">Rp 10.000</option>
                          <option value="20000">Rp 20.000</option>
                          <option value="35000">Rp 35.000</option>
                          <option value="65000">Rp 65.000</option>
                          <option value="175000">Rp 175.000</option>
                          <option value="490000">Rp 490.000</option>
                        </select>
                      </div>
                      <br>
                      <input type="hidden" name="id" value="33" />
                      <input type="hidden" name="gambar" value="voucher_2.png" />
                      <input type="hidden" name="qty" value="1" />
                      <!-- <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#product_view"><i class="fa fa-search"></i>View Product</button> -->
                      <input type="submit" class="btn btn-danger" id="button-cart1" value="Add to Cart">
                
                    </div>
                  </div>
                </div>
                </form>
                <form method="post" action="<?php echo site_url('Home/addBrg'); ?>">
                <div class="col-sm-6">
                  <div class="card mb-30"><a class="card-img-tiles" href="#">
                      <div class="inner">
                        <div class="main-img"><img src="<?php echo base_url(); ?>img/voucher_3.png" alt="Category" style="max-height: 100%; max-width: 100%;padding-left: 22%;"></div>
                      </div></a>
                    <div class="card-body text-center">
                      <input class="card-title name nama3" name="nama" type="text" value="Garena" readonly="readonly">
                      <br>
                      <div class="form-group">
                        <select name="harga" class="form-control harga3">
                          <option value="10000">Rp 10.000</option>
                          <option value="20000">Rp 20.000</option>
                          <option value="48000">Rp 48.000</option>
                          <option value="95000">Rp 95.000</option>
                        </select>
                      </div>
                      <br>
                      <input type="hidden" name="id" value="34" />
                      <input type="hidden" name="gambar" value="voucher_3.png" />
                      <input type="hidden" name="qty" value="1" />
                      <!-- <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#product_view"><i class="fa fa-search"></i>View Product</button> -->
                      <input type="submit" class="btn btn-danger" id="button-cart1" value="Add to Cart">
                    </div>
                  </div>
                </div>
                </form>
                <form method="post" action="<?php echo site_url('Home/addBrg'); ?>">
                <div class="col-sm-6">
                  <div class="card mb-30"><a class="card-img-tiles" href="#">
                      <div class="inner">
                        <div class="main-img"><img src="<?php echo base_url(); ?>img/voucher_4.png" alt="Category" style="max-height: 100%; max-width: 100%;padding-left: 22%;"></div>
                      </div></a>
                    <div class="card-body text-center">
                      <input class="card-title name nama4" name="nama" type="text" value="PSN Money Voucher (ID)" readonly="readonly">
                      <br>
                      <div class="form-group">
                        <select name="harga" class="form-control harga4">
                          <option value="140000">Rp 140.000</option>
                          <option value="255000">Rp 255.000</option>
                          <option value="653000">Rp 653.000</option>
                        </select>
                      </div>
                      <br>
                      <input type="hidden" name="id" value="35" />
                      <input type="hidden" name="gambar" value="voucher_4.png" />
                      <input type="hidden" name="qty" value="1" />
                      <!-- <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#product_view"><i class="fa fa-search"></i>View Product</button> -->
                      <input type="submit" class="btn btn-danger" id="button-cart1" value="Add to Cart">
                    </div>
                  </div>
                </div>
                </form>
                <form method="post" action="<?php echo site_url('Home/addBrg'); ?>">
                <div class="col-sm-6">
                  <div class="card mb-30"><a class="card-img-tiles" href="#">
                      <div class="inner">
                        <div class="main-img"><img src="<?php echo base_url(); ?>img/voucher_5.png" alt="Category" style="max-height: 100%; max-width: 100%;padding-left: 22%;"></div>
                      </div></a>
                    <div class="card-body text-center">
                      <input class="card-title name nama5" name="nama" type="text" value="Megaxus" readonly="readonly">
                      <br>
                      <div class="form-group">
                        <select name="harga" class="form-control harga5">
                          <option value="11500">Rp 11.500</option>
                          <option value="23000">Rp 23.000</option>
                          <option value="57500">Rp 57.500</option>
                          <option value="115000">Rp 115.000</option>
                          <option value="225000">Rp 225.000</option>
                          <option value="550000">Rp 550.000</option>
                        </select>
                      </div>
                      <br>
                      <input type="hidden" name="id" value="36" />
                      <input type="hidden" name="gambar" value="voucher_5.png" />
                      <input type="hidden" name="qty" value="1" />
                      <!-- <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#product_view"><i class="fa fa-search"></i>View Product</button> -->
                      <input type="submit" class="btn btn-danger" id="button-cart1" value="Add to Cart">
                    </div>
                  </div>
                </div>
                </form>
                <form method="post" action="<?php echo site_url('Home/addBrg'); ?>">
                <div class="col-sm-6">
                  <div class="card mb-30"><a class="card-img-tiles" href="#">
                      <div class="inner">
                        <div class="main-img"><img src="<?php echo base_url(); ?>img/voucher_6.png" alt="Category" style="max-height: 100%; max-width: 100%;padding-left: 22%;"></div>
                      </div></a>
                    <div class="card-body text-center">
                      <input class="card-title name nama6" name="nama" type="text" value="Steam Wallet IDR" readonly="readonly">
                      <br>
                      <div class="form-group">
                        <select name="harga" class="form-control harga6">
                          <option value="8000">Rp 8.000</option>
                          <option value="15000">Rp 15.000</option>
                          <option value="54000">Rp 54.000</option>
                          <option value="72000">Rp 72.000</option>
                          <option value="108000">Rp 108.000</option>
                          <option value="144000">Rp 144.000</option>
                          <option value="300000">Rp 300.000</option>
                          <option value="481000">Rp 481.000</option>
                          <option value="721000">Rp 721.000</option>
                        </select>
                      </div>
                      <br>
                      <input type="hidden" name="id" value="37" />
                      <input type="hidden" name="gambar" value="voucher_6.png" />
                      <input type="hidden" name="qty" value="1" />
                      <input type="submit" class="btn btn-danger" id="button-cart1" value="Add to Cart">
                    </div>
                  </div>
                </div>
                </form>
              </div>
            </div>
          </div>
        </div>
    </div>
  </div>
<!--- Footer -->
<?php include "footer.php" ?>
</body>
</html>