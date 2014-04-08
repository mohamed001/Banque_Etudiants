<?php 
	$base = mysql_connect ('localhost', 'root', '') or die ("erreur de connexion avec le serveur web");
mysql_select_db ('GestionBanque', $base) or die ("erreur de connexion avec la base de donnee mabase");
		
?>
<?php

if (isset ($_POST['submit'])){
	
			$Client_Compte=$_POST['idc'];
			$COMPTE_NUMERO=$_POST['numc'];
			$COMPTE_DATE_OUVERTURE=$_POST['dateo'];
			$SOLDE_ACTUEL=$_POST['montt'];
			$Type=$_POST['type'];
			
			$insertDate  = date("Y-m-d",strtotime($COMPTE_DATE_OUVERTURE));//pour convertire en date de sql
				
			
			$sql = "INSERT INTO comptes VALUES('','".$Client_Compte."','".$COMPTE_NUMERO."','".$insertDate."','0.0','".$SOLDE_ACTUEL."','".$Type."')";
			$result = mysql_query($sql) or die('Erreur SQL !<br>'.$sql.'<br>'.mysql_error());
			
			 
			//header('Location: /BanqueTest/index.php');
			
			//header('Location: ./BanqueTest');      
		
		
		}
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
  <link rel="stylesheet" href="/resources/demos/style.css" />
	
	
  
	
	
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
	<?php echo "Merci vous avez bien effectuer votre inscription !";?><br/>
	<a href="/BanqueTest" class="btn">Retour ... </a>





	
</body>
</html>

