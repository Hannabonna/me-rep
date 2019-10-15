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
            <li class="scroll active"><a href="#portfolio">Profil</a></li>
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
            <h2>Profil Dinas Pariwisata dan Kebudayaan Provinsi Jawa Barat</h2>
            <p>Alamat</p>
            <p>Jl. RE Martadinata No.209, Bandung Wetan, Kota Bandung, Jawa Barat 40114, Indonesia</p>
            <p>Telp : +62 22 7273209, 7103605</p>
            <p>Faksimill : +62 22 7271385</p>
            <p>E-mail : disparbud@disparbud.jabarprov.go.id<br>
pariwisatakebudayaanjabar@yahoo.co.id - See more at: <a href="http://www.disparbud.jabarprov.go.id/applications/frontend/index.php?mod=contacts#sthash.bQxsDQPO.dpuf" target="_blank">Dinas Pariwisata Jawa Barat</a></p>
          </div>
        </div>
        <div class="col-sm-6">
          <center><img class="img-responsive" src="images/disbudpar.jpg" alt="" height="250" width="300"></a>
          <br>
          <img class="img-responsive" src="images/prov_jabar.png" alt=""></a>
          </center>
          
        </div>
      </div>
    </div>
  </section><!--/#about-us-->
 
 <?php
  include "footer.php";
?>