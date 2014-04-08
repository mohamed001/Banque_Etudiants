
<?php

session_start(); 
$_SESSION = array();

session_unregister("ADMIN"); 

session_unset(); 

session_destroy(); 

header('Location:/banquetest') ;
exit();
?> 

