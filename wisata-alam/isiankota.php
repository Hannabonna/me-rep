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
  </header><!--/#home-->

   <?php
   include "koneksi.php";
    $dataPerPage = 5; 
    if(isset($_GET['hal']))
    { 
      $noPage = $_GET['hal'];
    }else{  
      $noPage = 1;
    }
    $offset   = ($noPage - 1) * $dataPerPage;
    
    $kota = $_GET['kota'];
    $sql = mysql_query("select * from t_tempat inner join t_foto  on t_tempat.id_foto = t_foto.id_foto where t_tempat.kota='$kota' limit $offset, $dataPerPage ");
    $hitung_record = mysql_query("SELECT COUNT(*) AS jumData FROM t_tempat");
    $dt          = mysql_fetch_array($hitung_record);
    $jumData       = $dt['jumData'];
    $jumPage  = ceil($jumData/$dataPerPage);
    while ($data=mysql_fetch_array($sql)){
    //$konten=substr($data['deskripsi'],0,300);
    ?>
    <!--<div class="blog-posts">
        <div class="row">
          <div class="col-sm-4 wow fadeInUp" data-wow-duration="1000ms" data-wow-delay="400ms">
           
            <div class="post-thumb">
              <?php echo "<img src=\"".$data['nama_ft1']."\" width=400 height=250><br>";?> 
              <div class="entry-header">
                <h2><?php echo $data['nama_tempat']; ?></h2>
              </div>
              <div class="entry-content">
                <p><?php echo $konten;?></p>
                <h3><a  href="lengkap.php?id=<?php echo $data['id_foto']; ?>">Baca Selengkapnya...</a></h3></br></br>
              </div>
            </div>
        </div>
    </div>-->
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
  ?>

<div class="pagination pagination-centered">
    <ul class="pagination pagination-lg pull-right">
      <?php
      $link = "isiankota.php?kota=$kota&hal=";
      # menampilkan link previous
      if ($noPage > 1) echo  "<li><a href='".$link."".($noPage-1)."'>&larr; Prev</a></li>";
      # memunculkan nomor halaman dan linknya
      for($jml_hal = 1; $jml_hal <= $jumPage; $jml_hal++)
      {
        if($noPage == $jml_hal){
          echo "<li class='disabled'><a href='#' style='cursor'>".$jml_hal."</a></li> ";
        }else{
          echo "<li><a href='".$link."".$jml_hal."'>".$jml_hal."</a></li> ";}
      }
      # menampilkan link next
      if ($noPage < $jumPage) echo "<li><a href='".$link."".($noPage+1)."'>Next &rarr;</a></li>";
      ?>
    </ul>
</div>

 <?php
  include "footer.php";
?>