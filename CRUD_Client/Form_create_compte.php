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
	
	
   
	<script>
  $(function() {
    $( "#datepicker" ).datepicker();
  });
  </script>

	
	
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

<form  method="POST" action="create_compte.php"  >


			
				
					<input type="HIDDEN" id="idc" value="<?php echo $_GET['id'];?>"  name="idc"  />
					
			
				<p>Numero Compte :<p/>
					<input type="text" id="numc"   name="numc"/>
					
				<p> Date Ouverture : </p>
				 <input type="text" id="datepicker"   name="dateo"/><br><br>
					
				<p>Montant :<p/>
					<input type="text" id="montt"  name="montt" />
					
				
				<p> Type : </p>
					<SELECT NAME="type"> 
						<OPTION VALUE="Cheque" > Cheque
						<OPTION VALUE="Epargne"> Epargne
					</SELECT>
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