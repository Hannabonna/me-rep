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
  <!-- Header -->
  <?php include "header.php" ?>
<!-- <<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<Context>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>> -->
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="well well-sm">
            <?php foreach ($list as $d) {
            if ($d['username'] == $this->session->userdata('udahlogin')) {
            ?>
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="name">
                                Full Name</label>
                            <input type="text" class="form-control" name="nama" id="name" placeholder="Input Name" value="<?php echo $d['nama'] ?>" disabled="" />
                        </div>
                        <div class="form-group">
                            <label for="name">
                                Email Address</label>
                            <input type="text" class="form-control" name="email" id="name" placeholder="Input Email" value="<?php echo $d['email'] ?>" disabled="" />
                        </div>
                        <div class="form-group">
                            <label for="name">Gender</label>
                            <input type="text" class="form-control" name="jk" id="jk" value="<?php echo $d['jk'] ?>" disabled="">
                        </div>
                    </div>
                        <div class="col-md-6">
                        <div class="form-group">
                            <label for="name">
                                Home Address</label>
                            <input name="address" id="message" class="form-control" rows="9" cols="25" required="required"
                                placeholder="Input Address" value="<?php echo $d['address'] ?>" disabled="" />
                        </div>
                        <input type="button" data-toggle="modal" data-target="#profil" class="btn btn-primary pull-right" id="btnContactUs" value="Update Profile">
                        </div>
                    </div>
                </div>
                
            <?php }} ?>
            </div>
        </div>
    </div>
</div>
<!-- Modal -->
    <div class="modal fade" id="profil">
              <div class="modal-dialog modal-dialog-centered">
                <div class="modal-content">
                
                  <!-- Modal Header -->
                  <div class="modal-header">
                    <h4 class="modal-title">Update Profile</h4>
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                  </div>
                  
                  <!-- Modal body -->
                   <form method="post" action="<?php echo site_url('Home/update_profil/'.$user['username']); ?>"> 
                    <div class="modal-body">
                      <table>
                        <tr>
                          <div class="form-group">
                            <td height="50px" width="30%">Full Name</td>
                            <td><input type="text" class="form-control" placeholder="" style="width: 200%" name="nama" value="<?php echo $user['nama'];?>" required></td>
                          </div>
                        </tr>
                        <tr>
                          <div class="form-group">
                            <td height="50px">Email</td>
                            <td><input type="email" class="form-control" placeholder="" style="width: 200%" name="email" value="<?php echo $user['email'];?>" required>
                            </td>
                          </div>
                        </tr>
                        <tr>
                          <div class="form-group">
                            <td height="50px">Gender</td>
                            <td>
                              <select class="form-control" name="jk">
                                <option><?php echo $user['jk'];?></option>
                                <option value="Laki-laki">Laki-laki</option>
                                <option value="Perempuan">Perempuan</option>
                              </select>
                            </td>
                          </div>
                        </tr>
                         <tr>
                          <div class="form-group">
                            <td height="50px">Address</td>
                            <td><input type="text" class="form-control" placeholder="" style="width: 200%" name="address" value="<?php echo $user['address'];?>" required></td>
                          </div>
                        </tr>
                      </table> 
                    </div>
                  
                    <!-- Modal footer -->
                    <div class="modal-footer" style="margin-left: 60%">
                      <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                      <input class="btn btn-success" type="submit" value="Simpan">
                    </div>
                  </form>
                    
                </div>
              </div>
            </div>
<!--- <<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<Footer>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>> -->
<?php include "footer.php" ?>
</body>
</html>