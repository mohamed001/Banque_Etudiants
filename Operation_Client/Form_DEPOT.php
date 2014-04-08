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
  <link rel="stylesheet" href="/resources/demos/style.css" />
	
	
    <!-- (c) 2012 Absolunet inc. -->
	<script>
  $(function() {
    $( "#datepicker" ).datepicker();
  });
  </script>

	
	
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
	<div id="Content">

<form  method="POST" action="Depot.php" name="form" >
<?php 

	$id=$_GET['idc'];

	$requette = "select * from comptes where Client_Compte='".$id."'";  
	//$data = mysql_query($requette);  
	$data = mysql_query($requette) or die('Erreur SQL !<br>'.$requette.'<br>'.mysql_error());
	 while($row = mysql_fetch_assoc($data))  
                    {  
	?>
				<input type="hidden" name="idcompt" value="<?php echo $row['COMPTE'];?>"/>
				<input type="hidden" name="idc" value="<?php echo $row['Client_Compte'];?>"/>

				<h1>OPERATION : DEPOT</h1>
				
				<p>SOLDE  ACTUEL :<p/>
					<input type="text" id="idc" value="<?php echo $row['SOLDE_ACTUEL'];?>"  name="montact" readonly="true"/>
					
			
				<p>SOLDE A DEPOSER  :<p/>
					<input type="text" id="nom"   name="monttdepo" /><br><br>
					
				
				
			<?php } ?>
			
			<input type="submit" value="VALIDER" name="submit" /><br><br>
			
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