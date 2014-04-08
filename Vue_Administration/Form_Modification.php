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

<form  method="POST" action="Modif_client.php" name="form" onsubmit="return valid_form();">
<?php 

	$id=$_GET['idc'];

	$requette = "select ID_CLIENT,CLIENT_NOM,CLIENT_PRENOM,Mot_de_pass,Telephone,DateNais,CLIENT_ADRESSE,E_mail from client where ID_CLIENT='".$id."'";  
	//$data = mysql_query($requette);  
	$data = mysql_query($requette) or die('Erreur SQL !<br>'.$requette.'<br>'.mysql_error());
	 while($row = mysql_fetch_assoc($data))  
                    {  
	?>

			
				<p>ID :<p/>
					<input type="text" id="idc" value="<?php echo $row['ID_CLIENT'];?>"  name="idc" readonly="true"/>
					<label id="parag1"></label>
			
				<p>Nom :<p/>
					<input type="text" id="nom" value="<?php echo $row['CLIENT_NOM'];?>"  name="nom"onblur="valid_nom();"/>
					<label id="parag1"></label>
				<p>prénom :<p/>
					<input type="text" id="prenom" value="<?php echo $row['CLIENT_PRENOM'];?>" name="prenom" onblur="valid_prenom();"/>
					<label id="parag2"></label>
				<p>e_mail :<p/>
					<input type="email" id="email" value="<?php echo $row['E_mail'];?>"  name="email"onblur="valid_email();"/>
					<label id="parag3"></label><br/><br/>
				<p> modifier un mot de passe : </p>
					<input type="password" id="pass"value="<?php echo $row['Mot_de_pass'];?>"  name="pass"onblur="valider_pass2();" onFocus="rmqpass();"/><br>
					<label id="rmq" ></label>
					<br>
					<label id="pargofpass"></label>
				<p> confirmer votre mot de passe : </p>
					<input type="password" id="pass2" value="<?php echo $row['Mot_de_pass'];?>" onblur="valider_pass1();"/><br>
					<label id="pargofpass2"></label>
					
				<p> Date de naissance : </p>
				 <input type="text" id="datepicker" value="<?php echo $row['DateNais'];?>"  name="daten"/><br><br>
				
				
				<p> Telephone :</p>
					<input type="text" value="<?php echo $row['Telephone'];?>" name="tel" />
				<p> Adresse :</p>
					<textarea  name="adr" ><?php echo $row['CLIENT_ADRESSE'];?> </textarea>
					<br><br>
				
				
			<?php } ?>
			
			<input type="submit" value="Modifier" name="submit" /><br><br>
			
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