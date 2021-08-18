<?php
try{
    $dbHost     = 'localhost';
    $dbUsername = 'root';
    $dbPassword = '';
    $dbName     = 'galery';
    
    $db = new mysqli($dbHost, $dbUsername, $dbPassword, $dbName);	
	echo "Conexión exitosa";
	
}catch(mysqliExpetion $e){
	print "ERROR" .$e ->getMessage()."<br>"; 
die ();
}


?>