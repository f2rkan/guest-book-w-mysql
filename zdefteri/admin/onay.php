<?php  
include("../ayar.php");

$gelenid = $_GET["id"];


	$sql = "UPDATE mesajlar SET onaydurum = ? WHERE id = ? ORDER BY id DESC Limit 1";

 	$onayla = $vt->prepare($sql);
 	$onayla->execute(array('1', $gelenid));

 	$hata = $onayla->errorInfo();

 	echo $hata[2];


			if($onayla->rowCount()){

			
				 header("location:tamam.php");
			
			
			}else {
			
				header("location: tamam.php");

			
			}

?>