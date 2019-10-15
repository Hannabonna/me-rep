<html>
<head><title>Daftar Pendapatan & Hutang Keluarga (Demo Baca File CSV)</title></head>
<body>
<h1>Daftar Keluarga</h1>
 
<table width="30%" border="1">
 <table border = "1">
		<tr>
			<td> No. Keluarga</td>
			<td> Pendapatan </td>
			<td> Hutang </td>
			<td> P_Rendah </td>
			<td> P_Sedang </td>
			<td> P_Tinggi </td>
			<td> H_Sedikit </td>
			<td> H_Banyak </td>
			<td> H_SangatBanyak </td>
			<td> Inferensi </td>
		</tr>
<?php
if (($handle = fopen("DataTugas2.csv", "r")) !== FALSE) {
	$row = 1;
    while (($data = fgetcsv($handle, 1000, ",")) !== FALSE) {
		echo "<tr>";
		echo "<td>".$data[0]."</td>";
		echo "<td>".$data[1]."</td>";
		echo "<td>".$data[2]."</td>";
		
		$NP_Rendah = Pendapatan_rendah($data[1]);
		$NP_Sedang = Pendapatan_sedang($data[1]);
		$NP_Tinggi = Pendapatan_tinggi($data[1]);
		
		$NH_Sedikit = Hutang_sedikit($data[2]);
		$NH_Banyak = Hutang_banyak($data[2]);
		$NH_SangatBanyak = Hutang_sangatbanyak($data[2]);
		
		$bt_bwh = 0.5 ; $bt_tgh = 1 ; $bt_ats = 1.5 ;
		$bt1 = 10 ; $bt2 = 30 ; $bt3 = 50 ; $bt4 = 70 ;
		$layak = 60 ; $tdk_layak = 40;
		
		echo "<td>".$NP_Rendah."</td>";
		echo "<td>".$NP_Sedang."</td>";
		echo "<td>".$NP_Tinggi."</td>";
		echo "<td>".$NH_Sedikit."</td>";
		echo "<td>".$NH_Banyak."</td>";
		echo "<td>".$NH_SangatBanyak."</td>";
		
		$baca = inference ( $data[1] , $data[2], $bt_bwh, $bt_tgh, $bt_ats, $bt1, $bt2, $bt3, $bt4);
		$pembagi = $layak + $tdk_layak ;
		for($i=0; $i<30 ; $i++){
		echo $baca[$i];
		}
		
		if($pembagi != 0){
				$hitung = (($baca[0] * $layak) + ($baca[1] * $tdk_layak)) / ($layak + $tdk_layak);
				//echo $baca[0];
				if($hitung > 40){
					$akhir = "Layak";
				}else{
					$akhir = "Tidak Layak";
				}	
			}else{
				$akhir = "-";
			}
		echo "<td>".$hitung."</td>";
		echo "<td>".$akhir."</td>";
		echo "</tr>";
		
	//	$arrdata = array($data[0], $data[0], $data[0], $dapat);
 
//	$fp = fopen('mhs.csv', 'a+');
 
//	$tulis = fputcsv($fp, $arrdata);
    } //end while
	
    fclose($handle);
} //end if
 

 echo $keluarga;
 
?>
</table>

<?php 

//Bentuk fungsi keanggotaan segitiga dan trapesium
//$bs = bobot segitiga
//$bt = bobot trapesium

function segitiga ( $x, $a, $b, $c ){
	if ( $x <= $a or $x >= $c ) { $bs = 0; return $bs;}
	else if ( $x > $a and $x < $b ) { $bs = (($x - $a)/($b - $a)); return $bs;}
	else if ( $x > $b and $x <= $c ) { $bs = ((-($x - $c))/($c - $b)); return $bs;}
}

function trapesium ( $x, $a, $b, $c, $d) {
	if ( $x <= $a or $x >= $d){ $bt = 0; return $bt;}
	else if ( $x > $a and $x < $b ) { $bt = (($x - $a)/($b - $a)); return $bt;}
	else if ( $x >= $b and $x <= $c ) { $bt = 1; return $bt;}
	else if ( $x > $c and $x < $d ) { $bt = ((-($x - $d))/($d - $c)); return $bt;}
}

//rules untuk fungsi keanggotaan
//fuzzification untuk membuat fuzzi input
//$dk = derajat keanggotaan

function Pendapatan_rendah ( $pendapatan ){
	if ( $pendapatan <= 0.5) {
		return $dk = 1;
		}
	else if ( $pendapatan > 0.5 and $pendapatan < 1){
		$dk = ((-($pendapatan - 1))/(1-0.5));
		return $dk;
		}
	else if ( $pendapatan >= 1 ) {
		return $dk = 0;
		}
}

function Pendapatan_sedang ( $pendapatan ){
	return $dk = segitiga ( $pendapatan, 0.5, 1, 1.5 );
}

function Pendapatan_tinggi ( $pendapatan ){
	if ( $pendapatan <= 1) {
		return $dk = 0;
		}
	else if ( $pendapatan > 1 and $pendapatan < 1.5){
		$dk = (($pendapatan - 1)/(1.5-1));
		return $dk;
		}
	else if ( $pendapatan >= 1.5 ) {
		return $dk = 1;
		}
}

function Pendapatan($pendapatan, $bt_bwh, $bt_tgh, $bt_ats){
	if ( $pendapatan >= 0 and $pendapatan <= $bt_bwh){ 
		$rendah = 1 ;
		$sedang = 0 ;
	}
	else if ( $pendapatan > $bt_bwh and $pendapatan < $bt_tgh){
		$rendah = ((-($pendapatan - $bt_tgh))/( $bt_tgh - $bt_bwh));
		$sedang = (($pendapatan - $bt_bwh)/( $bt_tgh - $bt_bwh ));
	}
	else if ( $pendapatan = $bt_tgh ){ 
		$rendah = 0 ;
		$sedang = 1 ; 
		$tinggi = 0 ;
	}
	else if ( $pendapatan > $bt_tgh and $pendapatan < $bt_ats ){
		$sedang = ((-($pendapatan - $bt_ats))/( $bt_ats - $bt_tgh ));
		$tinggi = (($pendapatan - $bt_tgh)/( $bt_ats - $bt_tgh ));
	}
	else if ( $pendapatan >= $bt_ats and $pendapatan <= 2){ 
		$sedang = 0 ;
		$tinggi = 1 ; 
	}
	$NK_pendapatan = array("Rendah" => $rendah, "Sedang" => $sedang, "Tinggi" => $tinggi );
	return $NK_pendapatan;
}

function Hutang($hutang, $bt1, $bt2, $bt3, $bt4){
	if ( $hutang >= 0 and $hutang <= $bt1 ) { 
		$sedikit = 1 ; 
		$banyak = 0 ;
	}
	else if ( $hutang > $bt1 and $hutang < $bt2 ){
		$sedikit = ((-( $hutang - $bt2 ))/( $bt2 - $bt1 ));
		$banyak = (( $hutang - $bt1 )/( $bt2 - $bt1 ));
	}
	else if ( $hutang >= $bt2 and $hutang <= $bt3 ){ 
		$sedikit = 0 ;
		$banyak = 1 ; 
		$sangatbanyak = 0 ;
	}
	else if ( $hutang > $bt3 and $hutang < $bt4 ){
		$banyak = ((-( $hutang - $bt4 ))/( $bt4 - $bt3 ));
		$sangatbanyak = (( $hutang - $bt3 )/( $bt4-$bt3 ));
	}
	else if ( $hutang >= $bt4 and $hutang <= 100){ 
		$banyak = 0 ;
		$sangatbanyak = 1 ;
	}
	$NK_hutang = array("Sedikit" => $sedikit, "Banyak" => $banyak, "Sangat Banyak" => $sangatbanyak );
	return $NK_hutang;
}

function Hutang_sedikit( $hutang ){
	if ( $hutang <= 10) {
		return $dk = 1;
		}
	else if ( $hutang > 10 and $hutang < 30){
		$dk = ((-($hutang - 30))/(30-10));
		return $dk;
		}
	else if ( $hutang >= 30 ) {
		return $dk = 0;
		}
}

function Hutang_banyak( $hutang ){
	return $dk = trapesium ( $hutang, 10, 30, 50, 70 );
}

function Hutang_sangatbanyak( $hutang ){
	if ( $hutang <= 50) {
		return $dk = 0;
		}
	else if ( $hutang > 50 and $hutang < 70){
		$dk = (($hutang - 50)/(70-50));
		return $dk;
		}
	else if ( $hutang >= 70 ) {
		return $dk = 1;
		}
}

function nilai_keanggotaan ($NP_Rendah, $NP_Sedang, $NP_Tinggi){
	if ( $NP_Rendah != 0 ) { $NK_Pendapatan = "Rendah($NP_Rendah)";}
	else if ( $NP_Sedang != 0 ) { $NK_Pendapatan = "Sedang($NP_Sedang)";}
	else if ( $NP_Tinggi != 0 ) { $NK_Pendapatan = "Tinggi($NP_Tinggi)";}
	return $NK_Pendapatan;
}

function aturan_fuzzy ( $pendapatan, $hutang ){
	if ( $pendapatan == "Rendah" and $hutang == "Sedikit" ){ $NK = "Tidak Layak" ;}
	else if ( $pendapatan == "Rendah" and $hutang == "Banyak" ){ $NK = "Layak" ;}
	else if ( $pendapatan == "Rendah" and $hutang == "Sangat Banyak" ){ $NK = "Layak" ;}
	else if ( $pendapatan == "Sedang" and $hutang == "Sedikit" ){ $NK = "Tidak Layak" ;}
	else if ( $pendapatan == "Sedang" and $hutang == "Banyak" ){ $NK = "Tidak Layak" ;}
	else if ( $pendapatan == "Sedang" and $hutang == "Sangat Banyak" ){ $NK = "Layak" ;}
	else if ( $pendapatan == "Tinggi" and $hutang == "Sedikit" ){ $NK = "Tidak Layak" ;}
	else if ( $pendapatan == "Tinggi" and $hutang == "Banyak" ){ $NK = "Tidak Layak" ;}
	else if ( $pendapatan == "Tinggi" and $hutang == "Sangat Banyak" ){ $NK = "Tidak Layak" ;}
	return $NK;
}

function perbandingan ( $a, $b ){
	if ( $a > $b ) { $min = $b ; } else { $min = $a ; }
	return $min;
}

function banding_akhir ( $a, $b ){
	$hasil[0] = 0;
	$hasil[1] = 0;
	for ( $i = 1 ; $j <= 4 ; $i++ ){
		for ( $j = 1 ; $j <= 4 ; $j++ ){
			if( $b[$i] == $b[$j] ){
				if ( $a[$i] <= $a[$j] ){ $hasil[0] = $a[$i]; }
				else { $hasil[0] = $a[$j]; }
			}
			else {
				if ( $b[$i] == "Layak" ){ $hasil[0] = $a[$i]; $hasil[1] = $a[$j]; }
				else { $hasil[0] = $a[$j]; $hasil[1] = $a[$i]; }
			}
		}	
	}
	return $hasil;
}

function inference ( $pendapatan, $hutang, $bt_bwh, $bt_tgh, $bt_ats, $bt1, $bt2, $bt3, $bt4 ){
	$Fuz_Pendapatan = Pendapatan ( $pendapatan, $bt_bwh, $bt_tgh, $bt_ats );
	$Fuz_Hutang = Hutang ( $hutang , $bt1, $bt2, $bt3, $bt4 );
	$hutang = array();
	if ( $Fuz_Pendapatan[ "Rendah" ] == 0 ){
		if ( $hutang["Sedikit"] == 0 ){
			$tabel[1] = aturan_fuzzy( "Sedang", "Banyak" );
			$tabel[2] = aturan_fuzzy( "Sedang", "Sangat Banyak" );
			$tabel[3] = aturan_fuzzy( "Tinggi", "Banyak" );
			$tabel[4] = aturan_fuzzy( "Tinggi", "Sangat Banyak" );
			$hasil[1] = perbandingan($Fuz_Pendapatan["Sedang"], $hasilprovokasi["Banyak"]);
			$hasil[2] = perbandingan($Fuz_Pendapatan["Sedang"], $hasilprovokasi["Sangat Banyak"]);
			$hasil[3] = perbandingan($Fuz_Pendapatan["Tinggi"], $hasilprovokasi["Banyak"]);
			$hasil[4] = perbandingan($Fuz_Pendapatan["Tinggi"], $hasilprovokasi["Sangat Banyak"]);
			$hasilAkhir = banding_akhir($hasil, $tabel);
		}else{
			$tabel[1] = aturan_fuzzy( "Sedang", "Banyak" );
			$tabel[2] = aturan_fuzzy( "Sedang", "Sedikit" );
			$tabel[3] = aturan_fuzzy( "Tinggi", "Banyak" );
			$tabel[4] = aturan_fuzzy( "Tinggi", "Sedikit" );
			$hasil[1] = perbandingan($Fuz_Pendapatan["Sedang"], $hasilprovokasi["Banyak"]);
			$hasil[2] = perbandingan($Fuz_Pendapatan["Sedang"], $hasilprovokasi["Sedikit"]);
			$hasil[3] = perbandingan($Fuz_Pendapatan["Tinggi"], $hasilprovokasi["Banyak"]);
			$hasil[4] = perbandingan($Fuz_Pendapatan["Tinggi"], $hasilprovokasi["Sedikit"]);
			$hasilAkhir = banding_akhir($hasil, $tabel);
		}
	}else{
		if( $hutang["Sedikit"] == 0 ){
			$tabel[1] = aturan_fuzzy( "Sedang", "Banyak" );
			$tabel[2] = aturan_fuzzy( "Sedang", "Sangat Banyak" );
			$tabel[3] = aturan_fuzzy( "Rendah", "Banyak" );
			$tabel[4] = aturan_fuzzy( "Rendah", "Sangat Banyak" );
			$hasil[1] = perbandingan($Fuz_Pendapatan["Sedang"], $hasilprovokasi["Banyak"]);
			$hasil[2] = perbandingan($Fuz_Pendapatan["Sedang"], $hasilprovokasi["Sangat Banyak"]);
			$hasil[3] = perbandingan($Fuz_Pendapatan["Rendah"], $hasilprovokasi["Banyak"]);
			$hasil[4] = perbandingan($Fuz_Pendapatan["Rendah"], $hasilprovokasi["Sangat Banyak"]);
			$hasilAkhir = banding_akhir($hasil, $tabel);
		}else{
			$tabel[1] = aturan_fuzzy( "Sedang", "Banyak" );
			$tabel[2] = aturan_fuzzy( "Sedang", "Sedikit" );
			$tabel[3] = aturan_fuzzy( "Rendah", "Banyak" );
			$tabel[4] = aturan_fuzzy( "Rendah", "Sedikit" );
			$hasil[1] = perbandingan($Fuz_Pendapatan["Sedang"], $hasilprovokasi["Banyak"]);
			$hasil[2] = perbandingan($Fuz_Pendapatan["Sedang"], $hasilprovokasi["Sedikit"]);
			$hasil[3] = perbandingan($Fuz_Pendapatan["Rendah"], $hasilprovokasi["Banyak"]);
			$hasil[4] = perbandingan($Fuz_Pendapatan["Rendah"], $hasilprovokasi["Sedikit"]);
			$hasilAkhir = banding_akhir($hasil, $tabel);
		}
	}
	return $hasilAkhir;
}

?>


</body>
</html>