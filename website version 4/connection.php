<?php
// Create connection to Oracle
$username="dbi318554";
    $pass="123";
    $host="fhictora01.fhict.local";
$database="dbi318554";
$tns = "(DESCRIPTION=(ADDRESS_LIST = (ADDRESS = (PROTOCOL = TCP)(HOST = ".$host.")(PORT = 1521)))(CONNECT_DATA=(SERVER=DEDICATED)(SERVICE_NAME=fhictora)));User ID=dbi318554;PASSWORD=123;))"; 
$connStr = "oci:dbname=".$tns;      
$conn = new PDO($connStr,$username,$pass); 
?>

