<?php 
	$base = mysql_connect ('localhost', 'root', '') or die ("erreur de connexion avec le serveur web");
mysql_select_db ('GestionBanque', $base) or die ("erreur de connexion avec la base de donnee mabase");
		
?>
<?php

if (isset ($_POST['submit'])){
	
			$CLIENT_NOM=$_POST['nom'];
			$CLIENT_PRENOM=$_POST['prenom'];
			$Mot_de_pass=$_POST['pass'];
			$Telephone=$_POST['tel'];
			$DateNais=$_POST['daten'];
			$CLIENT_ADRESSE=$_POST['adr'];
			$E_mail=$_POST['email'];
			$insertDate  = date("Y-m-d",strtotime($DateNais));//pour convertire en date de sql
				
			
			$sql = "INSERT INTO client VALUES('','".$CLIENT_NOM."','".$CLIENT_PRENOM."','".$Mot_de_pass."','".$Telephone."','".$insertDate."','".$CLIENT_ADRESSE."','".$E_mail."')";
			$result = mysql_query($sql);
			
			
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
	<?php echo "Veuillez cliquer sur suivant pour creer votre compte bancaire online !";?><br/>
	<?php $query=mysql_query("SELECT ID_CLIENT FROM client ORDER BY ID_CLIENT DESC  LIMIT 1 ");
	
	while($row = mysql_fetch_array($query)) { ?>
	<a href="./Form_create_compte.php?id=<?php echo $row['ID_CLIENT'];?> " class="btn">Suivant ... </a>
	<?php } ?>





	
</body>
</html>

