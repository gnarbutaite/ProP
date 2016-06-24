<?php
header("Content-Type: application/json", true);
$username="dbi318554";
$pass="123";
$host="fhictora01.fhict.local";
$database="dbi318554";
$tns = "(DESCRIPTION=(ADDRESS_LIST = (ADDRESS = (PROTOCOL = TCP)(HOST = ".$host.")(PORT = 1521)))(CONNECT_DATA=(SERVER=DEDICATED)(SERVICE_NAME=fhictora)));User ID=dbi318554;PASSWORD=123;))"; 
$connStr = "oci:dbname=".$tns;      
$conn = new PDO($connStr,$username,$pass); 


$conn->beginTransaction();

echo "here ";
$q ="INSERT INTO CLIENT (EMAIL, FIRST_NAME, LAST_NAME) VALUES (:EMAIL,:FIRST_NAME, :LAST_NAME)";
$stmt = $conn->prepare($q);
$stmt->bindParam(':EMAIL', $_POST['EMAIL'], PDO::PARAM_STR, 200);
$stmt->bindParam(':FIRST_NAME', $_POST['FIRST_NAME'], PDO::PARAM_STR, 200);
$stmt->bindParam(':LAST_NAME', $_POST['LAST_NAME'], PDO::PARAM_STR, 200);

if($stmt->execute()==true)
{  
   echo " it works";
    
}
    else
    {
        echo "****ERROR****";
    }

if ($conn->commit())
{
    header('Location: index.php');
}
    else
        
    {
        echo "mnogo losho";
    }
    
$conn = null;


?>