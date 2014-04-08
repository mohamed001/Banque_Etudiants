<?php 
	$base = mysql_connect ('localhost', 'root', '') or die ("erreur de connexion avec le serveur web");
mysql_select_db ('GestionBanque', $base) or die ("erreur de connexion avec la base de donnee mabase");
		
?>
<?php

			
			
			

			$id=$_POST['idct'];
			$numc=$_POST['numc'];
			$dateo=$_POST['dateo'];
			$montt=$_POST['montt'];
			
			
				$insertDate  = date("Y-m-d",strtotime($dateo));//pour convertire en date de sql
			
			$sql="update comptes set 
		COMPTE_NUMERO='".mysql_real_escape_string($numc)."',
		COMPTE_DATE_OUVERTURE='".mysql_real_escape_string($insertDate)."',
		SOLDE_ACTUEL='".mysql_real_escape_string($montt)."'
		
		WHERE COMPTE='".$id."'";
			
		
			
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
	<meta name="keywords" content="Wealth management, Financial planning, Financial services, Financial advisor " /> 
	<meta name="description" content="National Bank Financial  – Wealth Management is the 4th largest investment bank in Canada" />

	<link rel="stylesheet" type="text/css"href="/BanqueTest/CSS/style1.css">
	<link rel="shortcut icon" href="/feuil/themes/splash/favicon.ico" />
	
	<link rel="stylesheet" href="http://code.jquery.com/ui/1.10.3/themes/smoothness/jquery-ui.css" />
  <script src="http://code.jquery.com/jquery-1.9.1.js"></script>
  <script src="http://code.jquery.com/ui/1.10.3/jquery-ui.js"></script>
  <link rel="stylesheet" href="/resources/demos/style.css" />
	
	
    <!-- (c) 2012 Absolunet inc. -->
	
	
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
	<a href="./Gestion_compte.php" class="btn">Retour ... </a>





	
</body>
</html>

