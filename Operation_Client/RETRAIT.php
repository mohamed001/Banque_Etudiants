<?php
// On prolonge la session
session_start();
//echo $_SESSION['ADMIN'];
if(!isset($_SESSION['adm'])){
 header("Location:/banquetest");
 }
?>
<?php

$base = mysql_connect ('localhost', 'root', '') or die ("erreur de connexion avec le serveur web");
mysql_select_db ('GestionBanque', $base) or die ("erreur de connexion avec la base de donnee mabase");

?>



<?php 

$idcompt=$_POST['idcompt'];
$requette = "select SOLDE_ACTUEL from comptes where COMPTE='".$idcompt."'";  
	//$data = mysql_query($requette);  
	$data = mysql_query($requette) or die('Erreur SQL !<br>'.$requette.'<br>'.mysql_error());
	 while($row = mysql_fetch_assoc($data))  
                    {  $SA=$row['SOLDE_ACTUEL'];}

	$idc=$_POST['idc'];
	$montt=$_POST['monttretr'];
	$SMODIF=$SA-$montt;

	$sql="update comptes set 
		
		ANCIEN_SOLDE='".mysql_real_escape_string($montt)."',
		SOLDE_ACTUEL='".mysql_real_escape_string($SMODIF)."'
		
		WHERE COMPTE='".$idcompt."'";
			$data = mysql_query($sql) or die('Erreur SQL !<br>'.$sql.'<br>'.mysql_error());
		
		//header('Location: ./consultation.php');
		
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
<?php echo "OPERATION EFFECTUE AVEC SUCCES !";?><br/>
	
	<a href="./consultation.php?idc=<?php echo $idc; ?>" class="btn">RETOUR ... </a>





	
</body>
</html>