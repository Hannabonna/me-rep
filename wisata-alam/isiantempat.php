<?php
  include "header.php";
?>

        <div class="collapse navbar-collapse">
          <ul class="nav navbar-nav navbar-right">                 
            <li class="scroll"><a href="index.html">Beranda</a></li>
            <li class="scroll"><a href="about.php">Tentang Kami</a></li>
            <li class="dropdown">
                  <a href="#" class="dropdown-toggle" data-toggle="dropdown">Daerah Wisata<b class="caret"></b></a>                      
                    <ul class="dropdown-menu mega-menu active">
                        <li class="mega-menu-column">
                          <ul>                            
                              <li><a href="isiankota.php?kota=Purwakarta">Purwakarta</a></li>
                              <li><a href="isiankota.php?kota=Sukabumi">Sukabumi</a></li>
                              <li><a href="isiankota.php?kota=Cimahi">Cimahi</a></li>
                              <li><a href="isiankota.php?kota=Bandung">Bandung</a></li>
                              <li><a href="isiankota.php?kota=Cianjur">Cianjur</a></li>
                              <li><a href="isiankota.php?kota=Indramayu">Indramayu</a></li>
                              <li><a href="isiankota.php?kota=Bekasi">Bekasi</a></li>

                          </ul>
                        </li> 
                        <li class="mega-menu-column">
                          <ul>                            
                              <li><a href="isiankota.php?kota=Sumedang">Sumedang</a></li>
                              <li><a href="isiankota.php?kota=Garut">Garut</a></li>
                              <li><a href="isiankota.php?kota=Tasikmalaya">Tasikmalaya</a></li>
                              <li><a href="isiankota.php?kota=Ciamis">Ciamis</a></li>
                              <li><a href="isiankota.php?kota=Majalengka">Majalengka</a></li>
                              <li><a href="isiankota.php?kota=Banjar">Banjar</a></li>
                          </ul>
                        </li> 
                        <li class="mega-menu-column">
                          <ul>                            
                              <li><a href="isiankota.php?kota=Depok">Depok</a></li>
                              <li><a href="isiankota.php?kota=Karawang">Karawang</a></li>
                              <li><a href="isiankota.php?kota=Subang">Subang</a></li>
                              <li><a href="isiankota.php?kota=Cirebon">Cirebon</a></li>
                              <li><a href="isiankota.php?kota=Kuningan">Kuningan</a></li>
                              <li><a href="isiankota.php?kota=Bogor">Bogor</a></li>
                          </ul>
                        </li> 
                    </ul>
              </li>                
            <li class="scroll"><a href="profil.php">Profil</a></li>
            <li><form class="navbar-form navbar-right" role="search">
                  <input type="text" class="search-form" autocomplete="off" placeholder="Ketik di sini untuk mencari">
                 <i class="fa fa-search"></i>
            </form></li>
          </ul>
        </div>
      </div>
    </div><!--/#main-nav-->
  </header><!--/#home-->


  
  <?php
  include "koneksi.php";
  $nama_tempat = $_GET['nama_tempat'];
  $sql = mysql_query("select * from t_tempat inner join t_foto  on t_tempat.id_foto = t_foto.id_foto where t_tempat.nama_tempat='$nama_tempat'");
  $data=mysql_fetch_array($sql);
        
  ?>
    <!--<div class="blog-posts">
        <h2><?php echo $data['nama_tempat']; ?></h2>
          <table>
            <tr>
              <td>Alamat</td>
              <td>
                  <div class="form-group">
                    <?php echo $data['alamat']; ?>
                  </div>
              </td> 
            </tr>
            <tr>
                <td>
                  <?php
                  echo "<img src=\"".$data['nama_ft1']."\" width=400 height=250><br>";
                  ?>
                </td>
                <td>
                  <?php
                  echo "<img src=\"".$data['nama_ft2']."\" width=400 height=250><br>";
                  ?>
                </td>
                <td>
                  <?php
                  echo "<img src=\"".$data['nama_ft3']."\" width=400 height=250><br>";
                  ?>
                </td>
            </tr>    

          </table>
      <!--<a  href="lengkap.php?id=<?php echo $r['ID']; ?>">
      Baca Selengkapnya...</a></p><br> --> 
  <!--<div class="paragraphs">
  <div class="row">
    <div class="span12 well">-->
    </br>
    </br>
       <center>
        <table width="1200px">
         <tr>
            <td  rowspan="4"><?php echo "<img src=\"".$data['nama_ft1']."\" width=500 height=350><br>";?>
            </td>
          </tr>
          <tr>
            <td width="200px"><h3>Nama Tempat</h3></td>
            <td>
              <h3><?php echo $data['nama_tempat']; ?></h3>
            </td>
          </tr>
          <tr>
            <td><h3>Alamat</h3></td>
            <td><h3><?php echo $data['alamat']; ?></h3></td>
          </tr>
          <tr>
            <td><h3>Estimasi Waktu</h3></td>
            <td><h3><?php echo $data['estimasi_wkt']; ?></h3></td>
          </tr>
        </table>
      <!--<img class="img-polaroid" src="<?=$hasil_data['gambar'];?>" style="width:250px; height: 200px; float:left; margin-right:10px;"/>-->
      <!--<div class="content-heading">-->
          </br>
          <table width="1500px">
          <tr>
            <b>DESKRIPSI TEMPAT</b>
          </tr>
          <tr><td> <p style="text-align:justify;"><?php echo $data['deskripsi']; ?></p></td></tr>
        </table>
        
        <table>
          <tr>
            <td width="500px">
              <?php
                  echo "<img src=\"".$data['nama_ft1']."\" width=400 height=250><br>";
              ?>
            </td>
             <td width="500px">
              <?php
                  echo "<img src=\"".$data['nama_ft2']."\" width=400 height=250><br>";
              ?>
            </td>
             <td>
              <?php
                  echo "<img src=\"".$data['nama_ft3']."\" width=400 height=250><br>";
              ?>
            </td>
          </tr>
        </table>
       </center>
       </br>
       </br>
      <!--</div>-->
      <!--<p><a href="#" class="btn btn-inverse">Diposkan pada <?=$hasil_data['tanggal'];?></a> </p>-->
    <!--</div>
  </div>
</div>-->
<?php
  include "footer.php";
?>