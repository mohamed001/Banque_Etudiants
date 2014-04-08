<?php
$base = mysql_connect ('localhost', 'root', '') or die ("erreur de connexion avec le serveur web");
mysql_select_db ('GestionBanque', $base) or die ("erreur de connexion avec la base de donnee mabase");


if (isset ($_POST['Submit'])){
	
			$log=$_POST['login'];
			$pass=$_POST['password'];

$sql="select count(*) as count from client where CLIENT_NOM='".$log."' and Mot_de_pass='".$pass."'";
$result=mysql_query($sql)or die('Erreur SQL !<br>'.$sql.'<br>'.mysql_error());
//$success = mysql_num_rows($result);
$tmp = mysql_fetch_row($result);
//echo "".$tmp[0]['count']."";
if($tmp[0]['count']==1)
{
session_start();
$_SESSION['adm']=$log;
$sql2="select ID_CLIENT  from client where CLIENT_NOM='".$log."' and Mot_de_pass='".$pass."'";
$result=mysql_query($sql2)or die('Erreur SQL !<br>'.$sql2.'<br>'.mysql_error());
 while($row = mysql_fetch_assoc($result))  
                    { 
$_SESSION['ADMIN']=$log;
$idcc=$row['ID_CLIENT']; 
	header('Location: client.php?idcc='.$idcc);     
}
} 
 else
{
	header('Location: conn_client.html');     
}
}
		

?>