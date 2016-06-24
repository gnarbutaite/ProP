 <?php
    session_start();
    unset($_SESSION['registered']);
    header("Location:index.php");
session_destroy();
?>