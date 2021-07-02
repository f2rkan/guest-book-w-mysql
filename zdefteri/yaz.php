
<?php 

include("ayar.php");

?>
<html>
<meta charset="UTF-8">
<head>
<title> Ziyaret&#231;i Defteri </title>
<meta http-equiv="content-type" content="text/html; charset=iso-8859-9" />
<meta http-equiv="content-language" content="TR" />

<style type="text/css">
	  #ust{width: 500px; height: 40px; background: blue; border-radius	: 6px; }
	  body{ margin: 0px; padding: 0px; font-family: Lucida Grande;  }
	  p{ align:center; color:white; font-size: 12px;}
	  #ortatab { }
	  
</style>
</head>
<body>
	<center>	<table width="500"  bgcolor="" border="0">
	
		<tr width="500"  height="40"> 
			<td><div id="ust"><table width="500" height="40" align="center"  border="0">
			<td> </td>
				<td><center><p> <b>Ziyaret&#231;i Defteri </b> </p></center>  </td>
			</table>  <div> </td>
		</tr>
		
		<tr width="500"  height="20"> 
			<td> </td>
		</tr>

			
		<tr>
			<td width="150" height="20"></td>
					
					
		</tr>	
				
		<tr>
			<td height="20" colspan="3"><form action="sonuc.php" method="post"> <center><table id="d" width="470"  border="0">
			<tr>
				<td  width="150" height="20"><b>Adınız  Soyadınız</b></td>
				<td  width="30" height="20"><b>:</b></td>
				<td width="290" height="20"><input type="text" name="adsoyad"></td>
								
					</tr>
					<tr >
						<td  width="150" height="20"> <b> Mesajınız </b></td>
						<td width="30"  height="20"><b>:</b></td>
						<td  width="290" height="20"><textarea name="mesaj" rows="5" cols="30"> </textarea></td>
					</tr>
					<tr>
						<td  width="150" height="20"></td>
						<td width="30"  height="20"></td>
						<td width="290" height="20"><input type="submit"value="G&#246;nder"></td>
					</tr>	
							
					</table> </form></center></td>
					
				</tr>
				
			</center>
			
			
			
			</td>
		</tr>
		</table><center>



</body>
</html>