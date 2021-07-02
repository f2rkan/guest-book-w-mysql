
<?php 

include("../ayar.php");

?>

<html>
<head>
<title> Ziyaretçi Defteri </title>
<meta http-equiv="content-type" content="text/html; charset=iso-8859-9" />
<meta http-equiv="content-language" content="TR" />

<style type="text/css">
	  #ust{width: 500px; height: 40px; background: blue; border-radius	: 6px; }
	  body{ margin: 0px; padding: 0px; font-family: Lucida Grande;  }
	  p{ align:center; color:white; font-size: 12px;}
	  #ortatab { }
	  #aa { border: 2px solid white;}
</style>
</head>
<body>
	<center>	<table width="500"  bgcolor="" border="0">
	
		<tr width="500"  height="40"> 
			<td><div id="ust"><table width="500" height="40" align="center"  border="0">
			<td> </td>
				<td><center><p> <b>Ziyaretçi Defteri </b> </p></center>  </td>
			</table>  <div> </td>
		</tr>
		
		<tr width="500"  height="20"> 
			<td> </td>
		</tr>
		
		<tr> 
			<td> 
			
			
			<center><table id="ortatab" width="470"  border="0" >
			
			<?php

			$sql = "SELECT * FROM mesajlar WHERE onaydurum = ? ORDER BY tarihdamgasi ASC";
			$mesajListele = $vt->prepare($sql);
			$mesajListele->execute(array('0'));

			$hata = $mesajListele->errorInfo();

			echo $hata[2];
		//	$sor = mysql_query("select * from mesajlar where onaydurum='0' order by tarihdamgasi asc");
			
				while($row = $mesajListele->fetch(PDO::FETCH_ASSOC)){
				
					$id = $row['id'];
					$adisoyadi = $row['adisoyadi'];
					$yorum = $row['yorum'];
					$tarih = $row['tarih'];

				
		
			
			?>	<div id="aa">
				<tr>
					<td width="100" height="20"> <b>İsim Soyisim</b></td>
					<td width="250" height="20"><?php  echo $adisoyadi; ?></td>
					<td width="170" height="20" align="right" ><font color="#009900"><?php  echo $tarih; ?></font></td>
				</tr>		
			
				<tr>
					<td width="100" height="20"><b> mesaj</b></td>
					<td height="20" colspan="2"><?php  echo $yorum; ?></td>
					
				</tr>	
				
				<tr>
					<td width="100" height="20"><b> Onay</b></td>
					<td height="20" colspan="2"><a href="onay.php?id=<?php echo $id; ?>"><b>Mesajı Onayla ve Yayınla</b></a> - <a href="sil.php?id=<?php echo $id; ?>"><b>Mesajı Sil</b></a></td>
					
				</tr>	
				<tr>
					<td height="20" colspan="3"> <hr></td>
					</div>
					<?php   }   ?>
					</table>
				</tr>	
					
				<tr> 
					<td align="center"><a href="../yaz.php">Ziyaretçi Defterine Mesaj Yaz </a> </td>
					
		
				</tr>
				
			
		
			</table>
			</center>
			
			
			
			</td>
		</tr>
		</table><center>



</body>
</html>