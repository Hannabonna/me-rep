<?php
  include "header.php";
?>
<div class="collapse navbar-collapse">
          <ul class="nav navbar-nav navbar-right">                 
            <li class="scroll"><a href="index.html">Beranda</a></li>


            <?php
                    include "koneksi.php";
                    
                    $sql = mysql_query("select * from t_tempat inner join t_foto  on t_tempat.id_foto = t_foto.id_foto");
                    $hasil = mysql_fetch_array($sql);
            ?>


            <li class="scroll active"><a href="about.php">Tentang Kami</a></li>
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
  </header><!--/#home-->


  <section id="about-us" class="parallax">
    <div class="container">
      <div class="row">
        <div class="col-sm-6">
          <div class="about-info wow fadeInUp" data-wow-duration="1000ms" data-wow-delay="300ms">
            <h2>Tentang Kami</h2>
            <p>Jawa Barat merupakan sebuah provinsi yang beribukota di Kota Bandung memiliki banyak sekali kota dengan potensi wisata yang menarik dan indah. Mulai dari wisata alam, wisata sejarah, wisata kuliner, wisata pantai, agrowisata dan lain sebagainya masih banyak lagi.</p>
            <p>Untuk kondisi alam sendiri Jawa Barat berpotensi menjadi destinasi wisata alam yang akan memanjakan mata dan menenangkan jiwa bagi para pengunjung.</p>
            <p>Website ini menyediakan informasi bagi siapapun yang tertarik mencari tahu seputar destinasi wisata alam di Jawa Barat, yang terdiri dari lokasi, akses, deskripsi tempat dan foto. Untuk memudahkan pengunjung dalam mendapat informasi, website ini menyediakan kolom <i>search</i> baik berdasarkan nama tempat atau nama lokasi.</p>
          </div>
        </div>
        <div class="col-sm-6">
          <img class="img-responsive" src="images/gedungsate.jpg" alt=""></a><br>
          <img class="img-responsive" src="images/prov_jabar.png" alt=""></a>
        </div>
      </div>
    </div>
  </section><!--/#about-us-->

 
<?php
  include "footer.php";
?>