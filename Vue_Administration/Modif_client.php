<?php 
	$base = mysql_connect ('localhost', 'root', '') or die ("erreur de connexion avec le serveur web");
mysql_select_db ('GestionBanque', $base) or die ("erreur de connexion avec la base de donnee mabase");
		
?>
<?php

			
			
			

			$id=$_POST['idc'];
			$CLIENT_NOM=$_POST['nom'];
			$CLIENT_PRENOM=$_POST['prenom'];
			$Mot_de_pass=$_POST['pass'];
			$Telephone=$_POST['tel'];
			$DateNais=$_POST['daten'];
			$CLIENT_ADRESSE=$_POST['adr'];
			$E_mail=$_POST['email'];
			
				$insertDate  = date("Y-m-d",strtotime($DateNais));//pour convertire en date de sql
			
			$sql="update client set 
		CLIENT_NOM='".mysql_real_escape_string($CLIENT_NOM)."',
		CLIENT_PRENOM='".mysql_real_escape_string($CLIENT_PRENOM)."',
		Mot_de_pass='".mysql_real_escape_string($Mot_de_pass)."',
		Telephone='".mysql_real_escape_string($Telephone)."',
		DateNais='".$insertDate."',
		CLIENT_ADRESSE='".mysql_real_escape_string($CLIENT_ADRESSE)."',
		E_mail='".mysql_real_escape_string($E_mail)."'
		WHERE ID_CLIENT='".$id."'";
			
		
			
			$result = mysql_query($sql) or die('Erreur SQL !<br>'.$sql.'<br>'.mysql_error());
			
			
			
			
			
			//header('Location: /BanqueTest/index.php');
			
			//header('Location: ./BanqueTest');      
		
		
		
			// $req = 'INSERT INTO client  VALUES
			 // ('', "'.$CLIENT_NOM.'", "'.$CLIENT_PRENOM.'", "'.$Mot_de_pass.'", "'.$Telephone.'", "'.$DateNais.'", "'.$CLIENT_ADRESSE.'", "'.$E_mail.'")';
			// $result = mysql_query($req);}
		//echo "message enregistré avec succé - Merci-Bravo";
		
		
			
			
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
		<div class="Fixed">
			<div>
				 
				<a href="http://wwwensa.univ-oujda.ac.ma/">ENSAO</a> <span>|</span> <a href="http://webserver1.ump.ma/">UMP Oujda</a>
				
			</div>
			
		</div>
	</div>
	<div id="Content">
	<?php echo "Merci vous avez bien effectuer votre modification !";?><br/>
	<a href="./Gestion_client.php" class="btn">Retour ... </a>





	
</body>
</html>

