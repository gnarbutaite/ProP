<?php
// Create connection to Oracle
$username="dbi318554";
    $pass="123";
$host="fhictora01.fhict.local";
$database="dbi318554";
$tns = "(DESCRIPTION=(ADDRESS_LIST = (ADDRESS = (PROTOCOL = TCP)(HOST = ".$host.")(PORT = 1521)))(CONNECT_DATA=(SERVER=DEDICATED)(SERVICE_NAME=fhictora)));User ID=dbi318554;PASSWORD=123;))"; 
$connStr = "oci:dbname=".$tns;      
$conn = new PDO($connStr,$username,$pass); 

if(isset($_POST['submit'])) { 
$conn->beginTransaction();

    if(isset($_POST['type']))
    {$value == 1;}
    else
    {$value==0;}
    
   
    
/*
$q ="INSERT INTO CLIENT (email, firstname, lastname, type) VALUES (:EMAIL,:FIRST_NAME, :LAST_NAME, :CAMPING_SPOT_#)";
$stmt = $conn->prepare($q);
$stmt->bindParam(':EMAIL', $_POST['email'], PDO::PARAM_STR, 200);
$stmt->bindParam(':FIRST_NAME', $_POST['firstname'], PDO::PARAM_STR, 200);
$stmt->bindParam(':LAST_NAME', $_POST['lastname'], PDO::PARAM_STR, 200);
$stmt->bindParam(':CAMPING_SPOT_#', $_POST['type'], PDO::PARAM_STR, 200);
*/
    
$q ="INSERT INTO TICKET (CLIENT_EMAIL, CAMPING_SPOT_#) VALUES (:email,:type)";
$stmt = $conn->prepare($q);
$stmt->bindParam(':EMAIL', $_POST['email'], PDO::PARAM_STR, 200);
$stmt->bindParam(':CAMPING_SPOT_#', $_POST['type']);
  //  echo "razgele";
   
    
if($stmt->execute()==true)
{  
   echo " bravo";
   
}
    else
    {
        echo "****ERROR****";
    }

if ($conn->commit())
{
    header('Location: print.php');
    
}
    else
        
    {
        echo "mnogo losho";
    }
    
$conn = null;

}
?>
    
    