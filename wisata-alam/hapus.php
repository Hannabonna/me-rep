<?php
include ("koneksi.php");
if(isset($_GET['id_tempat']))
  {
  	 $id_tempat=$_GET['id_tempat'];    	   	 
  }  
$sql= "delete from t_tempat WHERE id_tempat='$id_tempat'";		   	 		   		
if( mysql_query($sql))
{            
    header('location:tables.php'); 
} 
      	        	  
?>