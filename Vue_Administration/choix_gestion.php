<?php
// On prolonge la session
session_start();
//echo $_SESSION['ADMIN'];
if(!isset($_SESSION['ADMIN'])){
 header("Location:/banquetest");
 }
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
	<?php if(isset($_SESSION['ADMIN'])){ ?>
	
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
		<div class="splash-block">
			
			<h2 class="block-title">
				ESPACE CLIENTS , FOURNISSEURS   <br /> ET INVESTISSEURS
			</h2>
			<p style="margin-top:42px;">Gestion Bancaire ENSAO – Gestion de vos clients , nouveau , modification , consultation, grâce a la gestion online bancaire de ENSAO .<br />&nbsp;</p>
			
			<img class="hr" src="/BanqueTest/image/trait.png" alt="" />
			<p class="texte-petit">
				Accée à <strong>ESPACE CLIENT</strong> pour une direction analytique.	
			</p>
			<a href="/BanqueTest/vue_administration/gestion_client.php" class="btn">Espace Client</a>
		</div>
		
		<div class="splash-block">
			
			
			<h2 class="block-title">
				ESPACE COMPTES BANCAIRE EPARGNE, CHEQUE <br/> DECOUVERT AUTORISE ET RELEVEE
				
			</h2>
			<p style="margin-top:42px;">
				Notre E-Banque est à votre disposition pour atteindre toutes vos objectifs .
			</p>
			<img class="hr" src="/BanqueTest/image/trait.png" alt="" />
			<p class="texte-petit">
				Accée à <strong>ESPACE COMPTE</strong> pour une direction efficace.	
			</p>
			<a href="/BanqueTest/vue_administration/gestion_compte.php" class="btn">Espace Compte</a>
		
			
		</div>
		<br class="Clearer" />
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