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
            <li><form action="search.php" method="post" class="navbar-form navbar-right" role="search">
                  <input type="text" id="search" name="search" class="search-form" placeholder="Cari Berdasarkan Nama Tempat Wisata">
                  <input type="submit" name="submit" id="submit" value="Cari" />
                  <!--<div id="hasilpencarian">
                  </div>-->
            </form>
            </li>
          </ul>
        </div>
      </div>
    </div><!--/#main-nav-->
  </header>
<?php
include "koneksi.php";
 $search = $_POST['search'];  
 $sql=mysql_query("select * from t_tempat inner join t_foto  on t_tempat.id_foto = t_foto.id_foto where t_tempat.nama_tempat like '%$search%'");
 $found=mysql_num_rows($sql);

 if($found>0){
    while($data=mysql_fetch_array($sql)){  
    ?>
    <div class="row-fluid">
      <div class="span4">
        <?php echo "<img src=\"".$data['nama_ft1']."\" width=600 height=350><br>";?>
      </div>
      <div class="span8">
          <h2><?php echo $data['nama_tempat']; ?></h2>
          <p style="text-align:justify;"><?=substr($data['deskripsi'],0,500);?></p>
          <p>
            <a href="lengkap.php?id=<?php echo $data['id_foto']; ?>" class="btn btn-primary">Baca Selengkapnya</a> 
          </p>
      </div>      
    </div>
    <hr>
    <?php
    }
 }else{
  echo "<br><br><br><br><br><br><br><br><center><h2>Nama tempat tersebut tidak temukan</h2></br></br></br></br></br></br></br></br></br>";
 }
    include "footer.php";
	?>

