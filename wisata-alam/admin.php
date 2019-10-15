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

    <!-- Custom Fonts -->
    <link href="assets/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

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
            <!-- Top Menu Items -->
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
            <ul class="nav navbar-right top-nav">
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-user"></i> <?php echo "$row[1]";?> <b class="caret"></b></a>
                    <ul class="dropdown-menu">
                        <li>
                            <a href="logout.php"><i class="fa fa-fw fa-power-off"></i> Log Out</a>
                        </li>
                    </ul>
                </li>
            </ul>
            <!-- Sidebar Menu Items - These collapse to the responsive navigation menu on small screens -->
            <div class="collapse navbar-collapse navbar-ex1-collapse">
                <ul class="nav navbar-nav side-nav">
                    <li>
                        <a href="tables.php"><i class="fa fa-fw fa-table"></i> Data</a>
                    </li>
                    <li class="active">
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
                            Tambah Data Tempat Wisata
                        </h1>
                        <ol class="breadcrumb">
                            <li>
                                <i class="fa fa-dashboard"></i>  <a href="admin.php">Dashboard</a>
                            </li>
                            <li class="active">
                                <i class="fa fa-edit"></i> Tempat Wisata
                            </li>
                        </ol>
                    </div>
                </div>
                <!-- /.row -->

                <?php include('koneksi.php');

                //mencari nilai tertinggi di field id dengan menggunakan perintah SQL MAX
                /*$query="SELECT MAX(id_tempat) AS maxID_tempat FROM t_tempat";
                $query1="SELECT MAX(id_foto) AS maxID_foto FROM t_foto";

                $hasil=mysql_query($query);
                $data=mysql_fetch_array($hasil);
                $idmax=$data['maxID_tempat'];

                $hasil1=mysql_query($query1);
                $data1=mysql_fetch_array($hasil1);
                $idmax1=$data1['maxID_foto'];


                //membuat nomor unik baru, perintah sprintf untuk menjadikan string menjadi 5 digit (00001)
                $nomor=$idmax++;
                $nomortempat="DST-".sprintf("%04s",$nomor); //untuk kode awal dapat disesuaikan sendiri

                $nomor1=$idmax1++;
                $nomorfoto="IMG-".sprintf("%04s",$nomor1);
                */
                
               /* $dataMax = mysql_fetch_assoc(mysql_query(
                "SELECT SUBSTR(MAX('id_tempat'),-5) AS ID  FROM t_tempat")); // ambil data maximal dari id transaksi
                $param='DST-';
                            if($dataMax['ID']=='') { // bila data kosong
                                $ID = $param."00001";
                            }else {
                                $MaksID = $dataMax['ID'];
                                $MaksID++;
                                if($MaksID < 10) $ID = $param."0000".$MaksID; // nilai kurang dari 10
                                else if($MaksID < 100) $ID = $param."000".$MaksID; // nilai kurang dari 100
                                else if($MaksID < 1000) $ID = $param."00".$MaksID; // nilai kurang dari 1000
                                else if($MaksID < 10000) $ID = $param."0".$MaksID; // nilai kurang dari 10000
                                else $ID = $MaksID; // lebih dari 10000
                            }
                */
                $sql=mysql_query("select id_tempat from t_tempat order by id_tempat DESC LIMIT 0,1");
                
                     $data=mysql_fetch_array($sql);
            
                     $kodeawal=substr($data['id_tempat'],4,4)+1;
                
                     if($kodeawal<10){
                
                      $kode='DST-000'.$kodeawal;
                
                     }elseif($kodeawal > 9 && $kodeawal <=99){
                
                      $kode='DST-00'.$kodeawal;
                
                     }else{
                
                      $kode='DST-0'.$kodeawal;
                
                     }
                

                $sql1=mysql_query("select id_foto from t_foto order by id_foto DESC LIMIT 0,1");
                
                     $data1=mysql_fetch_array($sql1);
            
                     $kodeawal1=substr($data1['id_foto'],4,4)+1;
                
                     if($kodeawal1<10){
                
                      $kode1='IMG-000'.$kodeawal1;
                
                     }elseif($kodeawal1 > 9 && $kodeawal1 <=99){
                
                      $kode1='IMG-00'.$kodeawal1;
                
                     }else{
                
                      $kode1='IMG-0'.$kodeawal1;
                
                     }
                
                    ?>
                           
                

                <div class="row">
                    <div class="col-lg-6">

                        <form method="post" enctype="multipart/form-data" action="input.php">

                            <div class="form-group">
                                <label>ID Tempat</label>
                                <input class="form-control" name="id_tempat" value="<?php echo $kode;?>" readonly>
                            </div>

                            <div class="form-group">
                                <label>Nama Tempat</label>
                                <input class="form-control" placeholder="Nama Tempat Wisata" name="nama_tempat">
                            </div>

                            <div class="form-group">
                                <label>Kota</label>
                                <input class="form-control" placeholder="Kota dari Objek Wisata" name="kota">
                            </div> 

                            <div class="form-group">
                                <label>Alamat</label>
                                <textarea class="form-control" placeholder="Alamat dari Objek Wisata" name="alamat" rows="2"></textarea>
                            </div> 

                            <div class="form-group">
                                <label>Deskripsi</label>
                                <textarea class="form-control" placeholder="Deskripsi Objek Wisata" name="deskripsi" rows="3"></textarea>
                            </div>      

                            <div class="form-group">
                                <label>Estimasi Waktu</label>
                                <input class="form-control" placeholder="Waktu tempuh" name="estimasi_wkt">
                            </div>  

                             <div class="form-group">
                                <label>ID Foto</label>
                                <input class="form-control" placeholder="ID Foto" name="id_foto" value="<?php echo $kode1;?>" readonly>
                            </div>  

                            <div class="form-group">
                                <label>Rating</label>
                                <input class="form-control" placeholder="Rating Tempat Wisata" name="rating">
                            </div>  

                            <div class="form-group">
                                <label>File Gambar</label>
                                <table>
                                    <tr>
                                    <td><input type="file" name="file_foto"></td>
                                    <td><input type="file" name="file_foto2"> </td>
                                    <td><input type="file" name="file_foto3"></td>
                                    </tr>
                                </table>
                               
                            </div>

                            <button type="submit" class="btn btn-default">SAVE</button>
                            <button type="reset" class="btn btn-default">RESET</button>

                        </form>

                    </div>                <!-- /.row -->

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

</body>

</html>
