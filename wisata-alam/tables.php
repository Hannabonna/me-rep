<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Halaman Admin</title>

    <!-- Bootstrap Core CSS -->
    <link href="assets/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="assets/css/sb-admin.css" rel="stylesheet">
    <link rel="stylesheet" href="css/dataTables.bootstrap.css">

    <!-- Custom Fonts -->
    <link href="assets/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <!--<link href="tabel/css/bootstrap.css" rel="stylesheet">
    <link href="tabel/css/bootstrap-tabel-responsive.css" rel="stylesheet">
    <link href="tabel/css/datepicker.css" rel="stylesheet">    
    <link href="tabel/css/DT_bootstrap.css" rel="stylesheet">
    <script src="tabel/js/bootstrap-datepicker.js"></script>
    <script src="tabel/js/jquery.js"></script> 
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
    -->
</head>

<body>

    <div id="wrapper">

        <!-- Navigation -->
        <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="index.html">Admin</a>
            </div>

             <?php
            session_start();
            if(!isset($_SESSION['username'])){
                header('location:login.php');
            }
            else{
                $username = $_SESSION['username'];
            }
            require_once("koneksi.php");
            $result=mysql_query("select * from t_admin where username='$username'");
            $row=mysql_fetch_row($result);
            ?>
            <!-- Top Menu Items -->
            <ul class="nav navbar-right top-nav">
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-user"></i> <?php echo "$row[1]";?>  <b class="caret"></b></a>
                    <ul class="dropdown-menu">
                        <li>
                            <a href="#"><i class="fa fa-fw fa-power-off"></i> Log Out</a>
                        </li>
                    </ul>
                </li>
            </ul>
            <!-- Sidebar Menu Items - These collapse to the responsive navigation menu on small screens -->
            <div class="collapse navbar-collapse navbar-ex1-collapse">
                <ul class="nav navbar-nav side-nav">
                    <li class="active">
                        <a href="tables.php"><i class="fa fa-fw fa-table"></i> Tables</a>
                    </li>
                    <li>
                        <a href="admin.php"><i class="fa fa-fw fa-edit"></i> Tempat Wisata</a>
                    </li>
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </nav>

        <div id="page-wrapper">

            <div class="container-fluid">

                <!-- Page Heading -->
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">
                            Tables
                        </h1>
                        <ol class="breadcrumb">
                            <li>
                                <i class="fa fa-dashboard"></i>  <a href="index.html">Dashboard</a>
                            </li>
                            <li class="active">
                                <i class="fa fa-table"></i> Tables
                            </li>
                        </ol>
                    </div>
                </div>
                <!-- /.row -->
                <div class="row">
                    <div class="col-lg-6">
                       <div class="container" style="margin-top: 10px">
                    <legend>Daftar Tempat Wisata Alam Di Jawa Barat</legend>
                    <table cellpadding="0" cellspacing="0" border="0" class="table table-striped table-bordered" id="example1" width="1410px">
                        <thead>                                                                                                                                
                            <tr>                                                                                                                                  
                                <th>No</th>
                                            <th>Id Tempat</th>
                                            <th width="100px">Nama Tempat</th>                                               
                                            <th>Kota</th>
                                            <th width="60px">Alamat</th>
                                            <th>Deskripsi</th>
                                            <th>Estimasi Waktu</th>
                                            <th>Id foto</th>
                                            <th>Rating</th>
                                            <th width="100px">Action</th>
                            </tr>                                                                                                                                 
                        </thead>                                                                                                                                
                        <tbody>
                        <?php
                                        include "koneksi.php";
                                        $sql="select * from t_tempat";
                                        $hasil = mysql_query($sql);
                                        $i=0;
                                        while ($data=mysql_fetch_array($hasil)) 
                                        {
                                            $i++;
                                        ?>
                                    
                                        <tr>
                                            <td><?php echo $i;?></td>
                                            <td><?php echo $data['id_tempat'];?></td>
                                            <td><?php echo $data['nama_tempat'];?></td>
                                            <td><?php echo $data['kota'];?></td>
                                            <td><?php echo $data['alamat'];?></td>
                                            <td><?php echo $data['deskripsi'];?></td>
                                            <td><?php echo $data['estimasi_wkt'];?></td>
                                            <td><?php echo $data['id_foto'];?></td>
                                            <td><?php echo $data['rating'];?></td>
                                            <td>
                                                <a href="hapus.php?id_tempat=<?php echo $data['id_tempat'] ?>" data-confirm="Apakah anda yakin akan menghapus data ini?" class="btn btn-danger btn-mini deleteBtn">
                                                <i class="icon-trash icon-white icon-remove"></i>Hapus</a>                        
                                            </td>
                                        </tr>
                                        <?php
                                        }
                                    ?>
                        </tbody>
                    </table>

                    </div>
                </div>
            <!-- /.row -->
        </div>

            </div>
            <!-- /.container-fluid -->

        </div>
        <!-- /#page-wrapper -->

    </div>
    <!-- /#wrapper -->

    <!-- jQuery -->
    <script src="assets/js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="assets/js/bootstrap.min.js"></script>
   <!-- <script src="tabel/js/jquery.dataTables.js"></script>
    <script src="tabel/js/DT_bootstrap-tabel.js"></script>    
    <script src="tabel/js/bootstrap-datepicker.js"></script>      
    <script src="tabel/js/bootstrap-transition.js"></script>
    <script src="tabel/js/bootstrap-modal.js"></script>    
    <script src="tabel/js/bootstrap-dropdown.js"></script>
    -->
    <script src="js/jquery.dataTables.min.js"></script>
        <script src="js/dataTables.bootstrap.js"></script> 
        <script type="text/javascript">
            $(function() {
                $('#example1').dataTable();
            });
        </script>
</body>

</html>
