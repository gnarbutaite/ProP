<?php
    require 'connection.php';
    $EMAIL = $_POST['EMAIL'];
  $PASSWORD = $_POST['PASSWORD'];

    if(isset($_POST['submit']))
    {
      
   
$sql = "SELECT COUNT(*) FROM CLIENT WHERE EMAIL='$EMAIL' AND PASSWORD='$PASSWORD'";
if ($result = $conn->query($sql)) 
{
    //$result->execute();
    /* Check the number of rows that match the SELECT statement */
  if ($result->fetchColumn() == 1) 
  {
     header('Location: choose.php');
  }
  else
  {
      echo "Wrong username or password"; 
  }
$result = null;
$conn = null;
}
else {echo " problem";
     }}
?>
