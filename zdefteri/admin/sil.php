<?php  
include("../ayar.php");

$gelenid = $_GET["id"];


	$sql = "DELETE FROM mesajlar WHERE id = ?";
	$yorumsil = $vt->prepare($sql);
	$yorumsil->execute(array($gelenid));

			if($yorumsil->rowCount()){
			
				 header("location:tamam.php");
			
			
			}else {
			
				header("location:hata.php");

			
			}

?>