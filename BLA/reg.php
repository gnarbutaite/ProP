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


$q ="INSERT INTO CLIENT (EMAIL, FIRST_NAME, LAST_NAME, DOB, PASSWORD) VALUES (:EMAIL,:FIRST_NAME, :LAST_NAME, TO_DATE(:DOB,'DD/MM/YYYY'), :PASSWORD)";
$stmt = $conn->prepare($q);
$stmt->bindParam(':EMAIL', $_POST['EMAIL'], PDO::PARAM_STR, 200);
$stmt->bindParam(':FIRST_NAME', $_POST['FIRST_NAME'], PDO::PARAM_STR, 200);
$stmt->bindParam(':LAST_NAME', $_POST['LAST_NAME'], PDO::PARAM_STR, 200);
$stmt->bindParam(':DOB',$_POST['DOB']);
$stmt->bindParam(':PASSWORD',$_POST['PASSWORD']);
 
if($stmt->execute()==true)
{  
   echo "yeeeey ";
    
}
    else
    {
        echo "****ERROR****";
    }

if ($conn->commit())
{
    session_start();
    if($_SESSION['registered'] = true)
    { $login=true;}
        $_SESSION['email'] = $row['email'];
    header('Location: ha.php');
}
    else
        
    {
        echo "mnogo losho";
    }
    
$conn = null;
   
}
?>