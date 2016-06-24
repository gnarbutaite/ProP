<?php
    require 'connection.php';
   

    if(isset($_POST['submit']))
    {
      $EMAIL = $_POST['EMAIL'];
  $PASSWORD = $_POST['PASSWORD']; 
   
$sql = "SELECT COUNT(*) FROM CLIENT WHERE EMAIL='$EMAIL' AND PASSWORD='$PASSWORD'";
if ($result = $conn->query($sql)) 
{
    //$result->execute();
    /* Check the number of rows that match the SELECT statement */
  if ($result->fetchColumn() == 1) 
  {
      $_SESSION['registered']=true;
      $_SESSION['email']=$row['email'];
     header('Location: ha.php');
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
