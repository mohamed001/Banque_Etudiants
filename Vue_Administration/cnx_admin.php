<?php
$base = mysql_connect ('localhost', 'root', '') or die ("erreur de connexion avec le serveur web");
mysql_select_db ('GestionBanque', $base) or die ("erreur de connexion avec la base de donnee mabase");


if (isset ($_POST['connect'])){
	
			$log=$_POST['log'];
			$pass=$_POST['psswd'];

$sql="select count(*) as count from admin where login='".$log."' and pass='".$pass."'";
$result=mysql_query($sql);
//$success = mysql_num_rows($result);
$tmp = mysql_fetch_row($result);
//echo "".$tmp[0]['count']."";
if($tmp[0]['count']==1)
{
session_start();
$_SESSION['ADMIN']=$log;
	header('Location: choix_gestion.php');     
}
 else
{
	header('Location: cnx_admin.html');     
}
}
		

?>