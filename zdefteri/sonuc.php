<?php

include("ayar.php"); 
include("func.php"); 



	$tarihdamgasi = time();
    $tarih = date("d.m.Y H:i:s"); 
	$adsoyad =  guvenlik($_POST['adsoyad']);
	$mesaj = guvenlik($_POST['mesaj']);


	if(($adsoyad!="") and ($mesaj!="")){

		$sql = "INSERT INTO mesajlar SET adisoyadi = ?, yorum = ?, onaydurum = ?, tarihdamgasi = ?, tarih = ? ";

		$kayit = $vt->prepare($sql);
		$kayit->execute(array($adsoyad, $mesaj, '0', $tarihdamgasi, $tarih));

		$hata = $kayit->errorInfo();

		echo $hata[2];
		
			if($kayit->rowCount()){

					header("location:http://odevdeneme.6te.net/ziyaretciDefteri/tamam.php");


			} else {
			
					header("location:http://odevdeneme.6te.net/ziyaretciDefteri/hata.php");
			}
			
	
	} else {
	
		echo "Lütfen form'da boş alan bırakmayınız ..<br>";
		echo "Forma Geri Dönmek için<a href='yaz.php'> Buraya </a> Tıklayınız";
	}

?>