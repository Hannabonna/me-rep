<?php 
	error_reporting(0);
	mysql_connect("localhost","root","");
	mysql_select_db("db_tour2");
	
	$query = "select * from paketwisata";
	$hasil = mysql_query($query);
	
	$response = array();
	
	if (mysql_num_rows($hasil) > 0) {
	$response['paketwisata'] = array();
	while ($data = mysql_fetch_array($hasil))
	{
		$h=array();
		$h['kodepaket']=$data['kodepaket'];
		$h['namapaket'] = $data['namapaket'];
		$h['tujuan']=$data['tujuan'];
		$h['lama'] = $data['lama'];
		$h['hari'] = $data['hari'];
		$h['fasilitas'] = $data['fasilitas'];
		$h['penginapan']=$data['penginapan'];
		$h['kapasitas'] = $data['kapasitas'];
		$h['harga'] = $data['harga'];
		$h['photo'] = $data['photo'];
		$h['keterangan']=$data['keterangan'];
				
		array_push($response["paketwisata"], $h);
		}
		$response["success"] = "1";
			echo json_encode($response);
	}
	else {
		$response["success"] = 0;
		$response["message"] = "Tidak ada data";
		
		echo json_encode($response);
	}	
?>