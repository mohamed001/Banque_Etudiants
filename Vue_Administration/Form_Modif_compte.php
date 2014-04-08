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


<form  method="POST" action="modif_compte.php"  >

	<?php 

	$id=$_GET['idct'];

	$requette = "select * from comptes where COMPTE='".$id."'";  
	//$data = mysql_query($requette);  
	$data = mysql_query($requette) or die('Erreur SQL !<br>'.$requette.'<br>'.mysql_error());
	 while($row = mysql_fetch_assoc($data))  
                    {  
	?>
			
				
					<input type="HIDDEN" id="idct" value="<?php echo $_GET['idct'];?>"  name="idct"  />
					
			
				<p>Numero Compte :<p/>
					<input type="text" id="numc" value="<?php echo $row['COMPTE_NUMERO'];?>"   name="numc"/>
					
				<p> Date Ouverture : </p>
				 <input type="text" id="datepicker"  value="<?php echo $row['COMPTE_DATE_OUVERTURE'];?>"  name="dateo"/><br><br>
					
				<p>Montant :<p/>
					<input type="text" id="montt" value="<?php echo $row['SOLDE_ACTUEL'];?>"  name="montt" />
					
				<?php } ?>
				
				<br/><br/>
				
			
			
			<input type="submit" value="Valider" name="submit" /><br><br>
			
			</form>
			
				
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