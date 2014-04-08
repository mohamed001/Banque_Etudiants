
<?php

session_start(); 
$_SESSION = array();

session_unregister("adm"); 

session_unset(); 

session_destroy(); 

header('Location:/banquetest') ;
exit();
?> 

