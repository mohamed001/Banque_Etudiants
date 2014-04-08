<?php
// On prolonge la session
session_start();
//echo $_SESSION['ADMIN'];
if(!isset($_SESSION['ADMIN'])){
 header("Location:/banquetest");
 }
?>



<?php

$base = mysql_connect ('localhost', 'root', '') or die ("erreur de connexion avec le serveur web");
mysql_select_db ('GestionBanque', $base) or die ("erreur de connexion avec la base de donnee mabase");

?>


<!doctype html>
<html id="fr-CA" lang="fr" data-kafe-tmpl="Content" data-kafe-page="SpecialContent">
<head>
	<meta charset="utf-8" />
	<title>Gestion Bancaire ENSAO</title>
	
	<link rel="stylesheet" type="text/css"href="/BanqueTest/CSS/style1.css">

		
	<link rel="stylesheet" href="http://code.jquery.com/ui/1.10.3/themes/smoothness/jquery-ui.css" />
  <script src="http://code.jquery.com/jquery-1.9.1.js"></script>
  <script src="http://code.jquery.com/ui/1.10.3/jquery-ui.js"></script>
  

 
 

	
	
</head>
<body class="Content">

	<div id="Header">
		<?php  if(isset($_SESSION['ADMIN'])){ ?>
	
		<a href="/BanqueTest/vue_administration/decon.php" class="btn" >Deconnexion</a>
		<?php }else { ?>
		<a href="/BanqueTest/vue_administration/Cnx_admin.html" class="btn" >Connexion</a>
		<?php }?>
		<div class="Fixed">
			<div>
				<a href="http://wwwensa.univ-oujda.ac.ma/">ENSAO</a> <span>|</span> <a href="http://webserver1.ump.ma/">UMP Oujda</a>
			</div>
		</div>
	</div>
	<div id="Content">
<table border=1 cellspacing=0 > 
	<th>Id</th><th>Nom</th><th>Prenom</th><th>Telephone</th><th>Date de naissance</th><th>Adresse</th><th>E-mail</th><th>action</th>
	<?php 
	$requette = "select ID_CLIENT,CLIENT_NOM,CLIENT_PRENOM,Telephone,DateNais,CLIENT_ADRESSE,E_mail from client";  
	$valchamp = mysql_query($requette);  
 
	 while($row = mysql_fetch_array($valchamp)) { ?>
	<tr><td><?php echo $row['ID_CLIENT'];?></td><td><?php echo $row['CLIENT_NOM'];?></td><td><?php echo $row['CLIENT_PRENOM'];?>
		</td><td><?php echo $row['Telephone'];?></td><td><?php echo $row['DateNais'];?></td><td><?php echo $row['CLIENT_ADRESSE'];?></td><td><?php echo $row['E_mail'];?></td><td><a href="Form_Modification.php?idc=<?php echo $row['ID_CLIENT'];?>">Modifier</a></td></tr>
	<?php }?>
</table>
</div>



<div id="Footer">
		<br class="Clearer"/>
		<div class="region-footer">
			<p class="copyright">&copy; BANQUE NATIONALE DE ENSAO et FINANCIÈRE BANQUE NATIONALE. Tous droits réservés 2013. Tous droits réservés 2013.Réalisé par : </br>
			- MOULKAF IMAD </br>
			- HAMIDA HALIM </br>
			- LOUIZI HAMZA </br>
			- ZOUGA MOHAMED</p>
			</a>
		</div>
	</div>


	
</body>
</html>