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
<!doctype html>
<html id="fr-CA" lang="fr" data-kafe-tmpl="Content" data-kafe-page="SpecialContent">
<head>
	<meta charset="utf-8" />
	<title>Gestion Bancaire ENSAO</title>
	
	<link rel="stylesheet" type="text/css"href="/BanqueTest/CSS/style1.css">
	
</head>
<body class="Content">

	<div id="Header">
	<?php  if(isset($_SESSION['adm'])){ ?>
	
		<a href="/BanqueTest/Operation_client/decon_client.php" class="btn" >Deconnexion</a>
		<?php }else { ?>
		<a href="/BanqueTest/Operation_client/Conn_client.html" class="btn" >Connexion</a>
		<?php }?>
		<div class="Fixed">
			<div>
				<a href="http://wwwensa.univ-oujda.ac.ma/">ENSAO</a> <span>|</span> <a href="http://webserver1.ump.ma/">UMP Oujda</a>
			</div>
		</div>
	</div>
	
	<?php
	$idc=$_GET['idcc'];
	$sql2="select  CLIENT_NOM from client where ID_CLIENT='".$idc."' ";
$result=mysql_query($sql2)or die('Erreur SQL !<br>'.$sql2.'<br>'.mysql_error());
 while($row = mysql_fetch_assoc($result))  
                    { 
	
	?>


	<div id="Content">
	<h1>
		Bonjour Mr.<?php echo $row['CLIENT_NOM']; ?>
	</h1>
		<div class="splash-block">
			<img src="/BanqueTest/image/logo_gauche1.png" alt="" /><br />
			<img class="hr" src="/BanqueTest/image/Trait2.png" alt="" />
			<h2 class="block-title">
				 il est important de consulter régulièrement le solde de votre compte à vue afin de toujours disposer des liquidités nécessaires et éviter de passer dans le rouge. 
			</h2>
			<p style="margin-top:42px;">La banque ENSAO vous assiste dans la gestion de vos opérations bancaires quotidiennes par Internet. Où que vous soyez, le solde de votre compte est disponible 24h/7.<br />&nbsp;</p>
			
			<img class="hr" src="/BanqueTest/image/trait.png" alt="" />
			<p class="texte-petit">
				La consultation de votre solde bancaire ne vous coûte rien <strong>c'est gratuit !</strong>
			</p>
			<a href="./Consultation.php?idc=<?php echo $idc; ?>" class="btn lock"> Consulter </a>
		</div>
		
		<div class="splash-block">
			<img src="/BanqueTest/image/logo_gauche.png" alt="" /><br />
			<img class="hr" src="/BanqueTest/image/Trait2.png" alt="" />
			<h2 class="block-title">
				Si vous voullez déposer une somme d'argent dans votre compte 
				
			</h2>
			
			<a href="./form_depot.php?idc=<?php echo $idc; ?>" class="btn">Deposer</a>
			<img class="hr" src="/BanqueTest/image/trait.png" alt="" />
			<h2 class="block-title">
				Si vous voullez retirer une somme d'argent de votre compte 
				
			</h2>
			
			<a href="./form_retrait.php?idc=<?php echo $idc; ?>" class="btn">Retirer</a>
		</div>
		<br class="Clearer" />
	</div>
	<?php } ?>

	

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